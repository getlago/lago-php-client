# Lago\LagoPhpClient\EventsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBatchEvents()**](EventsApi.md#createBatchEvents) | **POST** /events/batch | Batch multiple events |
| [**createEvent()**](EventsApi.md#createEvent) | **POST** /events | Send usage events |
| [**eventBatchEstimateInstantFees()**](EventsApi.md#eventBatchEstimateInstantFees) | **POST** /events/batch_estimate_instant_fees | Batch estimate instant fees for a pay in advance charge |
| [**eventEstimateFees()**](EventsApi.md#eventEstimateFees) | **POST** /events/estimate_fees | Estimate fees for a pay in advance charge |
| [**eventEstimateInstantFees()**](EventsApi.md#eventEstimateInstantFees) | **POST** /events/estimate_instant_fees | Estimate instant fees for a pay in advance charge |
| [**findAllEvents()**](EventsApi.md#findAllEvents) | **GET** /events | List all events |
| [**findEvent()**](EventsApi.md#findEvent) | **GET** /events/{transaction_id} | Retrieve a specific event |


## `createBatchEvents()`

```php
createBatchEvents($event_batch_input): \Lago\LagoPhpClient\Model\EventsCreated
```

Batch multiple events

This endpoint can be used to send a batch of usage records. Each request may include up to 100 events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_batch_input = new \Lago\LagoPhpClient\Model\EventBatchInput(); // \Lago\LagoPhpClient\Model\EventBatchInput | Batch events payload

try {
    $result = $apiInstance->createBatchEvents($event_batch_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createBatchEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_batch_input** | [**\Lago\LagoPhpClient\Model\EventBatchInput**](../Model/EventBatchInput.md)| Batch events payload | |

### Return type

[**\Lago\LagoPhpClient\Model\EventsCreated**](../Model/EventsCreated.md)

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
createEvent($event_input): \Lago\LagoPhpClient\Model\EventCreated
```

Send usage events

This endpoint is used for transmitting usage measurement events to either a designated customer or a specific subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_input = new \Lago\LagoPhpClient\Model\EventInput(); // \Lago\LagoPhpClient\Model\EventInput | Event payload

try {
    $result = $apiInstance->createEvent($event_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->createEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_input** | [**\Lago\LagoPhpClient\Model\EventInput**](../Model/EventInput.md)| Event payload | |

### Return type

[**\Lago\LagoPhpClient\Model\EventCreated**](../Model/EventCreated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventBatchEstimateInstantFees()`

```php
eventBatchEstimateInstantFees($event_batch_estimate_instant_fees_input): \Lago\LagoPhpClient\Model\FeesEstimate
```

Batch estimate instant fees for a pay in advance charge

Estimate the fees that would be created after reception of an event for a billable metric attached to one or multiple pay in advance standard or percentage charges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_batch_estimate_instant_fees_input = new \Lago\LagoPhpClient\Model\EventBatchEstimateInstantFeesInput(); // \Lago\LagoPhpClient\Model\EventBatchEstimateInstantFeesInput | Batch event estimate instant payload

try {
    $result = $apiInstance->eventBatchEstimateInstantFees($event_batch_estimate_instant_fees_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventBatchEstimateInstantFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_batch_estimate_instant_fees_input** | [**\Lago\LagoPhpClient\Model\EventBatchEstimateInstantFeesInput**](../Model/EventBatchEstimateInstantFeesInput.md)| Batch event estimate instant payload | |

### Return type

[**\Lago\LagoPhpClient\Model\FeesEstimate**](../Model/FeesEstimate.md)

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
eventEstimateFees($event_estimate_fees_input): \Lago\LagoPhpClient\Model\Fees
```

Estimate fees for a pay in advance charge

Estimate the fees that would be created after reception of an event for a billable metric attached to one or multiple pay in advance charges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_estimate_fees_input = new \Lago\LagoPhpClient\Model\EventEstimateFeesInput(); // \Lago\LagoPhpClient\Model\EventEstimateFeesInput | Event estimate payload

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
| **event_estimate_fees_input** | [**\Lago\LagoPhpClient\Model\EventEstimateFeesInput**](../Model/EventEstimateFeesInput.md)| Event estimate payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Fees**](../Model/Fees.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventEstimateInstantFees()`

```php
eventEstimateInstantFees($event_estimate_instant_fees_input): \Lago\LagoPhpClient\Model\FeesEstimate
```

Estimate instant fees for a pay in advance charge

Estimate the fees that would be created after reception of an event for a billable metric attached to one or multiple pay in advance standard or percentage charges

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$event_estimate_instant_fees_input = new \Lago\LagoPhpClient\Model\EventEstimateInstantFeesInput(); // \Lago\LagoPhpClient\Model\EventEstimateInstantFeesInput | Event estimate instant payload

try {
    $result = $apiInstance->eventEstimateInstantFees($event_estimate_instant_fees_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->eventEstimateInstantFees: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **event_estimate_instant_fees_input** | [**\Lago\LagoPhpClient\Model\EventEstimateInstantFeesInput**](../Model/EventEstimateInstantFeesInput.md)| Event estimate instant payload | |

### Return type

[**\Lago\LagoPhpClient\Model\FeesEstimate**](../Model/FeesEstimate.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllEvents()`

```php
findAllEvents($page, $per_page, $external_subscription_id, $code, $timestamp_from, $timestamp_to): \Lago\LagoPhpClient\Model\EventsPaginated
```

List all events

This endpoint is used for retrieving all events.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_subscription_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External subscription ID
$code = event-123; // string | Filter events by its code.
$timestamp_from = 2022-08-08T00:00:00Z; // \DateTime | Filter events by timestamp starting from a specific date.
$timestamp_to = 2022-08-08T00:00:00Z; // \DateTime | Filter events by timestamp up to a specific date.

try {
    $result = $apiInstance->findAllEvents($page, $per_page, $external_subscription_id, $code, $timestamp_from, $timestamp_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findAllEvents: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_subscription_id** | **string**| External subscription ID | [optional] |
| **code** | **string**| Filter events by its code. | [optional] |
| **timestamp_from** | **\DateTime**| Filter events by timestamp starting from a specific date. | [optional] |
| **timestamp_to** | **\DateTime**| Filter events by timestamp up to a specific date. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\EventsPaginated**](../Model/EventsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findEvent()`

```php
findEvent($transaction_id): \Lago\LagoPhpClient\Model\Event
```

Retrieve a specific event

This endpoint is used for retrieving a specific usage measurement event that has been sent to a customer or a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$transaction_id = transaction_1234567890; // string | This field represents the unique identifier sent for this specific event (must be URL encoded).

try {
    $result = $apiInstance->findEvent($transaction_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->findEvent: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **transaction_id** | **string**| This field represents the unique identifier sent for this specific event (must be URL encoded). | |

### Return type

[**\Lago\LagoPhpClient\Model\Event**](../Model/Event.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
