# Lago\LagoPhpClient\CouponsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCoupon()**](CouponsApi.md#applyCoupon) | **POST** /applied_coupons | Apply a coupon to a customer |
| [**createCoupon()**](CouponsApi.md#createCoupon) | **POST** /coupons | Create a coupon |
| [**deleteAppliedCoupon()**](CouponsApi.md#deleteAppliedCoupon) | **DELETE** /customers/{external_customer_id}/applied_coupons/{applied_coupon_id} | Delete an applied coupon |
| [**destroyCoupon()**](CouponsApi.md#destroyCoupon) | **DELETE** /coupons/{code} | Delete a coupon |
| [**findAllAppliedCoupons()**](CouponsApi.md#findAllAppliedCoupons) | **GET** /applied_coupons | List all applied coupons |
| [**findAllCoupons()**](CouponsApi.md#findAllCoupons) | **GET** /coupons | List all coupons |
| [**findCoupon()**](CouponsApi.md#findCoupon) | **GET** /coupons/{code} | Retrieve a coupon |
| [**updateCoupon()**](CouponsApi.md#updateCoupon) | **PUT** /coupons/{code} | Update a coupon |


## `applyCoupon()`

```php
applyCoupon($applied_coupon_input): \Lago\LagoPhpClient\Model\AppliedCoupon
```

Apply a coupon to a customer

This endpoint is used to apply a specific coupon to a customer, before or during a subscription.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applied_coupon_input = new \Lago\LagoPhpClient\Model\AppliedCouponInput(); // \Lago\LagoPhpClient\Model\AppliedCouponInput | Apply coupon payload

try {
    $result = $apiInstance->applyCoupon($applied_coupon_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->applyCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **applied_coupon_input** | [**\Lago\LagoPhpClient\Model\AppliedCouponInput**](../Model/AppliedCouponInput.md)| Apply coupon payload | |

### Return type

[**\Lago\LagoPhpClient\Model\AppliedCoupon**](../Model/AppliedCoupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `createCoupon()`

```php
createCoupon($coupon_create_input): \Lago\LagoPhpClient\Model\Coupon
```

Create a coupon

This endpoint is used to create a coupon that can be then attached to a customer to create a discount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_create_input = new \Lago\LagoPhpClient\Model\CouponCreateInput(); // \Lago\LagoPhpClient\Model\CouponCreateInput | Coupon payload

try {
    $result = $apiInstance->createCoupon($coupon_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupon_create_input** | [**\Lago\LagoPhpClient\Model\CouponCreateInput**](../Model/CouponCreateInput.md)| Coupon payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `deleteAppliedCoupon()`

```php
deleteAppliedCoupon($external_customer_id, $applied_coupon_id): \Lago\LagoPhpClient\Model\AppliedCoupon
```

Delete an applied coupon

This endpoint is used to delete a specific coupon that has been applied to a customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)
$applied_coupon_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier of the applied coupon, created by Lago.

try {
    $result = $apiInstance->deleteAppliedCoupon($external_customer_id, $applied_coupon_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->deleteAppliedCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | |
| **applied_coupon_id** | **string**| Unique identifier of the applied coupon, created by Lago. | |

### Return type

[**\Lago\LagoPhpClient\Model\AppliedCoupon**](../Model/AppliedCoupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyCoupon()`

```php
destroyCoupon($code): \Lago\LagoPhpClient\Model\Coupon
```

Delete a coupon

This endpoint is used to delete a coupon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = startup_deal; // string | Unique code used to identify the coupon.

try {
    $result = $apiInstance->destroyCoupon($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->destroyCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the coupon. | |

### Return type

[**\Lago\LagoPhpClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllAppliedCoupons()`

```php
findAllAppliedCoupons($page, $per_page, $status, $external_customer_id, $coupon_code): \Lago\LagoPhpClient\Model\AppliedCouponsPaginated
```

List all applied coupons

This endpoint is used to list all applied coupons. You can filter by coupon status and by customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$status = active; // string | The status of the coupon. Can be either `active` or `terminated`.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)
$coupon_code = ["BLACK_FRIDAY_2024","CHRISTMAS_2024"]; // string[] | The code of the coupon applied to the customer. Use it to filter applied coupons by their code.

try {
    $result = $apiInstance->findAllAppliedCoupons($page, $per_page, $status, $external_customer_id, $coupon_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findAllAppliedCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **status** | **string**| The status of the coupon. Can be either &#x60;active&#x60; or &#x60;terminated&#x60;. | [optional] |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | [optional] |
| **coupon_code** | [**string[]**](../Model/string.md)| The code of the coupon applied to the customer. Use it to filter applied coupons by their code. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\AppliedCouponsPaginated**](../Model/AppliedCouponsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCoupons()`

```php
findAllCoupons($page, $per_page): \Lago\LagoPhpClient\Model\CouponsPaginated
```

List all coupons

This endpoint is used to list all existing coupons.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.

try {
    $result = $apiInstance->findAllCoupons($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findAllCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\CouponsPaginated**](../Model/CouponsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCoupon()`

```php
findCoupon($code): \Lago\LagoPhpClient\Model\Coupon
```

Retrieve a coupon

This endpoint is used to retrieve a specific coupon.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = startup_deal; // string | Unique code used to identify the coupon.

try {
    $result = $apiInstance->findCoupon($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the coupon. | |

### Return type

[**\Lago\LagoPhpClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCoupon()`

```php
updateCoupon($code, $coupon_update_input): \Lago\LagoPhpClient\Model\Coupon
```

Update a coupon

This endpoint is used to update a coupon that can be then attached to a customer to create a discount.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = startup_deal; // string | Unique code used to identify the coupon.
$coupon_update_input = new \Lago\LagoPhpClient\Model\CouponUpdateInput(); // \Lago\LagoPhpClient\Model\CouponUpdateInput | Coupon payload

try {
    $result = $apiInstance->updateCoupon($code, $coupon_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Unique code used to identify the coupon. | |
| **coupon_update_input** | [**\Lago\LagoPhpClient\Model\CouponUpdateInput**](../Model/CouponUpdateInput.md)| Coupon payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
