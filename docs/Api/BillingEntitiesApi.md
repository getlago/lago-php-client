# Lago\LagoPhpClient\BillingEntitiesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createBillingEntity()**](BillingEntitiesApi.md#createBillingEntity) | **POST** /billing_entities | Create a billing entity |
| [**getBillingEntity()**](BillingEntitiesApi.md#getBillingEntity) | **GET** /billing_entities/{code} | Retrieve a billing entity |
| [**listBillingEntities()**](BillingEntitiesApi.md#listBillingEntities) | **GET** /billing_entities | List all billing entities |
| [**updateBillingEntity()**](BillingEntitiesApi.md#updateBillingEntity) | **PUT** /billing_entities/{code} | Update a billing entity |


## `createBillingEntity()`

```php
createBillingEntity($billing_entity_create_input): \Lago\LagoPhpClient\Model\BillingEntityObject
```

Create a billing entity

This endpoint is used to create a new billing entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillingEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$billing_entity_create_input = new \Lago\LagoPhpClient\Model\BillingEntityCreateInput(); // \Lago\LagoPhpClient\Model\BillingEntityCreateInput | The billing entity payload

try {
    $result = $apiInstance->createBillingEntity($billing_entity_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingEntitiesApi->createBillingEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **billing_entity_create_input** | [**\Lago\LagoPhpClient\Model\BillingEntityCreateInput**](../Model/BillingEntityCreateInput.md)| The billing entity payload | |

### Return type

[**\Lago\LagoPhpClient\Model\BillingEntityObject**](../Model/BillingEntityObject.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getBillingEntity()`

```php
getBillingEntity($code): \Lago\LagoPhpClient\Model\GetBillingEntity200Response
```

Retrieve a billing entity

This endpoint returns a specific billing entity by its code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillingEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The ID of the billing entity

try {
    $result = $apiInstance->getBillingEntity($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingEntitiesApi->getBillingEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The ID of the billing entity | |

### Return type

[**\Lago\LagoPhpClient\Model\GetBillingEntity200Response**](../Model/GetBillingEntity200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listBillingEntities()`

```php
listBillingEntities(): \Lago\LagoPhpClient\Model\ListBillingEntities200Response
```

List all billing entities

This endpoint returns a list of all billing entities in the organization

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillingEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->listBillingEntities();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingEntitiesApi->listBillingEntities: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

This endpoint does not need any parameter.

### Return type

[**\Lago\LagoPhpClient\Model\ListBillingEntities200Response**](../Model/ListBillingEntities200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateBillingEntity()`

```php
updateBillingEntity($code, $billing_entity_update_input): \Lago\LagoPhpClient\Model\BillingEntityObjectExtended
```

Update a billing entity

This endpoint is used to update an existing billing entity

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\BillingEntitiesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = 'code_example'; // string | The ID of the billing entity
$billing_entity_update_input = new \Lago\LagoPhpClient\Model\BillingEntityUpdateInput(); // \Lago\LagoPhpClient\Model\BillingEntityUpdateInput | The billing entity update payload

try {
    $result = $apiInstance->updateBillingEntity($code, $billing_entity_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BillingEntitiesApi->updateBillingEntity: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The ID of the billing entity | |
| **billing_entity_update_input** | [**\Lago\LagoPhpClient\Model\BillingEntityUpdateInput**](../Model/BillingEntityUpdateInput.md)| The billing entity update payload | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\BillingEntityObjectExtended**](../Model/BillingEntityObjectExtended.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
