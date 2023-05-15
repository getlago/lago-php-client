# OpenAPI\Client\CouponsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**applyCoupon()**](CouponsApi.md#applyCoupon) | **POST** /applied_coupons | Apply a coupon to a customer |
| [**createCoupon()**](CouponsApi.md#createCoupon) | **POST** /coupons | Create a new coupon |
| [**destroyCoupon()**](CouponsApi.md#destroyCoupon) | **DELETE** /coupons/{code} | Delete a coupon |
| [**findAllAppliedCoupons()**](CouponsApi.md#findAllAppliedCoupons) | **GET** /applied_coupons | Find Applied Coupons |
| [**findAllCoupons()**](CouponsApi.md#findAllCoupons) | **GET** /coupons | Find Coupons |
| [**findCoupon()**](CouponsApi.md#findCoupon) | **GET** /coupons/{code} | Find coupon by code |
| [**updateCoupon()**](CouponsApi.md#updateCoupon) | **PUT** /coupons/{code} | Update an existing coupon |


## `applyCoupon()`

```php
applyCoupon($applied_coupon_input): \OpenAPI\Client\Model\AppliedCoupon
```

Apply a coupon to a customer

Apply a coupon to a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applied_coupon_input = new \OpenAPI\Client\Model\AppliedCouponInput(); // \OpenAPI\Client\Model\AppliedCouponInput | Apply coupon payload

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
| **applied_coupon_input** | [**\OpenAPI\Client\Model\AppliedCouponInput**](../Model/AppliedCouponInput.md)| Apply coupon payload | |

### Return type

[**\OpenAPI\Client\Model\AppliedCoupon**](../Model/AppliedCoupon.md)

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
createCoupon($coupon_input): \OpenAPI\Client\Model\Coupon
```

Create a new coupon

Create a new coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$coupon_input = new \OpenAPI\Client\Model\CouponInput(); // \OpenAPI\Client\Model\CouponInput | Coupon payload

try {
    $result = $apiInstance->createCoupon($coupon_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->createCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **coupon_input** | [**\OpenAPI\Client\Model\CouponInput**](../Model/CouponInput.md)| Coupon payload | |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyCoupon()`

```php
destroyCoupon($code): \OpenAPI\Client\Model\Coupon
```

Delete a coupon

Delete a coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing coupon

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
| **code** | **string**| Code of the existing coupon | |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

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
findAllAppliedCoupons($page, $per_page, $status, $external_customer_id): \OpenAPI\Client\Model\AppliedCouponsPaginated
```

Find Applied Coupons

Find all applied coupons

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page
$status = 'status_example'; // string | Applied coupon status
$external_customer_id = 12345; // string | External customer ID

try {
    $result = $apiInstance->findAllAppliedCoupons($page, $per_page, $status, $external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->findAllAppliedCoupons: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |
| **status** | **string**| Applied coupon status | [optional] |
| **external_customer_id** | **string**| External customer ID | [optional] |

### Return type

[**\OpenAPI\Client\Model\AppliedCouponsPaginated**](../Model/AppliedCouponsPaginated.md)

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
findAllCoupons($page, $per_page): \OpenAPI\Client\Model\CouponsPaginated
```

Find Coupons

Find all coupons in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

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
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\CouponsPaginated**](../Model/CouponsPaginated.md)

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
findCoupon($code): \OpenAPI\Client\Model\Coupon
```

Find coupon by code

Return a single coupon

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing coupon

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
| **code** | **string**| Code of the existing coupon | |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

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
updateCoupon($code, $coupon_input): \OpenAPI\Client\Model\Coupon
```

Update an existing coupon

Update an existing coupon by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CouponsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing coupon
$coupon_input = new \OpenAPI\Client\Model\CouponInput(); // \OpenAPI\Client\Model\CouponInput | Update an existing coupon

try {
    $result = $apiInstance->updateCoupon($code, $coupon_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CouponsApi->updateCoupon: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing coupon | |
| **coupon_input** | [**\OpenAPI\Client\Model\CouponInput**](../Model/CouponInput.md)| Update an existing coupon | |

### Return type

[**\OpenAPI\Client\Model\Coupon**](../Model/Coupon.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
