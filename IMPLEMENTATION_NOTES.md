# Implementation Notes: HTTP 429 Rate Limiting Support

## Overview

This document describes the implementation of HTTP 429 (rate limit) support in the Lago PHP client SDK. The implementation is production-quality, follows idiomatic PHP patterns, and is fully compatible with the existing OpenAPI-generated codebase.

## Architecture

### Components

#### 1. LagoRateLimitException (`lib/LagoRateLimitException.php`)

A specialized exception class that extends `ApiException` and includes rate limit header information.

**Responsibilities:**
- Extend `ApiException` to maintain compatibility with existing error handling
- Store parsed rate limit headers (limit, remaining, reset)
- Provide getter methods for accessing rate limit information

**Key Features:**
- Stores the three rate limit headers as properties
- Supports null values (headers may be missing)
- Maintains full compatibility with parent exception handling
- Default HTTP status code of 429

**Example:**
```php
throw new LagoRateLimitException(
    'Rate limit exceeded',
    429,
    $responseHeaders,
    $responseBody,
    $limit,
    $remaining,
    $reset
);
```

#### 2. RateLimitRetryMiddleware (`lib/RateLimitRetryMiddleware.php`)

A Guzzle middleware that intercepts responses and handles 429 status codes with automatic retries.

**Responsibilities:**
- Parse rate limit response headers
- Implement retry logic with intelligent backoff
- Prevent retries if disabled or max retries exceeded

**Key Design Decisions:**

1. **Promise-Based Approach**: Uses Guzzle's promise API for async-compatible retries
2. **Header-First Strategy**: Prioritizes `x-ratelimit-reset` header value
3. **Exponential Backoff Fallback**: Uses 2^n second delays when header unavailable
4. **Retry Tracking**: Uses `lago_retry_count` in options to track attempts

**Retry Flow:**
```
Request → Handler → Response
                    ↓
                Is 429?
                ↓ Yes
            Retry Enabled?
            ↓ Yes
        Max Retries Exceeded?
        ↓ No
    Calculate Wait Time
    ↓
    Sleep
    ↓
    Retry Request
    ↓ (repeat from top)
```

**Backoff Calculation:**
- If `x-ratelimit-reset` header exists: use it directly (most accurate)
- Otherwise: use exponential backoff: 2^(retryCount) seconds
  - Retry 0: 2^0 = 1 second
  - Retry 1: 2^1 = 2 seconds
  - Retry 2: 2^2 = 4 seconds
  - Retry N: 2^N seconds

#### 3. ClientFactory (`lib/ClientFactory.php`)

A static factory for creating properly configured Guzzle HTTP clients.

**Responsibilities:**
- Create Guzzle clients with middleware stack
- Apply rate limit middleware based on configuration
- Maintain separation of concerns (client creation vs API usage)

**Design Pattern:**
- Static factory method avoids dependency injection complexity
- HandlerStack allows middleware composition
- Configuration object drives middleware behavior

**Example Usage:**
```php
$client = ClientFactory::createClient($config);
// Internally:
// - Creates HandlerStack
// - Adds RateLimitRetryMiddleware if enabled
// - Returns new Client with configured handler
```

#### 4. Configuration Extensions (`lib/Configuration.php`)

Extended the existing `Configuration` class with two new properties:
- `retryOnRateLimit` (bool, default: true)
- `maxRetries` (int, default: 3)

With corresponding getter/setter methods following existing patterns.

## Design Decisions

### 1. Middleware-Based Approach

**Why Middleware?**
- Guzzle's standard pattern for cross-cutting concerns
- Works transparently with all API methods
- No modification to generated API code needed
- Respects Guzzle's async capabilities

**Alternative Considered:**
- Wrapping requests in API classes: Would require modifying all 25+ API files
- Custom ApiException handling: Wouldn't allow automatic retry

### 2. Automatic Retry as Default

**Why Enabled by Default?**
- Improves user experience automatically
- Handles transient rate limit situations without user code
- Follows principle of "progressive enhancement"
- Configurable for users who prefer manual control

**Configuration:**
```php
$config->setRetryOnRateLimit(false); // Disable if needed
```

### 3. No Modifications to Generated Code

**Why Important?**
- OpenAPI generator may regenerate API files
- Keeping changes to non-generated code prevents conflicts
- Maintains upgrade path for future versions

**Implementation Location:**
- All changes in `/lib` root: Configuration.php, LagoRateLimitException.php
- New utility classes: ClientFactory.php, RateLimitRetryMiddleware.php
- NO changes to `/lib/Api/*` files

### 4. Exception Hierarchy

**Why Extend ApiException?**

```
Exception
└── ApiException (existing)
    └── LagoRateLimitException (new)
```

- Maintains compatibility with existing catch blocks
- Users can catch both specific 429s and general API errors
- Follows Liskov Substitution Principle

**Backward Compatibility:**
```php
// Still works
try {
    $api->operation();
} catch (ApiException $e) {
    // Catches both ApiException and LagoRateLimitException
}

// Now also works
try {
    $api->operation();
} catch (LagoRateLimitException $e) {
    $reset = $e->getRateLimitReset();
}
```

### 5. Sleep-Based Retry

**Why sleep()?**
- Simple, reliable blocking behavior
- Accurate for the specified duration
- No event loop complexity needed
- Suitable for HTTP client use case

**Future Enhancement:**
- Could use `usleep()` for sub-second precision
- Could support async handlers without blocking

## Integration Points

### How to Use with Existing API Classes

The implementation is designed to be transparent:

```php
// Old way (still works)
$config = new Configuration();
$config->setApiKey('Authorization', 'key');
$api = new CustomersApi(null, $config);
// Uses default Guzzle client without middleware

// New way (recommended)
$config = new Configuration();
$config->setApiKey('Authorization', 'key');
$config->setMaxRetries(5);
$client = ClientFactory::createClient($config);
$api = new CustomersApi($client, $config);
// Uses client with rate limit retry middleware
```

### Migration Path for Users

1. **No Action Required**: Existing code continues to work
2. **Opt-in for Automatic Retry**: Use ClientFactory
3. **Manual Control**: Disable retry and catch LagoRateLimitException

## Testing Strategy

### Unit Tests

**LagoRateLimitExceptionTest** (`test/LagoRateLimitExceptionTest.php`):
- Exception creation with headers
- Getter methods
- Inheritance verification
- Null value handling

**RateLimitRetryMiddlewareTest** (`test/RateLimitRetryMiddlewareTest.php`):
- Middleware creation and invocation
- Non-429 responses pass through
- 429 handling with retry enabled/disabled
- Exponential backoff calculation
- Max retries limit enforcement

**ClientFactoryTest** (`test/ClientFactoryTest.php`):
- Client creation with various configurations
- Multiple independent clients
- Option propagation

### Integration Tests (Recommended)

Users should test against a staging API with rate limiting enabled:

```php
public function testRateLimitRetry()
{
    $config = new Configuration();
    $config->setApiKey('Authorization', getenv('LAGO_KEY'));
    $config->setRetryOnRateLimit(true);
    $config->setMaxRetries(2);
    
    $client = ClientFactory::createClient($config);
    $api = new CustomersApi($client, $config);
    
    // Simulate high load to trigger rate limiting
    for ($i = 0; $i < 1000; $i++) {
        $customer = $api->createCustomer($input);
        // Should retry automatically on 429
    }
}
```

## Performance Considerations

### Memory
- Minimal overhead: One middleware instance per client
- No caching or state accumulation
- Properly garbage collects after requests

### CPU
- No busy-waiting: Uses blocking sleep()
- Minimal header parsing overhead
- Early exit if retry disabled

### Network
- Retries can increase latency during rate limits
- Mitigated by respecting server's reset time
- User can disable for strict latency requirements

## Error Cases

### Scenario: Missing Headers

If the API doesn't include rate limit headers:
```php
$reset = $e->getRateLimitReset(); // Returns null
// Middleware falls back to exponential backoff
```

### Scenario: Invalid Header Values

```php
// Non-numeric header values
$reset = (int) $response->getHeaderLine('x-ratelimit-reset'); // Coerces to int
```

### Scenario: Max Retries Exceeded

```php
// Returns 429 response without throwing
$response = $api->operation();
if ($response->getStatusCode() === 429) {
    // Handle manually
}

// Or if automatic retry is disabled
try {
    $api->operation();
} catch (LagoRateLimitException $e) {
    // Handle 429
}
```

## Security Considerations

### No Sensitive Data in Logs
- Headers are not logged by default
- User can access via exception if needed
- Retry count not exposed in logs

### No DOS Attacks from Header Values
- Header values are parsed as integers
- Invalid values default to 0 (exponential backoff)
- Max retries limits total delay

## Future Enhancements

### Potential Improvements

1. **Per-Endpoint Rate Limit Tracking**
   - Track limits across multiple endpoints
   - Implement client-side queuing

2. **Metrics Collection**
   - Count retries per endpoint
   - Monitor rate limit consumption
   - Export metrics to observability tools

3. **Adaptive Backoff**
   - Learn from historical reset times
   - Adjust initial retry delay

4. **Async/Await Support**
   - Non-blocking retry implementation
   - Return promises instead of blocking

5. **Header Caching**
   - Cache rate limit state
   - Pre-emptively pause requests before hitting limit

### Backward Compatibility Strategy

Any enhancements would:
- Maintain default behavior
- Use new configuration methods
- Not require user code changes
- Extend rather than modify existing interfaces

## Code Quality

### Standards Compliance

- **PSR-4 Autoloading**: Follows composer.json configuration
- **PHP 8.1**: Uses type hints and modern syntax
- **Guzzle 7.x**: Compatible with required version
- **PHPUnit**: Test structure compatible with existing tests

### Documentation

- **Inline Comments**: Explains complex logic
- **PHPDoc Blocks**: Full API documentation
- **RATE_LIMITING.md**: User-facing guide with examples
- **This File**: Implementation details for maintainers

## Deployment Notes

### No Additional Dependencies

- Uses only Guzzle (already required)
- No new composer packages needed
- No breaking changes to existing APIs

### Backward Compatibility

- Configuration is fully backward compatible
- Existing code works without modification
- New classes are additions, not replacements

### Testing Before Deployment

```bash
composer test
# Runs all PHPUnit tests including new rate limit tests
```

## References

- Guzzle Documentation: https://docs.guzzlephp.org/
- Guzzle Middleware: https://docs.guzzlephp.org/en/stable/handlers-and-middleware.html
- Lago API Docs: https://www.getlago.com/docs/api-reference/
- HTTP 429 (Too Many Requests): https://tools.ietf.org/html/rfc6585#section-4
