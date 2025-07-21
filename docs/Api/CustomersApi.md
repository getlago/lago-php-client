# Lago\LagoPhpClient\CustomersApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /customers | Create a customer |
| [**deleteAppliedCoupon()**](CustomersApi.md#deleteAppliedCoupon) | **DELETE** /customers/{external_customer_id}/applied_coupons/{applied_coupon_id} | Delete an applied coupon |
| [**destroyCustomer()**](CustomersApi.md#destroyCustomer) | **DELETE** /customers/{external_customer_id} | Delete a customer |
| [**findAllCustomerPastUsage()**](CustomersApi.md#findAllCustomerPastUsage) | **GET** /customers/{external_customer_id}/past_usage | Retrieve customer past usage |
| [**findAllCustomers()**](CustomersApi.md#findAllCustomers) | **GET** /customers | List all customers |
| [**findCustomer()**](CustomersApi.md#findCustomer) | **GET** /customers/{external_customer_id} | Retrieve a customer |
| [**findCustomerCurrentUsage()**](CustomersApi.md#findCustomerCurrentUsage) | **GET** /customers/{external_customer_id}/current_usage | Retrieve customer current usage |
| [**generateCustomerCheckoutURL()**](CustomersApi.md#generateCustomerCheckoutURL) | **POST** /customers/{external_customer_id}/checkout_url | Generate a Customer Payment Provider Checkout URL |
| [**getCustomerPortalUrl()**](CustomersApi.md#getCustomerPortalUrl) | **GET** /customers/{external_customer_id}/portal_url | Get a customer portal URL |


## `createCustomer()`

```php
createCustomer($customer_create_input): \Lago\LagoPhpClient\Model\Customer
```

Create a customer

This endpoint creates a new customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_create_input = new \Lago\LagoPhpClient\Model\CustomerCreateInput(); // \Lago\LagoPhpClient\Model\CustomerCreateInput | Customer payload

try {
    $result = $apiInstance->createCustomer($customer_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_create_input** | [**\Lago\LagoPhpClient\Model\CustomerCreateInput**](../Model/CustomerCreateInput.md)| Customer payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Customer**](../Model/Customer.md)

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


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
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
    echo 'Exception when calling CustomersApi->deleteAppliedCoupon: ', $e->getMessage(), PHP_EOL;
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

## `destroyCustomer()`

```php
destroyCustomer($external_customer_id): \Lago\LagoPhpClient\Model\Customer
```

Delete a customer

This endpoint deletes an existing customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)

try {
    $result = $apiInstance->destroyCustomer($external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->destroyCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | |

### Return type

[**\Lago\LagoPhpClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCustomerPastUsage()`

```php
findAllCustomerPastUsage($external_customer_id, $external_subscription_id, $page, $per_page, $billable_metric_code, $periods_count): \Lago\LagoPhpClient\Model\CustomerPastUsage
```

Retrieve customer past usage

This endpoint enables the retrieval of the usage-based billing data for a customer within past periods.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application).
$external_subscription_id = sub_1234567890; // string | The unique identifier of the subscription within your application.
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$billable_metric_code = cpu; // string | Billable metric code filter to apply to the charge usage
$periods_count = 5; // int | Number of past billing period to returns in the result

try {
    $result = $apiInstance->findAllCustomerPastUsage($external_customer_id, $external_subscription_id, $page, $per_page, $billable_metric_code, $periods_count);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findAllCustomerPastUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). | |
| **external_subscription_id** | **string**| The unique identifier of the subscription within your application. | |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **billable_metric_code** | **string**| Billable metric code filter to apply to the charge usage | [optional] |
| **periods_count** | **int**| Number of past billing period to returns in the result | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\CustomerPastUsage**](../Model/CustomerPastUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCustomers()`

```php
findAllCustomers($page, $per_page, $account_type, $billing_entity_codes): \Lago\LagoPhpClient\Model\CustomersPaginated
```

List all customers

This endpoint retrieves all existing customers.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$account_type = ["customer","partner"]; // string[] | Filter customers by account type.
$billing_entity_codes = [billing_entity_code_1, billing_entity_code_2]; // string[] | Filter customers by billing entity codes.

try {
    $result = $apiInstance->findAllCustomers($page, $per_page, $account_type, $billing_entity_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findAllCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **account_type** | [**string[]**](../Model/string.md)| Filter customers by account type. | [optional] |
| **billing_entity_codes** | [**string[]**](../Model/string.md)| Filter customers by billing entity codes. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\CustomersPaginated**](../Model/CustomersPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCustomer()`

```php
findCustomer($external_customer_id): \Lago\LagoPhpClient\Model\Customer
```

Retrieve a customer

This endpoint retrieves an existing customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application)

try {
    $result = $apiInstance->findCustomer($external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | |

### Return type

[**\Lago\LagoPhpClient\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCustomerCurrentUsage()`

```php
findCustomerCurrentUsage($external_customer_id, $external_subscription_id, $apply_taxes): \Lago\LagoPhpClient\Model\CustomerUsage
```

Retrieve customer current usage

This endpoint enables the retrieval of the usage-based billing data for a customer within the current period.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application).
$external_subscription_id = sub_1234567890; // string | The unique identifier of the subscription within your application.
$apply_taxes = true; // bool | Optional flag to determine if taxes should be applied. Defaults to `true` if not provided or if null.

try {
    $result = $apiInstance->findCustomerCurrentUsage($external_customer_id, $external_subscription_id, $apply_taxes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomerCurrentUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). | |
| **external_subscription_id** | **string**| The unique identifier of the subscription within your application. | |
| **apply_taxes** | **bool**| Optional flag to determine if taxes should be applied. Defaults to &#x60;true&#x60; if not provided or if null. | [optional] [default to true] |

### Return type

[**\Lago\LagoPhpClient\Model\CustomerUsage**](../Model/CustomerUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `generateCustomerCheckoutURL()`

```php
generateCustomerCheckoutURL($external_customer_id): \Lago\LagoPhpClient\Model\CustomerCheckoutUrl
```

Generate a Customer Payment Provider Checkout URL

This endpoint regenerates the Payment Provider Checkout URL of a Customer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application).

try {
    $result = $apiInstance->generateCustomerCheckoutURL($external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->generateCustomerCheckoutURL: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). | |

### Return type

[**\Lago\LagoPhpClient\Model\CustomerCheckoutUrl**](../Model/CustomerCheckoutUrl.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getCustomerPortalUrl()`

```php
getCustomerPortalUrl($external_customer_id): \Lago\LagoPhpClient\Model\GetCustomerPortalUrl200Response
```

Get a customer portal URL

Retrieves an embeddable link for displaying a customer portal.  This endpoint allows you to fetch the URL that can be embedded to provide customers access to a dedicated portal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | External ID of the existing customer

try {
    $result = $apiInstance->getCustomerPortalUrl($external_customer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->getCustomerPortalUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| External ID of the existing customer | |

### Return type

[**\Lago\LagoPhpClient\Model\GetCustomerPortalUrl200Response**](../Model/GetCustomerPortalUrl200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
