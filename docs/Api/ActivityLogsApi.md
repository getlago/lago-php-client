# Lago\LagoPhpClient\ActivityLogsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findActivityLog()**](ActivityLogsApi.md#findActivityLog) | **GET** /activity_logs/{activity_id} | Retrieve an activity log |
| [**findAllActivityLogs()**](ActivityLogsApi.md#findAllActivityLogs) | **GET** /activity_logs | List all activity logs |


## `findActivityLog()`

```php
findActivityLog($activity_id): \Lago\LagoPhpClient\Model\ActivityLog
```

Retrieve an activity log

This endpoint retrieves an existing activity log that represents an action performed on some resource. The activity log is identified by its unique activity_id.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\ActivityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = bdc0eda6-ea52-4f72-a46a-94f47a89b546; // string | The Activity Id of the existing activity log.

try {
    $result = $apiInstance->findActivityLog($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityLogsApi->findActivityLog: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **activity_id** | **string**| The Activity Id of the existing activity log. | |

### Return type

[**\Lago\LagoPhpClient\Model\ActivityLog**](../Model/ActivityLog.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllActivityLogs()`

```php
findAllActivityLogs($page, $per_page, $from_date, $to_date, $activity_types, $activity_sources, $user_emails, $external_customer_id, $external_subscription_id, $resource_ids, $resource_types): \Lago\LagoPhpClient\Model\ActivityLogsPaginated
```

List all activity logs

This endpoint retrieves all existing activity logs that represent actions performed on application resources.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\ActivityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$from_date = 2022-08-09; // \DateTime | Filter activity logs from a specific date.
$to_date = 2022-08-09; // \DateTime | Filter activity logs up to a specific date.
$activity_types = ["billing_metric.created","billing_metric.updated"]; // string[] | Filter results by activity types
$activity_sources = ["api","front"]; // string[] | Filter results by activity sources
$user_emails = ["dinesh@piedpiper.test"]; // string[] | Filter results by user emails
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.
$external_subscription_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External subscription ID
$resource_ids = ["5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba","1a901a90-1a90-1a90-1a90-1a901a901a90"]; // string[] | Filter results by resources unique identifiers
$resource_types = ["BillableMetric","Invoice"]; // string[] | Filter results by resource class types

try {
    $result = $apiInstance->findAllActivityLogs($page, $per_page, $from_date, $to_date, $activity_types, $activity_sources, $user_emails, $external_customer_id, $external_subscription_id, $resource_ids, $resource_types);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityLogsApi->findAllActivityLogs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **from_date** | **\DateTime**| Filter activity logs from a specific date. | [optional] |
| **to_date** | **\DateTime**| Filter activity logs up to a specific date. | [optional] |
| **activity_types** | [**string[]**](../Model/string.md)| Filter results by activity types | [optional] |
| **activity_sources** | [**string[]**](../Model/string.md)| Filter results by activity sources | [optional] |
| **user_emails** | [**string[]**](../Model/string.md)| Filter results by user emails | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |
| **external_subscription_id** | **string**| External subscription ID | [optional] |
| **resource_ids** | [**string[]**](../Model/string.md)| Filter results by resources unique identifiers | [optional] |
| **resource_types** | [**string[]**](../Model/string.md)| Filter results by resource class types | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\ActivityLogsPaginated**](../Model/ActivityLogsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
