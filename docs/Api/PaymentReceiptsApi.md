# Lago\LagoPhpClient\PaymentReceiptsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAllPaymentReceipts()**](PaymentReceiptsApi.md#findAllPaymentReceipts) | **GET** /payment_receipts | List all payment receipts |
| [**findPaymentReceipt()**](PaymentReceiptsApi.md#findPaymentReceipt) | **GET** /payment_receipts/{lago_id} | Retrieve a payment receipt |


## `findAllPaymentReceipts()`

```php
findAllPaymentReceipts($page, $per_page, $invoice_id): \Lago\LagoPhpClient\Model\PaymentReceiptsPaginated
```

List all payment receipts

This endpoint is used to list all existing payment receipts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$invoice_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Filter payment receipts by invoice id.

try {
    $result = $apiInstance->findAllPaymentReceipts($page, $per_page, $invoice_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentReceiptsApi->findAllPaymentReceipts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **invoice_id** | **string**| Filter payment receipts by invoice id. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentReceiptsPaginated**](../Model/PaymentReceiptsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPaymentReceipt()`

```php
findPaymentReceipt($lago_id): \Lago\LagoPhpClient\Model\PaymentReceipt
```

Retrieve a payment receipt

This endpoint retrieves a specific payment receipt.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\PaymentReceiptsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Payment receipt ID

try {
    $result = $apiInstance->findPaymentReceipt($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PaymentReceiptsApi->findPaymentReceipt: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Payment receipt ID | |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentReceipt**](../Model/PaymentReceipt.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
