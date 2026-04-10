<?php
/**
 * RateLimitRetryMiddlewareTest
 * PHP version 8.1
 */

namespace Lago\LagoPhpClient\Test;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Lago\LagoPhpClient\RateLimitRetryMiddleware;

/**
 * RateLimitRetryMiddlewareTest Class Doc Comment
 *
 * @category Class
 * @package  Lago\LagoPhpClient\Test
 * @author   Lago Tech
 */
class RateLimitRetryMiddlewareTest extends TestCase
{
    /**
     * Test middleware creation with default parameters
     */
    public function testMiddlewareCreation()
    {
        $middleware = new RateLimitRetryMiddleware();

        $this->assertIsCallable($middleware());
    }

    /**
     * Test middleware creation with custom max retries
     */
    public function testMiddlewareWithCustomMaxRetries()
    {
        $middleware = new RateLimitRetryMiddleware(5, true);

        $this->assertIsCallable($middleware());
    }

    /**
     * Test middleware with retry disabled
     */
    public function testMiddlewareWithRetryDisabled()
    {
        $middleware = new RateLimitRetryMiddleware(3, false);

        $this->assertIsCallable($middleware());
    }

    /**
     * Test middleware callable returns callable
     */
    public function testMiddlewareReturnsCallable()
    {
        $middleware = new RateLimitRetryMiddleware();
        $middlewareCallable = $middleware();

        $this->assertTrue(is_callable($middlewareCallable));

        // Simulate handler chain
        $handler = function ($request, $options) {
            return \GuzzleHttp\Promise\Create::promiseFor(new Response(200));
        };

        $result = $middlewareCallable($handler);

        $this->assertTrue(is_callable($result));
    }

    /**
     * Test that non-429 responses pass through
     */
    public function testNon429ResponsePassthrough()
    {
        $middleware = new RateLimitRetryMiddleware();
        $middlewareCallable = $middleware();

        $callCount = 0;
        $handler = function ($request, $options) use (&$callCount) {
            $callCount++;
            return \GuzzleHttp\Promise\Create::promiseFor(new Response(200, ['content-type' => 'application/json']));
        };

        $wrappedHandler = $middlewareCallable($handler);
        $request = new Request('GET', 'https://api.example.com/test');
        $promise = $wrappedHandler($request, []);

        // Wait for the promise to resolve
        $response = $promise->wait();

        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(1, $callCount, 'Handler should be called exactly once for non-429 responses');
    }

    /**
     * Test that 429 responses are retried when retry is enabled
     */
    public function testRate429WithRetryEnabled()
    {
        // Create a middleware with max 1 retry
        $middleware = new RateLimitRetryMiddleware(1, true);
        $middlewareCallable = $middleware();

        $callCount = 0;
        $handler = function ($request, $options) use (&$callCount) {
            $callCount++;

            // First call returns 429, second returns 200
            if ($callCount === 1) {
                return \GuzzleHttp\Promise\Create::promiseFor(
                    new Response(429, [
                        'x-ratelimit-limit' => '100',
                        'x-ratelimit-remaining' => '0',
                        'x-ratelimit-reset' => '0', // 0 seconds - use exponential backoff
                    ])
                );
            }

            return \GuzzleHttp\Promise\Create::promiseFor(new Response(200));
        };

        $wrappedHandler = $middlewareCallable($handler);
        $request = new Request('GET', 'https://api.example.com/test');
        $promise = $wrappedHandler($request, []);

        // Wait for promise and verify final response is 200
        $response = $promise->wait();
        $this->assertEquals(200, $response->getStatusCode());
        $this->assertEquals(2, $callCount, 'Handler should be called twice (initial + 1 retry)');
    }

    /**
     * Test that 429 responses are not retried when retry is disabled
     */
    public function testRate429WithRetryDisabled()
    {
        $middleware = new RateLimitRetryMiddleware(3, false);
        $middlewareCallable = $middleware();

        $callCount = 0;
        $handler = function ($request, $options) use (&$callCount) {
            $callCount++;
            return \GuzzleHttp\Promise\Create::promiseFor(
                new Response(429, [
                    'x-ratelimit-limit' => '100',
                    'x-ratelimit-remaining' => '0',
                    'x-ratelimit-reset' => '30',
                ])
            );
        };

        $wrappedHandler = $middlewareCallable($handler);
        $request = new Request('GET', 'https://api.example.com/test');
        $promise = $wrappedHandler($request, []);

        $response = $promise->wait();

        $this->assertEquals(429, $response->getStatusCode());
        $this->assertEquals(1, $callCount, 'Handler should be called exactly once when retry is disabled');
    }

    /**
     * Test exponential backoff without rate limit reset header
     * Note: This test uses real sleep() calls for exponential backoff (1s, 2s)
     * Use reset headers in production to avoid delays
     */
    public function testExponentialBackoffWithoutHeader()
    {
        $middleware = new RateLimitRetryMiddleware(2, true);
        $middlewareCallable = $middleware();

        $callCount = 0;
        $handler = function ($request, $options) use (&$callCount) {
            $callCount++;

            // Return 429 for first 2 calls (triggers exponential backoff), then 200
            // First 429: sleep(2^0) = 1 second
            // Second 429: sleep(2^1) = 2 seconds
            // Total test time ~3 seconds
            if ($callCount < 3) {
                return \GuzzleHttp\Promise\Create::promiseFor(new Response(429));
            }

            return \GuzzleHttp\Promise\Create::promiseFor(new Response(200));
        };

        $wrappedHandler = $middlewareCallable($handler);
        $request = new Request('GET', 'https://api.example.com/test');
        $promise = $wrappedHandler($request, []);

        // Wait for promise and verify final response is 200 after retries with backoff
        $response = $promise->wait();
        $this->assertEquals(200, $response->getStatusCode(), 'Should eventually return 200');
        $this->assertEquals(3, $callCount, 'Handler should be called 3 times (initial + 2 retries)');
    }

    /**
     * Test max retries limit is respected
     */
    public function testMaxRetriesLimit()
    {
        $middleware = new RateLimitRetryMiddleware(2, true);
        $middlewareCallable = $middleware();

        $callCount = 0;
        $handler = function ($request, $options) use (&$callCount) {
            $callCount++;
            // Always return 429 to test max retries enforcement
            return \GuzzleHttp\Promise\Create::promiseFor(
                new Response(429, [
                    'x-ratelimit-limit' => '100',
                    'x-ratelimit-remaining' => '0',
                    'x-ratelimit-reset' => '0', // Use exponential backoff
                ])
            );
        };

        $wrappedHandler = $middlewareCallable($handler);
        $request = new Request('GET', 'https://api.example.com/test');
        $promise = $wrappedHandler($request, []);

        $response = $promise->wait();

        // With maxRetries=2: initial call + 2 retries = 3 calls total
        // Response should be 429 (not retried anymore after limit)
        $this->assertEquals(429, $response->getStatusCode(), 'Should return 429 after max retries exceeded');
        $this->assertEquals(3, $callCount, 'Handler should be called exactly 3 times (initial + 2 retries)');
    }
}
