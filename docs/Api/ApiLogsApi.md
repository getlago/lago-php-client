# Lago\LagoPhpClient\ApiLogsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAllApiLogs()**](ApiLogsApi.md#findAllApiLogs) | **GET** /api_logs | List all api logs |
| [**findApiLog()**](ApiLogsApi.md#findApiLog) | **GET** /api_logs/{request_id} | Retrieve an api log |


## `findAllApiLogs()`

```php
findAllApiLogs($page, $per_page, $from_date, $to_date, $http_methods, $http_statuses, $api_version, $request_paths): \Lago\LagoPhpClient\Model\ApiLogsPaginated
```

List all api logs

This endpoint retrieves all existing api logs that represent requests performed to Lago's API.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\ApiLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$from_date = 2022-08-09; // \DateTime | Filter api logs from a specific date.
$to_date = 2022-08-09; // \DateTime | Filter api logs up to a specific date.
$http_methods = ["post","put"]; // string[] | Filter results by HTTP methods
$http_statuses = ["failed","succeeded",404]; // \Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[] | Filter results by HTTP status or by generic request status
$api_version = v1; // string | Filter results by API version
$request_paths = /billable_metrics/; // string | Filter results by the path of the request

try {
    $result = $apiInstance->findAllApiLogs($page, $per_page, $from_date, $to_date, $http_methods, $http_statuses, $api_version, $request_paths);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiLogsApi->findAllApiLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **from_date** | **\DateTime**| Filter api logs from a specific date. | [optional] |
| **to_date** | **\DateTime**| Filter api logs up to a specific date. | [optional] |
| **http_methods** | [**string[]**](../Model/string.md)| Filter results by HTTP methods | [optional] |
| **http_statuses** | [**\Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner[]**](../Model/\Lago\LagoPhpClient\Model\FindAllApiLogsHttpStatusesParameterInner.md)| Filter results by HTTP status or by generic request status | [optional] |
| **api_version** | **string**| Filter results by API version | [optional] |
| **request_paths** | **string**| Filter results by the path of the request | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\ApiLogsPaginated**](../Model/ApiLogsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findApiLog()`

```php
findApiLog($request_id): \Lago\LagoPhpClient\Model\ApiLog
```

Retrieve an api log

This endpoint retrieves an existing api log that represents a request made to the API. The api log is identified by its unique request_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\ApiLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request_id = bdc0eda6-ea52-4f72-a46a-94f47a89b546; // string | The Request Id of the existing api log.

try {
    $result = $apiInstance->findApiLog($request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiLogsApi->findApiLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **request_id** | **string**| The Request Id of the existing api log. | |

### Return type

[**\Lago\LagoPhpClient\Model\ApiLog**](../Model/ApiLog.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
