# OpenAPI\Client\InvoicesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoicesApi.md#createInvoice) | **POST** /invoices | Create a new invoice |
| [**downloadInvoice()**](InvoicesApi.md#downloadInvoice) | **POST** /invoices/{id}/download | Download an existing invoice |
| [**finalizeInvoice()**](InvoicesApi.md#finalizeInvoice) | **PUT** /invoices/{id}/finalize | Finalize a draft invoice |
| [**findAllInvoices()**](InvoicesApi.md#findAllInvoices) | **GET** /invoices | Find all invoices |
| [**findInvoice()**](InvoicesApi.md#findInvoice) | **GET** /invoices/{id} | Find invoice by ID |
| [**refreshInvoice()**](InvoicesApi.md#refreshInvoice) | **PUT** /invoices/{id}/refresh | Refresh a draft invoice |
| [**retryPayment()**](InvoicesApi.md#retryPayment) | **POST** /invoices/{id}/retry_payment | Retry invoice payment |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /invoices/{id} | Update an existing invoice status |


## `createInvoice()`

```php
createInvoice($invoice_one_off_input): \OpenAPI\Client\Model\Invoice
```

Create a new invoice

Create a new one off Invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_one_off_input = new \OpenAPI\Client\Model\InvoiceOneOffInput(); // \OpenAPI\Client\Model\InvoiceOneOffInput | Invoice payload

try {
    $result = $apiInstance->createInvoice($invoice_one_off_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_one_off_input** | [**\OpenAPI\Client\Model\InvoiceOneOffInput**](../Model/InvoiceOneOffInput.md)| Invoice payload | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadInvoice()`

```php
downloadInvoice($id): \OpenAPI\Client\Model\Invoice
```

Download an existing invoice

Download an existing invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $result = $apiInstance->downloadInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `finalizeInvoice()`

```php
finalizeInvoice($id): \OpenAPI\Client\Model\Invoice
```

Finalize a draft invoice

Finalize a draft invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the draft Lago Invoice

try {
    $result = $apiInstance->finalizeInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->finalizeInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the draft Lago Invoice | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllInvoices()`

```php
findAllInvoices($page, $per_page, $external_customer_id, $issuing_date_from, $issuing_date_to, $status): \OpenAPI\Client\Model\InvoicesPaginated
```

Find all invoices

Find all invoices in certain organisation

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 2; // int | Number of page
$per_page = 20; // int | Number of records per page
$external_customer_id = 12345; // string | External customer ID
$issuing_date_from = Fri Jul 08 00:00:00 UTC 2022; // \DateTime | Date from
$issuing_date_to = Tue Aug 09 00:00:00 UTC 2022; // \DateTime | Date to
$status = 'status_example'; // string | Status

try {
    $result = $apiInstance->findAllInvoices($page, $per_page, $external_customer_id, $issuing_date_from, $issuing_date_to, $status);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->findAllInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Number of page | [optional] |
| **per_page** | **int**| Number of records per page | [optional] |
| **external_customer_id** | **string**| External customer ID | [optional] |
| **issuing_date_from** | **\DateTime**| Date from | [optional] |
| **issuing_date_to** | **\DateTime**| Date to | [optional] |
| **status** | **string**| Status | [optional] |

### Return type

[**\OpenAPI\Client\Model\InvoicesPaginated**](../Model/InvoicesPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findInvoice()`

```php
findInvoice($id): \OpenAPI\Client\Model\Invoice
```

Find invoice by ID

Return a single invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $result = $apiInstance->findInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->findInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `refreshInvoice()`

```php
refreshInvoice($id): \OpenAPI\Client\Model\Invoice
```

Refresh a draft invoice

Refresh a draft invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $result = $apiInstance->refreshInvoice($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->refreshInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryPayment()`

```php
retryPayment($id)
```

Retry invoice payment

Retry invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice

try {
    $apiInstance->retryPayment($id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->retryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateInvoice()`

```php
updateInvoice($id, $invoice_input): \OpenAPI\Client\Model\Invoice
```

Update an existing invoice status

Update an existing invoice

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | ID of the existing Lago Invoice
$invoice_input = new \OpenAPI\Client\Model\InvoiceInput(); // \OpenAPI\Client\Model\InvoiceInput | Update an existing invoice

try {
    $result = $apiInstance->updateInvoice($id, $invoice_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **id** | **string**| ID of the existing Lago Invoice | |
| **invoice_input** | [**\OpenAPI\Client\Model\InvoiceInput**](../Model/InvoiceInput.md)| Update an existing invoice | |

### Return type

[**\OpenAPI\Client\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
