# OpenAPI\Client\PlansApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createPlan()**](PlansApi.md#createPlan) | **POST** /plans | Create a new plan |
| [**destroyPlan()**](PlansApi.md#destroyPlan) | **DELETE** /plans/{code} | Delete a plan |
| [**findAllPlans()**](PlansApi.md#findAllPlans) | **GET** /plans | Find plans |
| [**findPlan()**](PlansApi.md#findPlan) | **GET** /plans/{code} | Find plan by code |
| [**updatePlan()**](PlansApi.md#updatePlan) | **PUT** /plans/{code} | Update an existing plan |


## `createPlan()`

```php
createPlan($plan_input): \OpenAPI\Client\Model\Plan
```

Create a new plan

Create a new plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$plan_input = new \OpenAPI\Client\Model\PlanInput(); // \OpenAPI\Client\Model\PlanInput | Plan payload

try {
    $result = $apiInstance->createPlan($plan_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->createPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **plan_input** | [**\OpenAPI\Client\Model\PlanInput**](../Model/PlanInput.md)| Plan payload | |

### Return type

[**\OpenAPI\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `destroyPlan()`

```php
destroyPlan($code): \OpenAPI\Client\Model\Plan
```

Delete a plan

Delete a plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing plan

try {
    $result = $apiInstance->destroyPlan($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->destroyPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing plan | |

### Return type

[**\OpenAPI\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllPlans()`

```php
findAllPlans($page, $per_page): \OpenAPI\Client\Model\PlansPaginated
```

Find plans

Find all plans in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page

try {
    $result = $apiInstance->findAllPlans($page, $per_page);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->findAllPlans: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |

### Return type

[**\OpenAPI\Client\Model\PlansPaginated**](../Model/PlansPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findPlan()`

```php
findPlan($code): \OpenAPI\Client\Model\Plan
```

Find plan by code

Return a single plan

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing plan

try {
    $result = $apiInstance->findPlan($code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->findPlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing plan | |

### Return type

[**\OpenAPI\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updatePlan()`

```php
updatePlan($code, $plan_input): \OpenAPI\Client\Model\Plan
```

Update an existing plan

Update an existing plan by code

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\PlansApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$code = example_code; // string | Code of the existing plan
$plan_input = new \OpenAPI\Client\Model\PlanInput(); // \OpenAPI\Client\Model\PlanInput | Update an existing plan

try {
    $result = $apiInstance->updatePlan($code, $plan_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PlansApi->updatePlan: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **code** | **string**| Code of the existing plan | |
| **plan_input** | [**\OpenAPI\Client\Model\PlanInput**](../Model/PlanInput.md)| Update an existing plan | |

### Return type

[**\OpenAPI\Client\Model\Plan**](../Model/Plan.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
