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
findAllPayments($page, $per_page, $external_customer_id, $invoice_id): \Lago\LagoPhpClient\Model\PaymentsPaginated
```

List all payments

This endpoint is used to list all payments

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
$invoice_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->findAllPayments($page, $per_page, $external_customer_id, $invoice_id);
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
| **invoice_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | [optional] |

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
