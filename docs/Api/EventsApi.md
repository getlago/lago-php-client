# OpenAPI\Client\EventsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBatchEvents()**](EventsApi.md#createBatchEvents) | **POST** /events/batch | Create batch events |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events | Create a new event |
| [**eventEstimateFees()**](EventsApi.md#eventEstimateFees) | **POST** /events/estimate_fees | Estimate fees for an instant charge |
| [**findEvent()**](EventsApi.md#findEvent) | **GET** /events/{id} | Find event by transaction ID |


## `createBatchEvents()`

```php
createBatchEvents($batch_event_input)
```

Create batch events

Create batch events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$batch_event_input = new \OpenAPI\Client\Model\BatchEventInput(); // \OpenAPI\Client\Model\BatchEventInput | Batch events payload

try {
    $apiInstance->createBatchEvents($batch_event_input);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createBatchEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **batch_event_input** | [**\OpenAPI\Client\Model\BatchEventInput**](../Model/BatchEventInput.md)| Batch events payload | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createEvent()`

```php
createEvent($event_input)
```

Create a new event

Create a new event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_input = new \OpenAPI\Client\Model\EventInput(); // \OpenAPI\Client\Model\EventInput | Event payload

try {
    $apiInstance->createEvent($event_input);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_input** | [**\OpenAPI\Client\Model\EventInput**](../Model/EventInput.md)| Event payload | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventEstimateFees()`

```php
eventEstimateFees($event_estimate_fees_input): \OpenAPI\Client\Model\Fees
```

Estimate fees for an instant charge

Estimate the fees that would be created after reception of an event for a billable metric attached to one or multiple instant charges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_estimate_fees_input = new \OpenAPI\Client\Model\EventEstimateFeesInput(); // \OpenAPI\Client\Model\EventEstimateFeesInput | Event payload for instant fee estimate

try {
    $result = $apiInstance->eventEstimateFees($event_estimate_fees_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventEstimateFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_estimate_fees_input** | [**\OpenAPI\Client\Model\EventEstimateFeesInput**](../Model/EventEstimateFeesInput.md)| Event payload for instant fee estimate | |

### Return type

[**\OpenAPI\Client\Model\Fees**](../Model/Fees.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findEvent()`

```php
findEvent($id): \OpenAPI\Client\Model\Event
```

Find event by transaction ID

Return a single event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 12345; // string | Id of the existing transaction

try {
    $result = $apiInstance->findEvent($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| Id of the existing transaction | |

### Return type

[**\OpenAPI\Client\Model\Event**](../Model/Event.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
