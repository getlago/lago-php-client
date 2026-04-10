# Rate Limiting Support

The Lago PHP Client SDK now includes built-in support for handling HTTP 429 (rate limit) responses from the Lago API.

## Overview

The Lago API implements rate limiting to maintain service stability. When the rate limit is exceeded, the API responds with HTTP 429 along with the following rate limit headers:

- `x-ratelimit-limit` — Maximum number of requests allowed in the current time window
- `x-ratelimit-remaining` — Number of remaining requests in the current window
- `x-ratelimit-reset` — Number of seconds until the rate limit window resets

## Features

### Automatic Retry on Rate Limit

The SDK automatically retries requests that encounter rate limits when configured to do so:

- **Intelligent backoff**: Uses the `x-ratelimit-reset` header value when available
- **Fallback strategy**: Uses exponential backoff (1s, 2s, 4s, 8s, ...) if the header is missing
- **Configurable**: Retries are enabled by default but can be customized or disabled

### Rate Limit Exception

When a rate limit is encountered and automatic retry is disabled (or max retries exceeded), the SDK throws a `LagoRateLimitException` containing:

- HTTP status code (429)
- Error message
- Rate limit header values for manual handling

## Usage

### Enable Rate Limit Retries (Default)

Rate limiting with automatic retries is enabled by default:

```php
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\ClientFactory;

$config = new Configuration();
// Rate limit retries are enabled by default
// $config->setRetryOnRateLimit(true);  // Explicit (optional)
// $config->setMaxRetries(3);           // Default is 3

$client = ClientFactory::createClient($config);

// Use the client with your API classes...
```

### Customize Retry Behavior

```php
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\ClientFactory;

$config = new Configuration();

// Allow up to 5 retries
$config->setMaxRetries(5);

// Or disable automatic retries
$config->setRetryOnRateLimit(false);

$client = ClientFactory::createClient($config);
```

### Using with API Classes

Pass the configured client to your API classes:

```php
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\ClientFactory;
use Lago\LagoPhpClient\Api\CustomersApi;

$config = new Configuration();
$config->setApiKey('Authorization', 'YOUR_API_KEY');
$config->setMaxRetries(5);

$client = ClientFactory::createClient($config);
$customersApi = new CustomersApi($client, $config);

// API calls will automatically retry on rate limit (429)
$customer = $customersApi->findCustomer('customer-id');
```

### Handle Rate Limit Exceptions

When rate limits are disabled or max retries are exceeded, catch the exception:

```php
use Lago\LagoPhpClient\LagoRateLimitException;

try {
    $customer = $customersApi->findCustomer('customer-id');
} catch (LagoRateLimitException $e) {
    $limit = $e->getRateLimitLimit();
    $remaining = $e->getRateLimitRemaining();
    $resetIn = $e->getRateLimitReset();
    
    echo "Rate limited! Reset in $resetIn seconds";
}
```

## How It Works

### Request Flow with Automatic Retry

1. Request is sent to the API
2. If response is HTTP 429:
   - Parse rate limit headers
   - If `x-ratelimit-reset` header exists, wait that many seconds
   - Otherwise, use exponential backoff (1s, 2s, 4s, etc.)
   - Retry the request
3. Repeat until success or max retries reached
4. If max retries exceeded, return 429 response (or throw exception if disabled)

### Backoff Strategy

**With `x-ratelimit-reset` header (Recommended)**:
- Wait exactly the number of seconds specified in the header before retrying
- Most efficient as it aligns with the API's reset time

**Without `x-ratelimit-reset` header (Fallback)**:
- Retry 1: Wait 1 second (2^0)
- Retry 2: Wait 2 seconds (2^1)
- Retry 3: Wait 4 seconds (2^2)
- Retry N: Wait 2^(N-1) seconds

## Configuration Methods

### Configuration Class

```php
$config = new Configuration();

// Enable/disable automatic retry (default: true)
$config->setRetryOnRateLimit(bool $enable);
$enabled = $config->getRetryOnRateLimit();

// Set maximum number of retries (default: 3)
$config->setMaxRetries(int $maxRetries);
$max = $config->getMaxRetries();
```

### LagoRateLimitException

```php
try {
    // API call...
} catch (LagoRateLimitException $e) {
    // Access rate limit information
    $limit = $e->getRateLimitLimit();       // Max requests per window
    $remaining = $e->getRateLimitRemaining(); // Remaining requests
    $reset = $e->getRateLimitReset();       // Seconds until reset
    
    // Access standard exception info
    $code = $e->getCode();                  // 429
    $message = $e->getMessage();            // Error message
    $headers = $e->getResponseHeaders();    // All response headers
}
```

## Best Practices

### 1. Use Default Settings for Most Cases

The default configuration (3 retries with header-based backoff) works well for most applications:

```php
$config = new Configuration();
$client = ClientFactory::createClient($config);
```

### 2. Increase Retries for Batch Operations

When performing batch operations, consider increasing the retry count:

```php
$config->setMaxRetries(5); // More tolerant of rate limits
```

### 3. Disable for High-Frequency Request Patterns

If you're making many requests and want to implement your own rate limiting strategy:

```php
$config->setRetryOnRateLimit(false);

// Handle rate limits manually
try {
    $result = $api->operation();
} catch (LagoRateLimitException $e) {
    // Implement custom rate limit handling
}
```

### 4. Monitor Rate Limit Headers

Always check the remaining and reset values for proactive rate limit management:

```php
// Not directly available from successful responses yet
// But accessible via LagoRateLimitException when limit is hit
```

### 5. Implement Request Queuing

For high-volume operations, implement a queue-based system:

```php
// Pseudo-code: implement your own queue
while ($requests = getNextBatch()) {
    foreach ($requests as $request) {
        try {
            $api->execute($request);
        } catch (LagoRateLimitException $e) {
            // Re-queue the request
            queueRequest($request);
            sleep($e->getRateLimitReset());
        }
    }
}
```

## Troubleshooting

### Requests Still Take Too Long

If retries are taking too long:

1. Reduce `maxRetries` to fail faster
2. Set `retryOnRateLimit` to false and handle manually
3. Check if the API returns `x-ratelimit-reset` headers for better timing

### Always Getting 429 Responses

If you're consistently hitting rate limits:

1. Review your request frequency
2. Implement request queuing or batching
3. Contact Lago support to discuss your rate limit quota

### Testing with Mocked Responses

When testing, you can disable retry behavior:

```php
$config = new Configuration();
$config->setRetryOnRateLimit(false);
$client = ClientFactory::createClient($config);
```

This allows you to test rate limit handling without actual delays.

## API Reference

### ClientFactory

Factory for creating configured Guzzle clients with rate limit middleware.

```php
public static function createClient(
    Configuration $config,
    array $options = []
): ClientInterface
```

### RateLimitRetryMiddleware

Guzzle middleware that handles 429 responses and retries.

```php
public function __construct(
    int $maxRetries = 3,
    bool $retryOnRateLimit = true
)

public function __invoke(): callable
```

### LagoRateLimitException

Exception thrown for rate limit errors.

```php
public function getRateLimitLimit(): ?int
public function getRateLimitRemaining(): ?int
public function getRateLimitReset(): ?int
```

## Examples

### Example 1: Basic Usage with Automatic Retry

```php
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\ClientFactory;
use Lago\LagoPhpClient\Api\CustomersApi;

$config = new Configuration();
$config->setApiKey('Authorization', 'your-api-key');

$client = ClientFactory::createClient($config);
$api = new CustomersApi($client, $config);

// Will automatically retry if rate limited
$customers = $api->findAllCustomers();
```

### Example 2: Handling Rate Limits Explicitly

```php
use Lago\LagoPhpClient\LagoRateLimitException;

try {
    $customer = $api->findCustomer('customer-id');
} catch (LagoRateLimitException $e) {
    $waitSeconds = $e->getRateLimitReset() ?? 60;
    $logger->warning(
        "Rate limited, waiting {$waitSeconds}s",
        ['remaining' => $e->getRateLimitRemaining()]
    );
    
    sleep($waitSeconds);
    // Retry manually or queue for later
}
```

### Example 3: Batch Processing with Custom Retry Logic

```php
$config->setRetryOnRateLimit(false); // Handle manually
$client = ClientFactory::createClient($config);
$api = new CustomersApi($client, $config);

$queue = new SplQueue();
$customers = $customerIds;

while (!$queue->isEmpty() || !empty($customers)) {
    if (empty($customers) && !$queue->isEmpty()) {
        $customerId = $queue->dequeue();
    } elseif (!empty($customers)) {
        $customerId = array_shift($customers);
    } else {
        break;
    }
    
    try {
        $customer = $api->findCustomer($customerId);
        processCustomer($customer);
    } catch (LagoRateLimitException $e) {
        // Re-queue for later
        $queue->enqueue($customerId);
        
        $waitTime = $e->getRateLimitReset() ?? 60;
        sleep($waitTime);
    }
}
```
