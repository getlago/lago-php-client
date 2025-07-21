# Lago\LagoPhpClient\PaymentRequestsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPaymentRequest()**](PaymentRequestsApi.md#createPaymentRequest) | **POST** /payment_requests | Create a payment request |
| [**findAllPaymentRequests()**](PaymentRequestsApi.md#findAllPaymentRequests) | **GET** /payment_requests | List all payment requests |


## `createPaymentRequest()`

```php
createPaymentRequest($payment_request_create_input): \Lago\LagoPhpClient\Model\PaymentRequest
```

Create a payment request

This endpoint is used to create a payment request to collect payments of overdue invoices of a given customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$payment_request_create_input = new \Lago\LagoPhpClient\Model\PaymentRequestCreateInput(); // \Lago\LagoPhpClient\Model\PaymentRequestCreateInput | PaymentRequest payload

try {
    $result = $apiInstance->createPaymentRequest($payment_request_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->createPaymentRequest: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **payment_request_create_input** | [**\Lago\LagoPhpClient\Model\PaymentRequestCreateInput**](../Model/PaymentRequestCreateInput.md)| PaymentRequest payload | |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentRequest**](../Model/PaymentRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllPaymentRequests()`

```php
findAllPaymentRequests($page, $per_page, $external_customer_id, $payment_status): \Lago\LagoPhpClient\Model\PaymentRequestsPaginated
```

List all payment requests

This endpoint is used to list all existing payment requests.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentRequestsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.
$payment_status = pending; // string | Filter by payment status. Possible values are `pending`, `failed` or `succeeded`.

try {
    $result = $apiInstance->findAllPaymentRequests($page, $per_page, $external_customer_id, $payment_status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentRequestsApi->findAllPaymentRequests: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |
| **payment_status** | **string**| Filter by payment status. Possible values are &#x60;pending&#x60;, &#x60;failed&#x60; or &#x60;succeeded&#x60;. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentRequestsPaginated**](../Model/PaymentRequestsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
