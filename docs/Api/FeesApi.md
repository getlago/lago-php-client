# Lago\LagoPhpClient\FeesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteFee()**](FeesApi.md#deleteFee) | **DELETE** /fees/{lago_id} | Delete a fee |
| [**findAllFees()**](FeesApi.md#findAllFees) | **GET** /fees | List all fees |
| [**findFee()**](FeesApi.md#findFee) | **GET** /fees/{lago_id} | Retrieve a specific fee |
| [**updateFee()**](FeesApi.md#updateFee) | **PUT** /fees/{lago_id} | Update a fee |


## `deleteFee()`

```php
deleteFee($lago_id): \Lago\LagoPhpClient\Model\Fee
```

Delete a fee

This endpoint is used for deleting a specific fee that has not yet been invoiced

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee's record within the Lago system.

try {
    $result = $apiInstance->deleteFee($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->deleteFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Fee**](../Model/Fee.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllFees()`

```php
findAllFees($page, $per_page, $external_customer_id, $external_subscription_id, $event_transaction_id, $currency, $fee_type, $billable_metric_code, $payment_status, $created_at_from, $created_at_to, $succeeded_at_from, $succeeded_at_to, $failed_at_from, $failed_at_to, $refunded_at_from, $refunded_at_to): \Lago\LagoPhpClient\Model\FeesPaginated
```

List all fees

This endpoint is used for retrieving all fees that has been issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.
$external_subscription_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External subscription ID
$event_transaction_id = et_12345678; // string | Filter results by event transaction ID
$currency = USD; // \LagoLagoPhpClientModelCurrency | Filter results by fee's currency.
$fee_type = charge; // string | The fee type. Possible values are `add-on`, `charge`, `credit` or `subscription`.
$billable_metric_code = bm_code; // string | Filter results by the `code` of the billable metric attached to the fee. Only applies to `charge` types.
$payment_status = succeeded; // string | Indicates the payment status of the fee. It represents the current status of the payment associated with the fee. The possible values for this field are `pending`, `succeeded`, `failed` and refunded`.
$created_at_from = 2023-03-28T12:21:51Z; // \DateTime | Filter results created after creation date and time in UTC.
$created_at_to = 2023-03-28T12:21:51Z; // \DateTime | Filter results created before creation date and time in UTC.
$succeeded_at_from = 2023-03-28T12:21:51Z; // \DateTime | Filter results with payment success after creation date and time in UTC.
$succeeded_at_to = 2023-03-28T12:21:51Z; // \DateTime | Filter results with payment success after creation date and time in UTC.
$failed_at_from = 2023-03-28T12:21:51Z; // \DateTime | Filter results with payment failure after creation date and time in UTC.
$failed_at_to = 2023-03-28T12:21:51Z; // \DateTime | Filter results with payment failure after creation date and time in UTC.
$refunded_at_from = 2023-03-28T12:21:51Z; // \DateTime | Filter results with payment refund after creation date and time in UTC.
$refunded_at_to = 2023-03-28T12:21:51Z; // \DateTime | Filter results with payment refund after creation date and time in UTC.

try {
    $result = $apiInstance->findAllFees($page, $per_page, $external_customer_id, $external_subscription_id, $event_transaction_id, $currency, $fee_type, $billable_metric_code, $payment_status, $created_at_from, $created_at_to, $succeeded_at_from, $succeeded_at_to, $failed_at_from, $failed_at_to, $refunded_at_from, $refunded_at_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->findAllFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |
| **external_subscription_id** | **string**| External subscription ID | [optional] |
| **event_transaction_id** | **string**| Filter results by event transaction ID | [optional] |
| **currency** | [**\LagoLagoPhpClientModelCurrency**](../Model/.md)| Filter results by fee&#39;s currency. | [optional] |
| **fee_type** | **string**| The fee type. Possible values are &#x60;add-on&#x60;, &#x60;charge&#x60;, &#x60;credit&#x60; or &#x60;subscription&#x60;. | [optional] |
| **billable_metric_code** | **string**| Filter results by the &#x60;code&#x60; of the billable metric attached to the fee. Only applies to &#x60;charge&#x60; types. | [optional] |
| **payment_status** | **string**| Indicates the payment status of the fee. It represents the current status of the payment associated with the fee. The possible values for this field are &#x60;pending&#x60;, &#x60;succeeded&#x60;, &#x60;failed&#x60; and refunded&#x60;. | [optional] |
| **created_at_from** | **\DateTime**| Filter results created after creation date and time in UTC. | [optional] |
| **created_at_to** | **\DateTime**| Filter results created before creation date and time in UTC. | [optional] |
| **succeeded_at_from** | **\DateTime**| Filter results with payment success after creation date and time in UTC. | [optional] |
| **succeeded_at_to** | **\DateTime**| Filter results with payment success after creation date and time in UTC. | [optional] |
| **failed_at_from** | **\DateTime**| Filter results with payment failure after creation date and time in UTC. | [optional] |
| **failed_at_to** | **\DateTime**| Filter results with payment failure after creation date and time in UTC. | [optional] |
| **refunded_at_from** | **\DateTime**| Filter results with payment refund after creation date and time in UTC. | [optional] |
| **refunded_at_to** | **\DateTime**| Filter results with payment refund after creation date and time in UTC. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\FeesPaginated**](../Model/FeesPaginated.md)

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
findFee($lago_id): \Lago\LagoPhpClient\Model\Fee
```

Retrieve a specific fee

This endpoint is used for retrieving a specific fee that has been issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee's record within the Lago system.

try {
    $result = $apiInstance->findFee($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->findFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Fee**](../Model/Fee.md)

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
updateFee($lago_id, $fee_update_input): \Lago\LagoPhpClient\Model\Fee
```

Update a fee

This endpoint is used for updating a specific fee that has been issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\FeesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee's record within the Lago system.
$fee_update_input = new \Lago\LagoPhpClient\Model\FeeUpdateInput(); // \Lago\LagoPhpClient\Model\FeeUpdateInput | Fee payload

try {
    $result = $apiInstance->updateFee($lago_id, $fee_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FeesApi->updateFee: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee&#39;s record within the Lago system. | |
| **fee_update_input** | [**\Lago\LagoPhpClient\Model\FeeUpdateInput**](../Model/FeeUpdateInput.md)| Fee payload | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\Fee**](../Model/Fee.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
