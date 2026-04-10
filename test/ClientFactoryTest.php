<?php
/**
 * ClientFactoryTest
 * PHP version 8.1
 */

namespace Lago\LagoPhpClient\Test;

use PHPUnit\Framework\TestCase;
use GuzzleHttp\ClientInterface;
use Lago\LagoPhpClient\ClientFactory;
use Lago\LagoPhpClient\Configuration;

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
}
