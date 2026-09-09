<?php

namespace Lago\LagoPhpClient\Test\Api;

use GuzzleHttp\Client;
use GuzzleHttp\Handler\MockHandler;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Psr7\Response;
use Lago\LagoPhpClient\Api\CustomersApi;
use Lago\LagoPhpClient\Api\PaymentsApi;
use Lago\LagoPhpClient\Configuration;
use PHPUnit\Framework\TestCase;

class PaymentFiltersTest extends TestCase
{
    public function testBothListsSerializeAllFiltersAndKeepInt64Precision(): void
    {
        foreach ([false, true] as $customerScoped) {
            $history = [];
            $handler = HandlerStack::create(new MockHandler([new Response(200, [], json_encode([
                'payments' => [],
                'meta' => ['current_page' => 2, 'total_pages' => 0, 'total_count' => 0],
            ]))]));
            $handler->push(Middleware::history($history));
            $http = new Client(['handler' => $handler]);
            $config = (new Configuration())->setAccessToken('test-key');
            $api = $customerScoped ? new CustomersApi($http, $config) : new PaymentsApi($http, $config);
            $args = [
                'page' => 2,
                'per_page' => 5,
                'external_customer_id' => 'cust_1',
                'invoice_id' => '1a901a90-1a90-1a90-1a90-1a901a901a90',
                'payment_status' => ['succeeded', 'failed'],
                'payment_statuses' => ['pending', 'processing'],
                'amount_from' => 0,
                'amount_to' => PHP_INT_MAX,
                'receipt_number' => 'Rcpt & +/#1',
                'created_at_from' => new \DateTimeImmutable('2026-09-01'),
                'created_at_to' => new \DateTime('2026-09-07'),
                'payment_provider_type' => ['stripe', 'gocardless'],
                'currency' => 'EUR',
                'invoice_number' => 'LAG & +/#2',
                'payment_type' => ['manual', 'provider'],
                'payable_type' => ['Invoice', 'PaymentRequest'],
                'search_term' => 'pi_3 & +/#',
            ];
            $method = $customerScoped ? 'findAllCustomerPayments' : 'findAllPayments';
            $response = $api->$method(...$args);
            self::assertSame(0, $response->getMeta()->getTotalCount());
            self::assertCount(1, $history);
            $request = $history[0]['request'];
            self::assertSame('Bearer test-key', $request->getHeaderLine('Authorization'));
            self::assertSame($customerScoped ? '/api/v1/customers/cust_1/payments' : '/api/v1/payments', $request->getUri()->getPath());
            $pairs = [];
            foreach (explode('&', $request->getUri()->getQuery()) as $pair) {
                [$key, $value] = array_map('urldecode', explode('=', $pair, 2));
                $pairs[$key][] = $value;
            }
            foreach ($args as $key => $value) {
                if ($key === 'external_customer_id' && $customerScoped) {
                    self::assertArrayNotHasKey($key, $pairs);
                    continue;
                }
                if ($value instanceof \DateTimeInterface) {
                    $value = $value->format('Y-m-d');
                }
                $wireKey = is_array($value) ? $key . '[]' : $key;
                self::assertSame(array_map('strval', (array) $value), $pairs[$wireKey], $wireKey);
            }
            self::assertSame(['9223372036854775807'], $pairs['amount_to']);
            self::assertCount($customerScoped ? 16 : 17, $pairs);
        }
    }

    public function testExistingPositionalContentTypeAndEmptyFiltersStayCompatible(): void
    {
        $api = new PaymentsApi();
        $request = $api->findAllPaymentsRequest(1, 10, 'cust_1', null, 'application/json');
        self::assertSame('page=1&per_page=10&external_customer_id=cust_1', $request->getUri()->getQuery());
        self::assertSame('', $api->findAllPaymentsRequest(payment_status: [])->getUri()->getQuery());
        self::assertSame('created_at_from=2026-09-01', $api->findAllPaymentsRequest(created_at_from: '2026-09-01')->getUri()->getQuery());
        $customer = new CustomersApi();
        self::assertSame('', $customer->findAllCustomerPaymentsRequest('cust_1')->getUri()->getQuery());
    }

    public function testNegativeAmountsUseGeneratedValidation(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        (new PaymentsApi())->findAllPaymentsRequest(amount_from: -1);
    }
}
