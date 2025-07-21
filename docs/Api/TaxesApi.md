# Lago\LagoPhpClient\TaxesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createTax()**](TaxesApi.md#createTax) | **POST** /taxes | Create a tax |
| [**destroyTax()**](TaxesApi.md#destroyTax) | **DELETE** /taxes/{code} | Delete a tax |
| [**findAllTaxes()**](TaxesApi.md#findAllTaxes) | **GET** /taxes | List all taxes |
| [**findTax()**](TaxesApi.md#findTax) | **GET** /taxes/{code} | Retrieve a Tax |
| [**updateTax()**](TaxesApi.md#updateTax) | **PUT** /taxes/{code} | Update a tax |


## `createTax()`

```php
createTax($tax_create_input): \Lago\LagoPhpClient\Model\Tax
```

Create a tax

This endpoint creates a new tax representing a customizable tax rate applicable to either the organization or a specific customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$tax_create_input = new \Lago\LagoPhpClient\Model\TaxCreateInput(); // \Lago\LagoPhpClient\Model\TaxCreateInput | Tax creation payload

try {
    $result = $apiInstance->createTax($tax_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->createTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **tax_create_input** | [**\Lago\LagoPhpClient\Model\TaxCreateInput**](../Model/TaxCreateInput.md)| Tax creation payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Tax**](../Model/Tax.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyTax()`

```php
destroyTax($code): \Lago\LagoPhpClient\Model\Tax
```

Delete a tax

This endpoint is used to delete a tax.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = french_standard_vat; // string | The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.

try {
    $result = $apiInstance->destroyTax($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->destroyTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes. | |

### Return type

[**\Lago\LagoPhpClient\Model\Tax**](../Model/Tax.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllTaxes()`

```php
findAllTaxes($page, $per_page): \Lago\LagoPhpClient\Model\TaxesPaginated
```

List all taxes

This endpoint retrieves all existing taxes representing a customizable tax rate applicable to either the organization or a specific customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllTaxes($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->findAllTaxes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\TaxesPaginated**](../Model/TaxesPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findTax()`

```php
findTax($code): \Lago\LagoPhpClient\Model\Tax
```

Retrieve a Tax

This endpoint retrieves an existing tax representing a customizable tax rate applicable to either the organization or a specific customer. The tax is identified by its unique code.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = french_standard_vat; // string | The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.

try {
    $result = $apiInstance->findTax($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->findTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes. | |

### Return type

[**\Lago\LagoPhpClient\Model\Tax**](../Model/Tax.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateTax()`

```php
updateTax($code, $tax_update_input): \Lago\LagoPhpClient\Model\Tax
```

Update a tax

This endpoint updates an existing tax representing a customizable tax rate applicable to either the organization or a specific customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\TaxesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = french_standard_vat; // string | The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes.
$tax_update_input = new \Lago\LagoPhpClient\Model\TaxUpdateInput(); // \Lago\LagoPhpClient\Model\TaxUpdateInput | Tax update payload

try {
    $result = $apiInstance->updateTax($code, $tax_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TaxesApi->updateTax: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| The code of the tax. It serves as a unique identifier associated with a particular tax. The code is typically used for internal or system-level identification purposes. | |
| **tax_update_input** | [**\Lago\LagoPhpClient\Model\TaxUpdateInput**](../Model/TaxUpdateInput.md)| Tax update payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Tax**](../Model/Tax.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
