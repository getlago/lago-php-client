# Lago\LagoPhpClient\SubscriptionsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createSubscription()**](SubscriptionsApi.md#createSubscription) | **POST** /subscriptions | Assign a plan to a customer |
| [**createSubscriptionAlert()**](SubscriptionsApi.md#createSubscriptionAlert) | **POST** /subscriptions/{external_id}/alerts | Create a subscription alert |
| [**deleteSubscriptionAlert()**](SubscriptionsApi.md#deleteSubscriptionAlert) | **DELETE** /subscriptions/{external_id}/alerts/{code} | Delete a subscription alert |
| [**destroySubscription()**](SubscriptionsApi.md#destroySubscription) | **DELETE** /subscriptions/{external_id} | Terminate a subscription |
| [**findAllSubscriptions()**](SubscriptionsApi.md#findAllSubscriptions) | **GET** /subscriptions | List all subscriptions |
| [**findSubscription()**](SubscriptionsApi.md#findSubscription) | **GET** /subscriptions/{external_id} | Retrieve a subscription |
| [**getSubscriptionAlert()**](SubscriptionsApi.md#getSubscriptionAlert) | **GET** /subscriptions/{external_id}/alerts/{code} | Retrieve a subscription alert |
| [**getSubscriptionAlerts()**](SubscriptionsApi.md#getSubscriptionAlerts) | **GET** /subscriptions/{external_id}/alerts | List subscription alerts |
| [**getSubscriptionLifetimeUsage()**](SubscriptionsApi.md#getSubscriptionLifetimeUsage) | **GET** /subscriptions/{external_id}/lifetime_usage | Retrieve subscription lifetime usage |
| [**updateSubscription()**](SubscriptionsApi.md#updateSubscription) | **PUT** /subscriptions/{external_id} | Update a subscription |
| [**updateSubscriptionAlert()**](SubscriptionsApi.md#updateSubscriptionAlert) | **PUT** /subscriptions/{external_id}/alerts/{code} | Update a subscription alert |
| [**updateSubscriptionLifetimeUsage()**](SubscriptionsApi.md#updateSubscriptionLifetimeUsage) | **PUT** /subscriptions/{external_id}/lifetime_usage | Update a subscription lifetime usage |


## `createSubscription()`

```php
createSubscription($subscription_create_input): \Lago\LagoPhpClient\Model\Subscription
```

Assign a plan to a customer

This endpoint assigns a plan to a customer, creating or modifying a subscription. Ideal for initial subscriptions or plan changes (upgrades/downgrades).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$subscription_create_input = new \Lago\LagoPhpClient\Model\SubscriptionCreateInput(); // \Lago\LagoPhpClient\Model\SubscriptionCreateInput | Subscription payload

try {
    $result = $apiInstance->createSubscription($subscription_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **subscription_create_input** | [**\Lago\LagoPhpClient\Model\SubscriptionCreateInput**](../Model/SubscriptionCreateInput.md)| Subscription payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createSubscriptionAlert()`

```php
createSubscriptionAlert($external_id, $alert_create_input): \Lago\LagoPhpClient\Model\Alert
```

Create a subscription alert

This endpoint allows you to create a new alert for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$alert_create_input = new \Lago\LagoPhpClient\Model\AlertCreateInput(); // \Lago\LagoPhpClient\Model\AlertCreateInput | Create a new alert for a subscription

try {
    $result = $apiInstance->createSubscriptionAlert($external_id, $alert_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->createSubscriptionAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **alert_create_input** | [**\Lago\LagoPhpClient\Model\AlertCreateInput**](../Model/AlertCreateInput.md)| Create a new alert for a subscription | |

### Return type

[**\Lago\LagoPhpClient\Model\Alert**](../Model/Alert.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteSubscriptionAlert()`

```php
deleteSubscriptionAlert($external_id, $code): \Lago\LagoPhpClient\Model\Alert
```

Delete a subscription alert

This endpoint allows you to delete an existing alert for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$code = storage_threshold_alert; // string | Unique code of the alert

try {
    $result = $apiInstance->deleteSubscriptionAlert($external_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->deleteSubscriptionAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **code** | **string**| Unique code of the alert | |

### Return type

[**\Lago\LagoPhpClient\Model\Alert**](../Model/Alert.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroySubscription()`

```php
destroySubscription($external_id, $status, $on_termination_credit_note): \Lago\LagoPhpClient\Model\Subscription
```

Terminate a subscription

This endpoint allows you to terminate a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$status = pending; // string | If the field is not defined, Lago will terminate only `active` subscriptions. However, if you wish to cancel a `pending` subscription, please ensure that you include `status=pending` in your request.
$on_termination_credit_note = credit; // string | When a pay-in-advance subscription is terminated before the end of its billing period, we generate a credit note for the unused subscription time by default. This field allows you to control the behavior of the credit note generation:  - `credit`: A credit note is generated for the unused subscription time. - `skip`: No credit note is generated for the unused subscription time.  _Note: This field is only applicable to pay-in-advance plans and is ignored for pay-in-arrears plans._

try {
    $result = $apiInstance->destroySubscription($external_id, $status, $on_termination_credit_note);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->destroySubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **status** | **string**| If the field is not defined, Lago will terminate only &#x60;active&#x60; subscriptions. However, if you wish to cancel a &#x60;pending&#x60; subscription, please ensure that you include &#x60;status&#x3D;pending&#x60; in your request. | [optional] |
| **on_termination_credit_note** | **string**| When a pay-in-advance subscription is terminated before the end of its billing period, we generate a credit note for the unused subscription time by default. This field allows you to control the behavior of the credit note generation:  - &#x60;credit&#x60;: A credit note is generated for the unused subscription time. - &#x60;skip&#x60;: No credit note is generated for the unused subscription time.  _Note: This field is only applicable to pay-in-advance plans and is ignored for pay-in-arrears plans._ | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllSubscriptions()`

```php
findAllSubscriptions($page, $per_page, $external_customer_id, $plan_code, $status): \Lago\LagoPhpClient\Model\SubscriptionsPaginated
```

List all subscriptions

This endpoint retrieves all active subscriptions.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)
$plan_code = premium; // string | The unique code representing the plan to be attached to the customer. This code must correspond to the code property of one of the active plans.
$status = ["active","pending"]; // string[] | If the field is not defined, Lago will return only `active` subscriptions. However, if you wish to fetch subscriptions by different status you can define them in a status[] query param. Available filter values: `pending`, `canceled`, `terminated`, `active`.

try {
    $result = $apiInstance->findAllSubscriptions($page, $per_page, $external_customer_id, $plan_code, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->findAllSubscriptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | [optional] |
| **plan_code** | **string**| The unique code representing the plan to be attached to the customer. This code must correspond to the code property of one of the active plans. | [optional] |
| **status** | [**string[]**](../Model/string.md)| If the field is not defined, Lago will return only &#x60;active&#x60; subscriptions. However, if you wish to fetch subscriptions by different status you can define them in a status[] query param. Available filter values: &#x60;pending&#x60;, &#x60;canceled&#x60;, &#x60;terminated&#x60;, &#x60;active&#x60;. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\SubscriptionsPaginated**](../Model/SubscriptionsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findSubscription()`

```php
findSubscription($external_id, $status): \Lago\LagoPhpClient\Model\Subscription
```

Retrieve a subscription

This endpoint retrieves a specific subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$status = active; // string | By default, this endpoint only return `active` subscriptions. If you want to retrieve a subscription with a different `status`, you can specify it here.  _Note: As there may exists multiple `canceled` or `terminated` subscribtions for the same `external_id`, it is recommended to use the \"List all subscriptions\" endpoint to retrieve those subscriptions._

try {
    $result = $apiInstance->findSubscription($external_id, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->findSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **status** | **string**| By default, this endpoint only return &#x60;active&#x60; subscriptions. If you want to retrieve a subscription with a different &#x60;status&#x60;, you can specify it here.  _Note: As there may exists multiple &#x60;canceled&#x60; or &#x60;terminated&#x60; subscribtions for the same &#x60;external_id&#x60;, it is recommended to use the \&quot;List all subscriptions\&quot; endpoint to retrieve those subscriptions._ | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionAlert()`

```php
getSubscriptionAlert($external_id, $code): \Lago\LagoPhpClient\Model\Alert
```

Retrieve a subscription alert

This endpoint enables the retrieval of a specific alert for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$code = storage_threshold_alert; // string | Unique code of the alert

try {
    $result = $apiInstance->getSubscriptionAlert($external_id, $code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **code** | **string**| Unique code of the alert | |

### Return type

[**\Lago\LagoPhpClient\Model\Alert**](../Model/Alert.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionAlerts()`

```php
getSubscriptionAlerts($external_id): \Lago\LagoPhpClient\Model\Alerts
```

List subscription alerts

This endpoint enables the retrieval of all alerts for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription

try {
    $result = $apiInstance->getSubscriptionAlerts($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionAlerts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |

### Return type

[**\Lago\LagoPhpClient\Model\Alerts**](../Model/Alerts.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSubscriptionLifetimeUsage()`

```php
getSubscriptionLifetimeUsage($external_id): \Lago\LagoPhpClient\Model\LifetimeUsage
```

Retrieve subscription lifetime usage

This endpoint enables the retrieval of the lifetime usage of a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription

try {
    $result = $apiInstance->getSubscriptionLifetimeUsage($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->getSubscriptionLifetimeUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |

### Return type

[**\Lago\LagoPhpClient\Model\LifetimeUsage**](../Model/LifetimeUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscription()`

```php
updateSubscription($external_id, $subscription_update_input): \Lago\LagoPhpClient\Model\Subscription
```

Update a subscription

This endpoint allows you to update a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$subscription_update_input = new \Lago\LagoPhpClient\Model\SubscriptionUpdateInput(); // \Lago\LagoPhpClient\Model\SubscriptionUpdateInput | Update an existing subscription

try {
    $result = $apiInstance->updateSubscription($external_id, $subscription_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscription: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **subscription_update_input** | [**\Lago\LagoPhpClient\Model\SubscriptionUpdateInput**](../Model/SubscriptionUpdateInput.md)| Update an existing subscription | |

### Return type

[**\Lago\LagoPhpClient\Model\Subscription**](../Model/Subscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriptionAlert()`

```php
updateSubscriptionAlert($external_id, $code, $alert_update_input): \Lago\LagoPhpClient\Model\Alert
```

Update a subscription alert

This endpoint allows you to update an existing alert for a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$code = storage_threshold_alert; // string | Unique code of the alert
$alert_update_input = new \Lago\LagoPhpClient\Model\AlertUpdateInput(); // \Lago\LagoPhpClient\Model\AlertUpdateInput | Update an existing alert for a subscription

try {
    $result = $apiInstance->updateSubscriptionAlert($external_id, $code, $alert_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscriptionAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **code** | **string**| Unique code of the alert | |
| **alert_update_input** | [**\Lago\LagoPhpClient\Model\AlertUpdateInput**](../Model/AlertUpdateInput.md)| Update an existing alert for a subscription | |

### Return type

[**\Lago\LagoPhpClient\Model\Alert**](../Model/Alert.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateSubscriptionLifetimeUsage()`

```php
updateSubscriptionLifetimeUsage($external_id, $lifetime_usage_input): \Lago\LagoPhpClient\Model\LifetimeUsage
```

Update a subscription lifetime usage

This endpoint allows you to update the lifetime usage of a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\SubscriptionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing subscription
$lifetime_usage_input = new \Lago\LagoPhpClient\Model\LifetimeUsageInput(); // \Lago\LagoPhpClient\Model\LifetimeUsageInput | Update the lifetime usage of a subscription

try {
    $result = $apiInstance->updateSubscriptionLifetimeUsage($external_id, $lifetime_usage_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SubscriptionsApi->updateSubscriptionLifetimeUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing subscription | |
| **lifetime_usage_input** | [**\Lago\LagoPhpClient\Model\LifetimeUsageInput**](../Model/LifetimeUsageInput.md)| Update the lifetime usage of a subscription | |

### Return type

[**\Lago\LagoPhpClient\Model\LifetimeUsage**](../Model/LifetimeUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
