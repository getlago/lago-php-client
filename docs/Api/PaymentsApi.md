# Lago\LagoPhpClient\PaymentsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPayment()**](PaymentsApi.md#createPayment) | **POST** /payments | Create a payment |
| [**findAllPayments()**](PaymentsApi.md#findAllPayments) | **GET** /payments | List all payments |
| [**findPayment()**](PaymentsApi.md#findPayment) | **GET** /payments/{lago_id} | Retrieve a payment |


## `createPayment()`

```php
createPayment($payment_create_input): \Lago\LagoPhpClient\Model\Payment
```

Create a payment

This endpoint is used to create a manual payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_create_input = new \Lago\LagoPhpClient\Model\PaymentCreateInput(); // \Lago\LagoPhpClient\Model\PaymentCreateInput | Payment payload

try {
    $result = $apiInstance->createPayment($payment_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->createPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_create_input** | [**\Lago\LagoPhpClient\Model\PaymentCreateInput**](../Model/PaymentCreateInput.md)| Payment payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Payment**](../Model/Payment.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllPayments()`

```php
findAllPayments($page, $per_page, $external_customer_id, $invoice_id, 'application/json', $payment_status, $payment_statuses, $amount_from, $amount_to, $receipt_number, $created_at_from, $created_at_to, $payment_provider_type, $currency, $invoice_number, $payment_type, $payable_type, $search_term): \Lago\LagoPhpClient\Model\PaymentsPaginated
```

List all payments

List payments with filters combined using AND and values within each array combined using OR. Results keep their existing visibility rules and are ordered by creation date descending, then ID. Amounts are integer cents and support the full signed 64-bit range from 0 through 9223372036854775807. Unknown enum or currency values, negative or out-of-range amounts, inverted amount bounds, invalid invoice UUIDs and receipt or invoice numbers longer than 255 characters return 422 validation_errors. Invalid date bounds are ignored. Search narrows the scope before exact filters apply; invoice search is skipped when invoice_id or invoice_number is supplied, and customer search is skipped when external_customer_id is supplied. Repeat the same filters when requesting the page number returned in meta.next_page.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.
$invoice_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Filter by the Lago invoice UUID, matching the directly payable invoice or any invoice covered by a payment request.
$payment_status = [succeeded, failed]; // string[] | Filter by any of `pending`, `processing`, `succeeded` or `failed`; a single value can also be sent as `payment_status=succeeded`, and this parameter takes precedence over `payment_statuses`.
$payment_statuses = [succeeded]; // string[] | Alias for `payment_status[]`, matching any of `pending`, `processing`, `succeeded` or `failed`; a single value can also be sent as `payment_statuses=succeeded`, and it is ignored when `payment_status` is supplied.
$amount_from = 1000; // int | Inclusive minimum payment amount in integer cents, from 0 through 9223372036854775807; it must not exceed `amount_to` when both bounds are supplied.
$amount_to = 5000; // int | Inclusive maximum payment amount in integer cents, from 0 through 9223372036854775807; set it equal to `amount_from` to match an exact amount.
$receipt_number = rcpt-2026-0001; // string | Filter by an exact, case-insensitive payment receipt number of at most 255 characters; payments without a receipt do not match.
$created_at_from = 2026-09-01; // \DateTime | Filter payments created on or after this ISO-8601 date, inclusive from the start of the day in the organization timezone; invalid dates are ignored.
$created_at_to = 2026-09-07; // \DateTime | Filter payments created on or before this ISO-8601 date, inclusive through the end of the day in the organization timezone; invalid dates are ignored.
$payment_provider_type = [stripe]; // string[] | Filter by any of `stripe`, `gocardless`, `cashfree`, `adyen`, `flutterwave` or `moneyhash`; a single value can also be sent as `payment_provider_type=stripe`.
$currency = EUR; // string | Filter the results by currency, expressed as an ISO 4217 code.
$invoice_number = LAG-1234-001-002; // string | Filter by an exact, case-insensitive invoice number of at most 255 characters, matching either the directly payable invoice or any invoice covered by a payment request.
$payment_type = [manual]; // string[] | Filter by either `manual` or `provider`, matching any supplied type; a single value can also be sent as `payment_type=manual`.
$payable_type = [PaymentRequest]; // string[] | Filter by either `Invoice` or `PaymentRequest`, matching any supplied payable type; a single value can also be sent as `payable_type=PaymentRequest`.
$search_term = pi_3; // string | Search case-insensitively within provider payment IDs, references, payment UUIDs, directly payable invoice numbers and customer name, first name, last name, external ID or email; receipt numbers use their own exact filter.

try {
    $result = $apiInstance->findAllPayments($page, $per_page, $external_customer_id, $invoice_id, 'application/json', $payment_status, $payment_statuses, $amount_from, $amount_to, $receipt_number, $created_at_from, $created_at_to, $payment_provider_type, $currency, $invoice_number, $payment_type, $payable_type, $search_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->findAllPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |
| **invoice_id** | **string**| Filter by the Lago invoice UUID, matching the directly payable invoice or any invoice covered by a payment request. | [optional] |
| **payment_status** | [**string[]**](../Model/string.md)| Filter by any of &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;succeeded&#x60; or &#x60;failed&#x60;; a single value can also be sent as &#x60;payment_status&#x3D;succeeded&#x60;, and this parameter takes precedence over &#x60;payment_statuses&#x60;. | [optional] |
| **payment_statuses** | [**string[]**](../Model/string.md)| Alias for &#x60;payment_status[]&#x60;, matching any of &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;succeeded&#x60; or &#x60;failed&#x60;; a single value can also be sent as &#x60;payment_statuses&#x3D;succeeded&#x60;, and it is ignored when &#x60;payment_status&#x60; is supplied. | [optional] |
| **amount_from** | **int**| Inclusive minimum payment amount in integer cents, from 0 through 9223372036854775807; it must not exceed &#x60;amount_to&#x60; when both bounds are supplied. | [optional] |
| **amount_to** | **int**| Inclusive maximum payment amount in integer cents, from 0 through 9223372036854775807; set it equal to &#x60;amount_from&#x60; to match an exact amount. | [optional] |
| **receipt_number** | **string**| Filter by an exact, case-insensitive payment receipt number of at most 255 characters; payments without a receipt do not match. | [optional] |
| **created_at_from** | **\DateTime**| Filter payments created on or after this ISO-8601 date, inclusive from the start of the day in the organization timezone; invalid dates are ignored. | [optional] |
| **created_at_to** | **\DateTime**| Filter payments created on or before this ISO-8601 date, inclusive through the end of the day in the organization timezone; invalid dates are ignored. | [optional] |
| **payment_provider_type** | [**string[]**](../Model/string.md)| Filter by any of &#x60;stripe&#x60;, &#x60;gocardless&#x60;, &#x60;cashfree&#x60;, &#x60;adyen&#x60;, &#x60;flutterwave&#x60; or &#x60;moneyhash&#x60;; a single value can also be sent as &#x60;payment_provider_type&#x3D;stripe&#x60;. | [optional] |
| **currency** | **string**| Filter the results by currency, expressed as an ISO 4217 code. | [optional] |
| **invoice_number** | **string**| Filter by an exact, case-insensitive invoice number of at most 255 characters, matching either the directly payable invoice or any invoice covered by a payment request. | [optional] |
| **payment_type** | [**string[]**](../Model/string.md)| Filter by either &#x60;manual&#x60; or &#x60;provider&#x60;, matching any supplied type; a single value can also be sent as &#x60;payment_type&#x3D;manual&#x60;. | [optional] |
| **payable_type** | [**string[]**](../Model/string.md)| Filter by either &#x60;Invoice&#x60; or &#x60;PaymentRequest&#x60;, matching any supplied payable type; a single value can also be sent as &#x60;payable_type&#x3D;PaymentRequest&#x60;. | [optional] |
| **search_term** | **string**| Search case-insensitively within provider payment IDs, references, payment UUIDs, directly payable invoice numbers and customer name, first name, last name, external ID or email; receipt numbers use their own exact filter. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentsPaginated**](../Model/PaymentsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPayment()`

```php
findPayment($lago_id): \Lago\LagoPhpClient\Model\PaymentManualObject
```

Retrieve a payment

This endpoint retrieves a specific payment by its ID.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = f4a842d6-4bde-11ec-81d3-0242ac130003; // string | Unique identifier of the payment.

try {
    $result = $apiInstance->findPayment($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentsApi->findPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier of the payment. | |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentManualObject**](../Model/PaymentManualObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
