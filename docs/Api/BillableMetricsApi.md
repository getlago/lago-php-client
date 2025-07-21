# Lago\LagoPhpClient\BillableMetricsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillableMetric()**](BillableMetricsApi.md#createBillableMetric) | **POST** /billable_metrics | Create a billable metric |
| [**destroyBillableMetric()**](BillableMetricsApi.md#destroyBillableMetric) | **DELETE** /billable_metrics/{code} | Delete a billable metric |
| [**evaluateBillableMetricExpression()**](BillableMetricsApi.md#evaluateBillableMetricExpression) | **POST** /billable_metrics/evaluate_expression | Evaluate an expression for a billable metric |
| [**findAllBillableMetrics()**](BillableMetricsApi.md#findAllBillableMetrics) | **GET** /billable_metrics | List all billable metrics |
| [**findBillableMetric()**](BillableMetricsApi.md#findBillableMetric) | **GET** /billable_metrics/{code} | Retrieve a billable metric |
| [**updateBillableMetric()**](BillableMetricsApi.md#updateBillableMetric) | **PUT** /billable_metrics/{code} | Update a billable metric |


## `createBillableMetric()`

```php
createBillableMetric($billable_metric_create_input): \Lago\LagoPhpClient\Model\BillableMetric
```

Create a billable metric

This endpoint creates a new billable metric representing a pricing component of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billable_metric_create_input = new \Lago\LagoPhpClient\Model\BillableMetricCreateInput(); // \Lago\LagoPhpClient\Model\BillableMetricCreateInput | Billable metric payload

try {
    $result = $apiInstance->createBillableMetric($billable_metric_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->createBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billable_metric_create_input** | [**\Lago\LagoPhpClient\Model\BillableMetricCreateInput**](../Model/BillableMetricCreateInput.md)| Billable metric payload | |

### Return type

[**\Lago\LagoPhpClient\Model\BillableMetric**](../Model/BillableMetric.md)

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
destroyBillableMetric($code): \Lago\LagoPhpClient\Model\BillableMetric
```

Delete a billable metric

This endpoint deletes an existing billable metric representing a pricing component of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = storage; // string | Code of the existing billable metric.

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
| **code** | **string**| Code of the existing billable metric. | |

### Return type

[**\Lago\LagoPhpClient\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `evaluateBillableMetricExpression()`

```php
evaluateBillableMetricExpression($billable_metric_evaluate_expression_input): \Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionResult
```

Evaluate an expression for a billable metric

Evaluate an expression for a billable metric creation by providing the expression and test data

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billable_metric_evaluate_expression_input = new \Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionInput(); // \Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionInput | Billable metric expression evaluation payload

try {
    $result = $apiInstance->evaluateBillableMetricExpression($billable_metric_evaluate_expression_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->evaluateBillableMetricExpression: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billable_metric_evaluate_expression_input** | [**\Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionInput**](../Model/BillableMetricEvaluateExpressionInput.md)| Billable metric expression evaluation payload | |

### Return type

[**\Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionResult**](../Model/BillableMetricEvaluateExpressionResult.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllBillableMetrics()`

```php
findAllBillableMetrics($page, $per_page): \Lago\LagoPhpClient\Model\BillableMetricsPaginated
```

List all billable metrics

This endpoint retrieves all existing billable metrics that represent pricing components of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

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
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\BillableMetricsPaginated**](../Model/BillableMetricsPaginated.md)

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
findBillableMetric($code): \Lago\LagoPhpClient\Model\BillableMetric
```

Retrieve a billable metric

This endpoint retrieves an existing billable metric that represents a pricing component of your application. The billable metric is identified by its unique code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = storage; // string | Code of the existing billable metric.

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
| **code** | **string**| Code of the existing billable metric. | |

### Return type

[**\Lago\LagoPhpClient\Model\BillableMetric**](../Model/BillableMetric.md)

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
updateBillableMetric($code, $billable_metric_update_input): \Lago\LagoPhpClient\Model\BillableMetric
```

Update a billable metric

This endpoint updates an existing billable metric representing a pricing component of your application.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillableMetricsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = storage; // string | Code of the existing billable metric.
$billable_metric_update_input = new \Lago\LagoPhpClient\Model\BillableMetricUpdateInput(); // \Lago\LagoPhpClient\Model\BillableMetricUpdateInput | Billable metric payload

try {
    $result = $apiInstance->updateBillableMetric($code, $billable_metric_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillableMetricsApi->updateBillableMetric: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing billable metric. | |
| **billable_metric_update_input** | [**\Lago\LagoPhpClient\Model\BillableMetricUpdateInput**](../Model/BillableMetricUpdateInput.md)| Billable metric payload | |

### Return type

[**\Lago\LagoPhpClient\Model\BillableMetric**](../Model/BillableMetric.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
