<?php
/**
 * ClientFactory
 * PHP version 8.1
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   Lago Tech
 * @link     https://www.getlago.com
 */

namespace Lago\LagoPhpClient;

use GuzzleHttp\Client;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\HandlerStack;

/**
 * ClientFactory Class Doc Comment
 *
 * Factory for creating Guzzle HTTP clients with Lago-specific middleware and configuration.
 * Applies rate limit retry middleware when enabled in the Configuration.
 *
 * @category Class
 * @package  Lago\LagoPhpClient
 * @author   Lago Tech
 * @link     https://www.getlago.com
 */
class ClientFactory
{
    /**
     * Creates a configured Guzzle HTTP client with rate limit retry middleware
     *
     * @param Configuration $config The client configuration
     * @param array         $options Additional Guzzle client options
     *
     * @return ClientInterface A configured Guzzle client
     */
    public static function createClient(Configuration $config, array $options = []): ClientInterface
    {
        $handlerStack = HandlerStack::create();

        // Add rate limit retry middleware if enabled
        if ($config->getRetryOnRateLimit()) {
            $middleware = new RateLimitRetryMiddleware(
                $config->getMaxRetries(),
                true
            );
            $handlerStack->push($middleware(), 'lago_rate_limit_retry');
        }

        // Set the handler in the client options
        $options['handler'] = $handlerStack;

        return new Client($options);
    }
}
