# Rate Limiting Quick Start Guide

## 5-Minute Setup

### 1. Basic Usage (Automatic Retry Enabled by Default)

```php
<?php
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\ClientFactory;
use Lago\LagoPhpClient\Api\CustomersApi;

// Create configuration
$config = new Configuration();
$config->setApiKey('Authorization', 'your-api-key');

// Create client with rate limit retry middleware
$client = ClientFactory::createClient($config);

// Create API client
$api = new CustomersApi($client, $config);

// Make requests - automatic retry on 429
try {
    $customer = $api->findCustomer('customer-id');
} catch (\Lago\LagoPhpClient\LagoRateLimitException $e) {
    // Only thrown if max retries exceeded
    echo "Rate limited: " . $e->getRateLimitReset() . "s wait needed";
}
```

### 2. Customize Retry Behavior

```php
// Allow more retries for batch operations
$config->setMaxRetries(5);

// Or disable automatic retry for manual control
$config->setRetryOnRateLimit(false);

// Always create client from config
$client = ClientFactory::createClient($config);
```

### 3. Handle Rate Limits Manually

```php
use Lago\LagoPhpClient\LagoRateLimitException;

$config->setRetryOnRateLimit(false);
$client = ClientFactory::createClient($config);
$api = new CustomersApi($client, $config);

try {
    $result = $api->findCustomer('id');
} catch (LagoRateLimitException $e) {
    $waitSeconds = $e->getRateLimitReset() ?? 60;
    echo "Rate limited, waiting {$waitSeconds} seconds...";
    sleep($waitSeconds);
    
    // Retry manually
    $result = $api->findCustomer('id');
}
```

## What Changed?

### New Classes
- `LagoRateLimitException` - Exception with rate limit info
- `RateLimitRetryMiddleware` - Guzzle middleware for retry
- `ClientFactory` - Creates configured clients

### New Configuration Methods
```php
$config->setRetryOnRateLimit(bool $enable);  // Default: true
$config->getRetryOnRateLimit(): bool;

$config->setMaxRetries(int $max);            // Default: 3
$config->getMaxRetries(): int;
```

## Features

| Feature | Details |
|---------|---------|
| **Automatic Retry** | Enabled by default, configurable |
| **Smart Backoff** | Uses `x-ratelimit-reset` header if available |
| **Fallback Strategy** | Exponential backoff: 1s, 2s, 4s, 8s... |
| **Max Retries** | Configurable, default 3 |
| **Rate Limit Info** | Accessible via `LagoRateLimitException` |
| **Backward Compatible** | All existing code works unchanged |

## Common Scenarios

### Scenario 1: Batch Processing
```php
$config->setMaxRetries(5); // Be more tolerant
$client = ClientFactory::createClient($config);

foreach ($customerData as $data) {
    $api->createCustomer($data); // Retries automatically
}
```

### Scenario 2: Real-time API
```php
$config->setRetryOnRateLimit(false); // Fast fail
$client = ClientFactory::createClient($config);

try {
    return $api->findCustomer($id);
} catch (LagoRateLimitException $e) {
    return null; // Or error response
}
```

### Scenario 3: Monitoring
```php
try {
    $api->operation();
} catch (LagoRateLimitException $e) {
    $logger->warning('Rate limited', [
        'limit' => $e->getRateLimitLimit(),
        'remaining' => $e->getRateLimitRemaining(),
        'reset_in' => $e->getRateLimitReset() . 's',
    ]);
}
```

## Migration from Existing Code

**Your existing code works as-is:**
```php
// Old code - still works
$config = new Configuration();
$api = new CustomersApi(null, $config);
// Uses default client, no retry middleware
```

**To enable rate limit retry, just use ClientFactory:**
```php
// New code - with automatic retry
$config = new Configuration();
$client = ClientFactory::createClient($config); // <-- Add this
$api = new CustomersApi($client, $config);     // Pass client
```

## Testing

### Unit Tests
```bash
vendor/bin/phpunit test/LagoRateLimitExceptionTest.php
vendor/bin/phpunit test/RateLimitRetryMiddlewareTest.php
vendor/bin/phpunit test/ClientFactoryTest.php
```

### Your Tests
```php
public function testRateLimitHandling()
{
    $config = new Configuration();
    $config->setRetryOnRateLimit(false); // For predictability
    $client = ClientFactory::createClient($config);
    $api = new CustomersApi($client, $config);
    
    // Test your rate limit handling
}
```

## Troubleshooting

### "Still getting 429?"
1. Check max retries isn't 0: `$config->setMaxRetries(3)`
2. Verify retry is enabled: `$config->setRetryOnRateLimit(true)`
3. Check API rate limits: Contact Lago support

### "Requests too slow?"
1. Reduce max retries: `$config->setMaxRetries(1)`
2. Disable retry: `$config->setRetryOnRateLimit(false)`
3. Implement client-side rate limiting

### "Exception not caught?"
1. Use correct exception: `LagoRateLimitException` not `ApiException`
2. Check if automatic retry is enabled (won't throw during retries)
3. Exception only thrown if max retries exceeded

## Full Documentation

- See `docs/RATE_LIMITING.md` for complete documentation
- See `IMPLEMENTATION_NOTES.md` for technical details
- See `lib/LagoRateLimitException.php` for API reference
- See `lib/RateLimitRetryMiddleware.php` for retry logic
- See `lib/ClientFactory.php` for client creation

## Next Steps

1. Update your code to use `ClientFactory::createClient($config)`
2. Customize retry settings as needed
3. Monitor rate limit exceptions in production
4. Adjust max retries based on your usage patterns
