# OpenAPI\Client\BillableMetricsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillableMetric()**](BillableMetricsApi.md#createBillableMetric) | **POST** /billable_metrics | Create a new billable metric |
| [**destroyBillableMetric()**](BillableMetricsApi.md#destroyBillableMetric) | **DELETE** /billable_metrics/{code} | Delete a billable metric |
| [**findAllBillableMetricGroups()**](BillableMetricsApi.md#findAllBillableMetricGroups) | **GET** /billable_metrics/{code}/groups | Find Billable metric groups |
| [**findAllBillableMetrics()**](BillableMetricsApi.md#findAllBillableMetrics) | **GET** /billable_metrics/ | Find Billable metrics |
| [**findBillableMetric()**](BillableMetricsApi.md#findBillableMetric) | **GET** /billable_metrics/{code} | Find billable metric by code |
| [**updateBillableMetric()**](BillableMetricsApi.md#updateBillableMetric) | **PUT** /billable_metrics/{code} | Update an existing billable metric |


## `createBillableMetric()`

```php
createBillableMetric($billable_metric_input): \OpenAPI\Client\Model\BillableMetric
```

Create a new billable metric

Create a new billable metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billable_metric_input = new \OpenAPI\Client\Model\BillableMetricInput(); // \OpenAPI\Client\Model\BillableMetricInput | Billable metric payload

try {
    $result = $apiInstance->createBillableMetric($billable_metric_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->createBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billable_metric_input** | [**\OpenAPI\Client\Model\BillableMetricInput**](../Model/BillableMetricInput.md)| Billable metric payload | |

### Return type

[**\OpenAPI\Client\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyBillableMetric()`

```php
destroyBillableMetric($code): \OpenAPI\Client\Model\BillableMetric
```

Delete a billable metric

Delete a billable metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing billable metric

try {
    $result = $apiInstance->destroyBillableMetric($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->destroyBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric | |

### Return type

[**\OpenAPI\Client\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllBillableMetricGroups()`

```php
findAllBillableMetricGroups($code, $page, $per_page): \OpenAPI\Client\Model\Groups
```

Find Billable metric groups

Find all billable metric groups in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing billable metric
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

try {
    $result = $apiInstance->findAllBillableMetricGroups($code, $page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->findAllBillableMetricGroups: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric | |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\Groups**](../Model/Groups.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllBillableMetrics()`

```php
findAllBillableMetrics($page, $per_page): \OpenAPI\Client\Model\BillableMetrics
```

Find Billable metrics

Find all billable metrics in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

try {
    $result = $apiInstance->findAllBillableMetrics($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->findAllBillableMetrics: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\BillableMetrics**](../Model/BillableMetrics.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findBillableMetric()`

```php
findBillableMetric($code): \OpenAPI\Client\Model\BillableMetric
```

Find billable metric by code

Return a single billable metric

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing billable metric

try {
    $result = $apiInstance->findBillableMetric($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->findBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric | |

### Return type

[**\OpenAPI\Client\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillableMetric()`

```php
updateBillableMetric($code, $billable_metric_input): \OpenAPI\Client\Model\BillableMetric
```

Update an existing billable metric

Update an existing billable metric by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing billable metric
$billable_metric_input = new \OpenAPI\Client\Model\BillableMetricInput(); // \OpenAPI\Client\Model\BillableMetricInput | Update an existing billable metric

try {
    $result = $apiInstance->updateBillableMetric($code, $billable_metric_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->updateBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric | |
| **billable_metric_input** | [**\OpenAPI\Client\Model\BillableMetricInput**](../Model/BillableMetricInput.md)| Update an existing billable metric | |

### Return type

[**\OpenAPI\Client\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
