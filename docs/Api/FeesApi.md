# OpenAPI\Client\FeesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAllFees()**](FeesApi.md#findAllFees) | **GET** /fees | Find all fees |
| [**findFee()**](FeesApi.md#findFee) | **GET** /fees/{id} | Find fee by ID |
| [**updateFee()**](FeesApi.md#updateFee) | **PUT** /fees/{id} | Update an existing fee |


## `findAllFees()`

```php
findAllFees($page, $per_page, $external_customer_id, $external_subscription_id, $currency, $fee_type, $billable_metric_code, $payment_status, $created_at_from, $created_at_to, $succeeded_at_from, $succeeded_at_to, $failed_at_from, $failed_at_to, $refunded_at_from, $refunded_at_to): \OpenAPI\Client\Model\FeesPaginated
```

Find all fees

Find all fees of an organization and filter them

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page
$external_customer_id = 12345; // string | External customer ID
$external_subscription_id = 12345; // string | External subscription ID
$currency = EUR; // string | Amount currency
$fee_type = charge; // string | Fee type
$billable_metric_code = bm_code; // string | Code of the source billable metric
$payment_status = succeeded; // string | Payment status
$created_at_from = 2023-03-28T12:21:51Z; // \DateTime | Creation datetime from
$created_at_to = 2023-03-28T12:21:51Z; // \DateTime | Creation date to
$succeeded_at_from = 2023-03-28T12:21:51Z; // \DateTime | Payment succees date from
$succeeded_at_to = 2023-03-28T12:21:51Z; // \DateTime | Payment succees date to
$failed_at_from = 2023-03-28T12:21:51Z; // \DateTime | Payment failed date from
$failed_at_to = 2023-03-28T12:21:51Z; // \DateTime | Payment failed date to
$refunded_at_from = 2023-03-28T12:21:51Z; // \DateTime | Payment refund date from
$refunded_at_to = 2023-03-28T12:21:51Z; // \DateTime | Payment refund date to

try {
    $result = $apiInstance->findAllFees($page, $per_page, $external_customer_id, $external_subscription_id, $currency, $fee_type, $billable_metric_code, $payment_status, $created_at_from, $created_at_to, $succeeded_at_from, $succeeded_at_to, $failed_at_from, $failed_at_to, $refunded_at_from, $refunded_at_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->findAllFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |
| **external_customer_id** | **string**| External customer ID | [optional] |
| **external_subscription_id** | **string**| External subscription ID | [optional] |
| **currency** | **string**| Amount currency | [optional] |
| **fee_type** | **string**| Fee type | [optional] |
| **billable_metric_code** | **string**| Code of the source billable metric | [optional] |
| **payment_status** | **string**| Payment status | [optional] |
| **created_at_from** | **\DateTime**| Creation datetime from | [optional] |
| **created_at_to** | **\DateTime**| Creation date to | [optional] |
| **succeeded_at_from** | **\DateTime**| Payment succees date from | [optional] |
| **succeeded_at_to** | **\DateTime**| Payment succees date to | [optional] |
| **failed_at_from** | **\DateTime**| Payment failed date from | [optional] |
| **failed_at_to** | **\DateTime**| Payment failed date to | [optional] |
| **refunded_at_from** | **\DateTime**| Payment refund date from | [optional] |
| **refunded_at_to** | **\DateTime**| Payment refund date to | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeesPaginated**](../Model/FeesPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findFee()`

```php
findFee($id): \OpenAPI\Client\Model\FeeObject
```

Find fee by ID

Return a single fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Fee

try {
    $result = $apiInstance->findFee($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->findFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Fee | |

### Return type

[**\OpenAPI\Client\Model\FeeObject**](../Model/FeeObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateFee()`

```php
updateFee($id, $fee_update_input): \OpenAPI\Client\Model\FeeObject
```

Update an existing fee

Update an existing fee

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Fee
$fee_update_input = new \OpenAPI\Client\Model\FeeUpdateInput(); // \OpenAPI\Client\Model\FeeUpdateInput | Payload to update a fee

try {
    $result = $apiInstance->updateFee($id, $fee_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->updateFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Fee | |
| **fee_update_input** | [**\OpenAPI\Client\Model\FeeUpdateInput**](../Model/FeeUpdateInput.md)| Payload to update a fee | [optional] |

### Return type

[**\OpenAPI\Client\Model\FeeObject**](../Model/FeeObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
