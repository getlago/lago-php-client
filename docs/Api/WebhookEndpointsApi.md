# Lago\LagoPhpClient\WebhookEndpointsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createWebhookEndpoint()**](WebhookEndpointsApi.md#createWebhookEndpoint) | **POST** /webhook_endpoints | Create a webhook_endpoint |
| [**destroyWebhookEndpoint()**](WebhookEndpointsApi.md#destroyWebhookEndpoint) | **DELETE** /webhook_endpoints/{lago_id} | Delete a webhook endpoint |
| [**findAllWebhookEndpoints()**](WebhookEndpointsApi.md#findAllWebhookEndpoints) | **GET** /webhook_endpoints | List all webhook endpoints |
| [**findWebhookEndpoint()**](WebhookEndpointsApi.md#findWebhookEndpoint) | **GET** /webhook_endpoints/{lago_id} | Retrieve a webhook endpoint |
| [**updateWebhookEndpoint()**](WebhookEndpointsApi.md#updateWebhookEndpoint) | **PUT** /webhook_endpoints/{lago_id} | Update a webhook endpoint |


## `createWebhookEndpoint()`

```php
createWebhookEndpoint($webhook_endpoint_create_input): \Lago\LagoPhpClient\Model\WebhookEndpoint
```

Create a webhook_endpoint

This endpoint is used to create a webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_endpoint_create_input = new \Lago\LagoPhpClient\Model\WebhookEndpointCreateInput(); // \Lago\LagoPhpClient\Model\WebhookEndpointCreateInput | Webhook Endpoint payload

try {
    $result = $apiInstance->createWebhookEndpoint($webhook_endpoint_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->createWebhookEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **webhook_endpoint_create_input** | [**\Lago\LagoPhpClient\Model\WebhookEndpointCreateInput**](../Model/WebhookEndpointCreateInput.md)| Webhook Endpoint payload | |

### Return type

[**\Lago\LagoPhpClient\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyWebhookEndpoint()`

```php
destroyWebhookEndpoint($lago_id): \Lago\LagoPhpClient\Model\WebhookEndpoint
```

Delete a webhook endpoint

This endpoint is used to delete an existing webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.

try {
    $result = $apiInstance->destroyWebhookEndpoint($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->destroyWebhookEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllWebhookEndpoints()`

```php
findAllWebhookEndpoints($page, $per_page): \Lago\LagoPhpClient\Model\WebhookEndpointsPaginated
```

List all webhook endpoints

This endpoint is used to list all webhook endpoints.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllWebhookEndpoints($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->findAllWebhookEndpoints: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\WebhookEndpointsPaginated**](../Model/WebhookEndpointsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findWebhookEndpoint()`

```php
findWebhookEndpoint($lago_id): \Lago\LagoPhpClient\Model\WebhookEndpoint
```

Retrieve a webhook endpoint

This endpoint is used to retrieve an existing webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.

try {
    $result = $apiInstance->findWebhookEndpoint($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->findWebhookEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateWebhookEndpoint()`

```php
updateWebhookEndpoint($lago_id, $webhook_endpoint_update_input): \Lago\LagoPhpClient\Model\WebhookEndpoint
```

Update a webhook endpoint

This endpoint is used to update an existing webhook endpoint.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\WebhookEndpointsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint's record within the Lago system.
$webhook_endpoint_update_input = new \Lago\LagoPhpClient\Model\WebhookEndpointUpdateInput(); // \Lago\LagoPhpClient\Model\WebhookEndpointUpdateInput | Webhook Endpoint update payload

try {
    $result = $apiInstance->updateWebhookEndpoint($lago_id, $webhook_endpoint_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookEndpointsApi->updateWebhookEndpoint: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the webhook endpoint within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the webhook endpoint&#39;s record within the Lago system. | |
| **webhook_endpoint_update_input** | [**\Lago\LagoPhpClient\Model\WebhookEndpointUpdateInput**](../Model/WebhookEndpointUpdateInput.md)| Webhook Endpoint update payload | |

### Return type

[**\Lago\LagoPhpClient\Model\WebhookEndpoint**](../Model/WebhookEndpoint.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
