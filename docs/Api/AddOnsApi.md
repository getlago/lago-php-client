# Lago\LagoPhpClient\AddOnsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createAddOn()**](AddOnsApi.md#createAddOn) | **POST** /add_ons | Create an add-on |
| [**destroyAddOn()**](AddOnsApi.md#destroyAddOn) | **DELETE** /add_ons/{code} | Delete an add-on |
| [**findAddOn()**](AddOnsApi.md#findAddOn) | **GET** /add_ons/{code} | Retrieve an add-on |
| [**findAllAddOns()**](AddOnsApi.md#findAllAddOns) | **GET** /add_ons | List all add-ons |
| [**updateAddOn()**](AddOnsApi.md#updateAddOn) | **PUT** /add_ons/{code} | Update an add-on |


## `createAddOn()`

```php
createAddOn($add_on_create_input): \Lago\LagoPhpClient\Model\AddOn
```

Create an add-on

This endpoint is used to create an add-on that can be then attached to a one-off invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_on_create_input = new \Lago\LagoPhpClient\Model\AddOnCreateInput(); // \Lago\LagoPhpClient\Model\AddOnCreateInput | Add-on payload

try {
    $result = $apiInstance->createAddOn($add_on_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->createAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_on_create_input** | [**\Lago\LagoPhpClient\Model\AddOnCreateInput**](../Model/AddOnCreateInput.md)| Add-on payload | |

### Return type

[**\Lago\LagoPhpClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyAddOn()`

```php
destroyAddOn($code): \Lago\LagoPhpClient\Model\AddOn
```

Delete an add-on

This endpoint is used to delete an existing add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = setup_fee; // string | Unique code used to identify the add-on.

try {
    $result = $apiInstance->destroyAddOn($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->destroyAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the add-on. | |

### Return type

[**\Lago\LagoPhpClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAddOn()`

```php
findAddOn($code): \Lago\LagoPhpClient\Model\AddOn
```

Retrieve an add-on

This endpoint is used to retrieve a specific add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = setup_fee; // string | Unique code used to identify the add-on.

try {
    $result = $apiInstance->findAddOn($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->findAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the add-on. | |

### Return type

[**\Lago\LagoPhpClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllAddOns()`

```php
findAllAddOns($page, $per_page): \Lago\LagoPhpClient\Model\AddOnsPaginated
```

List all add-ons

This endpoint is used to list all existing add-ons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllAddOns($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->findAllAddOns: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\AddOnsPaginated**](../Model/AddOnsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateAddOn()`

```php
updateAddOn($code, $add_on_update_input): \Lago\LagoPhpClient\Model\AddOn
```

Update an add-on

This endpoint is used to update an existing add-on.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = setup_fee; // string | Unique code used to identify the add-on.
$add_on_update_input = new \Lago\LagoPhpClient\Model\AddOnUpdateInput(); // \Lago\LagoPhpClient\Model\AddOnUpdateInput | Add-on payload

try {
    $result = $apiInstance->updateAddOn($code, $add_on_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->updateAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the add-on. | |
| **add_on_update_input** | [**\Lago\LagoPhpClient\Model\AddOnUpdateInput**](../Model/AddOnUpdateInput.md)| Add-on payload | |

### Return type

[**\Lago\LagoPhpClient\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
