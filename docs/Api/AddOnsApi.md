# OpenAPI\Client\AddOnsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyAddOn()**](AddOnsApi.md#applyAddOn) | **POST** /applied_add_ons | Apply an add-on to a customer |
| [**createAddOn()**](AddOnsApi.md#createAddOn) | **POST** /add_ons | Create a new add-on |
| [**destroyAddOn()**](AddOnsApi.md#destroyAddOn) | **DELETE** /add_ons/{code} | Delete an add-on |
| [**findAddOn()**](AddOnsApi.md#findAddOn) | **GET** /add_ons/{code} | Find add-on by code |
| [**findAllAddOns()**](AddOnsApi.md#findAllAddOns) | **GET** /add_ons | Find add-ons |
| [**updateAddOn()**](AddOnsApi.md#updateAddOn) | **PUT** /add_ons/{code} | Update an existing add-on |


## `applyAddOn()`

```php
applyAddOn($applied_add_on_input): \OpenAPI\Client\Model\AppliedAddOn
```

Apply an add-on to a customer

Apply an add-on to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applied_add_on_input = new \OpenAPI\Client\Model\AppliedAddOnInput(); // \OpenAPI\Client\Model\AppliedAddOnInput | Apply add-on payload

try {
    $result = $apiInstance->applyAddOn($applied_add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->applyAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applied_add_on_input** | [**\OpenAPI\Client\Model\AppliedAddOnInput**](../Model/AppliedAddOnInput.md)| Apply add-on payload | |

### Return type

[**\OpenAPI\Client\Model\AppliedAddOn**](../Model/AppliedAddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createAddOn()`

```php
createAddOn($add_on_input): \OpenAPI\Client\Model\AddOn
```

Create a new add-on

Create a new add-on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$add_on_input = new \OpenAPI\Client\Model\AddOnInput(); // \OpenAPI\Client\Model\AddOnInput | Add-on payload

try {
    $result = $apiInstance->createAddOn($add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->createAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **add_on_input** | [**\OpenAPI\Client\Model\AddOnInput**](../Model/AddOnInput.md)| Add-on payload | |

### Return type

[**\OpenAPI\Client\Model\AddOn**](../Model/AddOn.md)

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
destroyAddOn($code): \OpenAPI\Client\Model\AddOn
```

Delete an add-on

Delete an add-on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing add-on

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
| **code** | **string**| Code of the existing add-on | |

### Return type

[**\OpenAPI\Client\Model\AddOn**](../Model/AddOn.md)

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
findAddOn($code): \OpenAPI\Client\Model\AddOn
```

Find add-on by code

Return a single add-on

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing add-on

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
| **code** | **string**| Code of the existing add-on | |

### Return type

[**\OpenAPI\Client\Model\AddOn**](../Model/AddOn.md)

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
findAllAddOns($page, $per_page): \OpenAPI\Client\Model\AddOnsPaginated
```

Find add-ons

Find all add-ons in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

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
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\AddOnsPaginated**](../Model/AddOnsPaginated.md)

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
updateAddOn($code, $add_on_input): \OpenAPI\Client\Model\AddOn
```

Update an existing add-on

Update an existing add-on by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing add-on
$add_on_input = new \OpenAPI\Client\Model\AddOnInput(); // \OpenAPI\Client\Model\AddOnInput | Update an existing add-on

try {
    $result = $apiInstance->updateAddOn($code, $add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->updateAddOn: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing add-on | |
| **add_on_input** | [**\OpenAPI\Client\Model\AddOnInput**](../Model/AddOnInput.md)| Update an existing add-on | |

### Return type

[**\OpenAPI\Client\Model\AddOn**](../Model/AddOn.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
