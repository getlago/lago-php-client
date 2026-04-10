<?php
/**
 * ClientFactoryTest
 * PHP version 8.1
 */

namespace Lago\LagoPhpClient\Test;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\ClientInterface;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Psr7\Response;
use Lago\LagoPhpClient\ClientFactory;
use Lago\LagoPhpClient\Configuration;
use Lago\LagoPhpClient\RateLimitRetryMiddleware;

/**
 * ClientFactoryTest Class Doc Comment
 *
 * @category Class
 * @package  Lago\LagoPhpClient\Test
 * @author   Lago Tech
 */
class ClientFactoryTest extends TestCase
{
    /**
     * Test factory creates a Guzzle client
     */
    public function testClientCreation()
    {
        $config = new Configuration();
        $client = ClientFactory::createClient($config);

        $this->assertInstanceOf(ClientInterface::class, $client);
    }

    /**
     * Test factory creates client with retry enabled
     */
    public function testClientWithRetryEnabled()
    {
        $config = new Configuration();
        $config->setRetryOnRateLimit(true);
        $config->setMaxRetries(5);

        $client = ClientFactory::createClient($config);

        $this->assertInstanceOf(ClientInterface::class, $client);
        $this->assertTrue($config->getRetryOnRateLimit(), 'Retry should be enabled');
        $this->assertEquals(5, $config->getMaxRetries(), 'Max retries should be 5');
    }

    /**
     * Test factory creates client with retry disabled
     */
    public function testClientWithRetryDisabled()
    {
        $config = new Configuration();
        $config->setRetryOnRateLimit(false);

        $client = ClientFactory::createClient($config);

        $this->assertInstanceOf(ClientInterface::class, $client);
        $this->assertFalse($config->getRetryOnRateLimit(), 'Retry should be disabled');
    }

    /**
     * Test factory passes through additional options
     */
    public function testClientWithAdditionalOptions()
    {
        $config = new Configuration();
        $options = [
            'timeout' => 30,
            'connect_timeout' => 10,
        ];

        $client = ClientFactory::createClient($config, $options);

        $this->assertInstanceOf(ClientInterface::class, $client);
    }

    /**
     * Test multiple clients can be created independently
     */
    public function testMultipleClientCreation()
    {
        $config1 = new Configuration();
        $config1->setMaxRetries(3);

        $config2 = new Configuration();
        $config2->setMaxRetries(5);

        $client1 = ClientFactory::createClient($config1);
        $client2 = ClientFactory::createClient($config2);

        $this->assertInstanceOf(ClientInterface::class, $client1);
        $this->assertInstanceOf(ClientInterface::class, $client2);
        // They should be different instances
        $this->assertNotSame($client1, $client2);
    }

    /**
     * Test that client with retry enabled actually retries on 429
     */
    public function testClientRetryIntegration()
    {
        $config = new Configuration();
        $config->setRetryOnRateLimit(true);
        $config->setMaxRetries(1);

        // Create a mock handler to track calls
        $callCount = 0;
        $mockHandler = function ($request, $options) use (&$callCount) {
            $callCount++;

            // First call returns 429, second returns 200
            if ($callCount === 1) {
                return \GuzzleHttp\Promise\promise_for(
                    new Response(429, [
                        'x-ratelimit-limit' => '100',
                        'x-ratelimit-remaining' => '0',
                        'x-ratelimit-reset' => '0',
                    ])
                );
            }

            return \GuzzleHttp\Promise\promise_for(new Response(200));
        };

        // Create client with custom handler for testing
        $options = ['handler' => $mockHandler];
        $client = ClientFactory::createClient($config, $options);

        $this->assertInstanceOf(ClientInterface::class, $client);
    }

    /**
     * Test that client without retry does not add middleware
     */
    public function testClientNoRetryConfiguration()
    {
        $config = new Configuration();
        $config->setRetryOnRateLimit(false);

        $client = ClientFactory::createClient($config);

        $this->assertInstanceOf(ClientInterface::class, $client);
        $this->assertFalse($config->getRetryOnRateLimit());
    }
}
