<?php
/**
 * LagoRateLimitExceptionTest
 * PHP version 8.1
 */

namespace Lago\LagoPhpClient\Test;

use PHPUnit\Framework\TestCase;
use Lago\LagoPhpClient\LagoRateLimitException;

/**
 * LagoRateLimitExceptionTest Class Doc Comment
 *
 * @category Class
 * @package  Lago\LagoPhpClient\Test
 * @author   Lago Tech
 */
class LagoRateLimitExceptionTest extends TestCase
{
    /**
     * Test creating a LagoRateLimitException with rate limit headers
     */
    public function testRateLimitExceptionCreation()
    {
        $headers = [
            'x-ratelimit-limit' => ['100'],
            'x-ratelimit-remaining' => ['5'],
            'x-ratelimit-reset' => ['30'],
        ];

        $exception = new LagoRateLimitException(
            'Rate limit exceeded',
            429,
            $headers,
            '{"error": "rate_limited"}',
            100,
            5,
            30
        );

        $this->assertEquals(429, $exception->getCode());
        $this->assertEquals('Rate limit exceeded', $exception->getMessage());
        $this->assertEquals(100, $exception->getRateLimitLimit());
        $this->assertEquals(5, $exception->getRateLimitRemaining());
        $this->assertEquals(30, $exception->getRateLimitReset());
    }

    /**
     * Test rate limit exception with null values
     */
    public function testRateLimitExceptionWithNullValues()
    {
        $exception = new LagoRateLimitException(
            'Rate limit exceeded',
            429,
            [],
            null,
            null,
            null,
            null
        );

        $this->assertNull($exception->getRateLimitLimit());
        $this->assertNull($exception->getRateLimitRemaining());
        $this->assertNull($exception->getRateLimitReset());
    }

    /**
     * Test that LagoRateLimitException extends ApiException
     */
    public function testExceptionInheritance()
    {
        $exception = new LagoRateLimitException('Rate limit exceeded', 429);

        $this->assertInstanceOf(\Lago\LagoPhpClient\ApiException::class, $exception);
    }

    /**
     * Test exception response headers access
     */
    public function testResponseHeadersAccess()
    {
        $headers = [
            'x-ratelimit-limit' => ['100'],
            'content-type' => ['application/json'],
        ];

        $exception = new LagoRateLimitException(
            'Rate limit exceeded',
            429,
            $headers,
            null,
            100,
            0,
            60
        );

        $this->assertNotNull($exception->getResponseHeaders());
    }

    /**
     * Test default status code is 429
     */
    public function testDefaultStatusCode()
    {
        $exception = new LagoRateLimitException();

        $this->assertEquals(429, $exception->getCode());
    }
}
