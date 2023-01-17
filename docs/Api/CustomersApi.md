# OpenAPI\Client\CustomersApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCustomer()**](CustomersApi.md#createCustomer) | **POST** /customers | Create a customer |
| [**findAllCustomers()**](CustomersApi.md#findAllCustomers) | **GET** /customers/ | Find customers |
| [**findCustomer()**](CustomersApi.md#findCustomer) | **GET** /customers/{external_id} | Find customer by external ID |
| [**findCustomerCurrentUsage()**](CustomersApi.md#findCustomerCurrentUsage) | **GET** /customers/{customer_external_id}/current_usage | Find customer current usage |


## `createCustomer()`

```php
createCustomer($customer_input): \OpenAPI\Client\Model\Customer
```

Create a customer

Create a new customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_input = new \OpenAPI\Client\Model\CustomerInput(); // \OpenAPI\Client\Model\CustomerInput | Customer payload

try {
    $result = $apiInstance->createCustomer($customer_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->createCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_input** | [**\OpenAPI\Client\Model\CustomerInput**](../Model/CustomerInput.md)| Customer payload | |

### Return type

[**\OpenAPI\Client\Model\Customer**](../Model/Customer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCustomers()`

```php
findAllCustomers($page, $per_page): \OpenAPI\Client\Model\Customers
```

Find customers

Find all customers in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

try {
    $result = $apiInstance->findAllCustomers($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findAllCustomers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\Customers**](../Model/Customers.md)

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
findCustomer($external_id): \OpenAPI\Client\Model\Customer
```

Find customer by external ID

Return a single customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$external_id = 12345; // string | External ID of the existing customer

try {
    $result = $apiInstance->findCustomer($external_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomer: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_id** | **string**| External ID of the existing customer | |

### Return type

[**\OpenAPI\Client\Model\Customer**](../Model/Customer.md)

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
findCustomerCurrentUsage($customer_external_id, $external_subscription_id): \OpenAPI\Client\Model\CustomerUsage
```

Find customer current usage

Return a customer current usage

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\CustomersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$customer_external_id = 12345; // string | External ID of the existing customer
$external_subscription_id = 54321; // string | External subscription ID

try {
    $result = $apiInstance->findCustomerCurrentUsage($customer_external_id, $external_subscription_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findCustomerCurrentUsage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **customer_external_id** | **string**| External ID of the existing customer | |
| **external_subscription_id** | **string**| External subscription ID | |

### Return type

[**\OpenAPI\Client\Model\CustomerUsage**](../Model/CustomerUsage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
