# OpenAPI\Client\InvoicesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**downloadInvoice()**](InvoicesApi.md#downloadInvoice) | **POST** /invoices/{id}/download | Download an existing invoice |
| [**finalizeInvoice()**](InvoicesApi.md#finalizeInvoice) | **PUT** /invoices/{id}/finalize | Finalize a draft invoice |
| [**findAllInvoices()**](InvoicesApi.md#findAllInvoices) | **GET** /invoices/ | Find all invoices |
| [**findInvoice()**](InvoicesApi.md#findInvoice) | **GET** /invoices/{id} | Find invoice by ID |
| [**refreshInvoice()**](InvoicesApi.md#refreshInvoice) | **PUT** /invoices/{id}/refresh | Refresh a draft invoice |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /invoices/{id} | Update an existing invoice status |


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
$id = 183da83c-c007-4fbb-afcd-b00c07c41ffe; // string | ID of the existing Lago Invoice

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
$id = 183da83c-c007-4fbb-afcd-b00c07c41ffe; // string | ID of the draft Lago Invoice

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
findAllInvoices($page, $per_page, $external_customer_id, $issuing_date_from, $issuing_date_to, $status): \OpenAPI\Client\Model\Invoices
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
$issuing_date_from = 2022-07-08; // string | Date from
$issuing_date_to = 2022-08-09; // string | Date to
$status = draft; // string | Status (draft or finalized)

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
| **issuing_date_from** | **string**| Date from | [optional] |
| **issuing_date_to** | **string**| Date to | [optional] |
| **status** | **string**| Status (draft or finalized) | [optional] |

### Return type

[**\OpenAPI\Client\Model\Invoices**](../Model/Invoices.md)

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
$id = 183da83c-c007-4fbb-afcd-b00c07c41ffe; // string | ID of the existing Lago Invoice

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
$id = 183da83c-c007-4fbb-afcd-b00c07c41ffe; // string | ID of the existing Lago Invoice

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
$id = 183da83c-c007-4fbb-afcd-b00c07c41ffe; // string | ID of the existing Lago Invoice
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
