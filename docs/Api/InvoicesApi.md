# Lago\LagoPhpClient\InvoicesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createInvoice()**](InvoicesApi.md#createInvoice) | **POST** /invoices | Create a one-off invoice |
| [**downloadInvoice()**](InvoicesApi.md#downloadInvoice) | **POST** /invoices/{lago_id}/download | Download an invoice PDF |
| [**finalizeInvoice()**](InvoicesApi.md#finalizeInvoice) | **PUT** /invoices/{lago_id}/finalize | Finalize a draft invoice |
| [**findAllInvoices()**](InvoicesApi.md#findAllInvoices) | **GET** /invoices | List all invoices |
| [**findInvoice()**](InvoicesApi.md#findInvoice) | **GET** /invoices/{lago_id} | Retrieve an invoice |
| [**invoicePaymentUrl()**](InvoicesApi.md#invoicePaymentUrl) | **POST** /invoices/{lago_id}/payment_url | Generate a payment URL |
| [**invoicePreview()**](InvoicesApi.md#invoicePreview) | **POST** /invoices/preview | Create an invoice preview |
| [**loseDisputeInvoice()**](InvoicesApi.md#loseDisputeInvoice) | **POST** /invoices/{lago_id}/lose_dispute | Mark an invoice payment dispute as lost |
| [**refreshInvoice()**](InvoicesApi.md#refreshInvoice) | **PUT** /invoices/{lago_id}/refresh | Refresh a draft invoice |
| [**retryInvoice()**](InvoicesApi.md#retryInvoice) | **POST** /invoices/{lago_id}/retry | Retry generation of a failed invoice |
| [**retryPayment()**](InvoicesApi.md#retryPayment) | **POST** /invoices/{lago_id}/retry_payment | Retry an invoice payment |
| [**updateInvoice()**](InvoicesApi.md#updateInvoice) | **PUT** /invoices/{lago_id} | Update an invoice |
| [**voidInvoice()**](InvoicesApi.md#voidInvoice) | **POST** /invoices/{lago_id}/void | Void an invoice |


## `createInvoice()`

```php
createInvoice($invoice_one_off_create_input): \Lago\LagoPhpClient\Model\Invoice
```

Create a one-off invoice

This endpoint is used for issuing a one-off invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_one_off_create_input = new \Lago\LagoPhpClient\Model\InvoiceOneOffCreateInput(); // \Lago\LagoPhpClient\Model\InvoiceOneOffCreateInput | Invoice payload

try {
    $result = $apiInstance->createInvoice($invoice_one_off_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->createInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_one_off_create_input** | [**\Lago\LagoPhpClient\Model\InvoiceOneOffCreateInput**](../Model/InvoiceOneOffCreateInput.md)| Invoice payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

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
downloadInvoice($lago_id): \Lago\LagoPhpClient\Model\Invoice
```

Download an invoice PDF

This endpoint is used for downloading a specific invoice PDF document.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->downloadInvoice($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->downloadInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

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
finalizeInvoice($lago_id): \Lago\LagoPhpClient\Model\Invoice
```

Finalize a draft invoice

This endpoint is used for finalizing a draft invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->finalizeInvoice($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->finalizeInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

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
findAllInvoices($page, $per_page, $external_customer_id, $amount_from, $amount_to, $issuing_date_from, $issuing_date_to, $status, $payment_status, $payment_overdue, $search_term, $currency, $payment_dispute_lost, $invoice_type, $self_billed, $billing_entity_codes, $metadata_key): \Lago\LagoPhpClient\Model\InvoicesPaginated
```

List all invoices

This endpoint is used for retrieving all invoices.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.
$amount_from = 9000; // int | Filter invoices of at least a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types.
$amount_to = 100000; // int | Filter invoices up to a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types.
$issuing_date_from = 2022-07-08; // \DateTime | Filter invoices starting from a specific date.
$issuing_date_to = 2022-08-09; // \DateTime | Filter invoices up to a specific date.
$status = 'status_example'; // string | Filter invoices by status. Possible values are `draft` or `finalized`.
$payment_status = 'payment_status_example'; // string | Filter invoices by payment status. Possible values are `pending`, `failed` or `succeeded`.
$payment_overdue = true; // bool | Filter invoices by payment_overdue. Possible values are `true` or `false`.
$search_term = Jane; // string | Search invoices by id, number, customer name, customer external_id or customer email.
$currency = EUR; // string | Filter invoices by currency. Possible values ISO 4217 currency codes.
$payment_dispute_lost = true; // bool | Filter invoices with a payment dispute lost. Possible values are `true` or `false`.
$invoice_type = 'invoice_type_example'; // string | Filter invoices by invoice type. Possible values are `subscription`, `add_on`, `credit`, `one_off`, `advance_charges` or `progressive_billing`.
$self_billed = true; // bool | Filter invoices by self billed. Possible values are `true` or `false`.
$billing_entity_codes = ["acme_corp","foo_bar"]; // string[] | Filter invoices by billing entity codes. Possible values are the billing entity codes you have created.
$metadata_key = someValue; // string | Filter invoices by metadata. Replace `key` with the actual metadata key you want to match, and provide the corresponding value. Providing empty value will search for invoice without given metadata key. For example, `metadata[color]=blue`.

try {
    $result = $apiInstance->findAllInvoices($page, $per_page, $external_customer_id, $amount_from, $amount_to, $issuing_date_from, $issuing_date_to, $status, $payment_status, $payment_overdue, $search_term, $currency, $payment_dispute_lost, $invoice_type, $self_billed, $billing_entity_codes, $metadata_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->findAllInvoices: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |
| **amount_from** | **int**| Filter invoices of at least a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types. | [optional] |
| **amount_to** | **int**| Filter invoices up to a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types. | [optional] |
| **issuing_date_from** | **\DateTime**| Filter invoices starting from a specific date. | [optional] |
| **issuing_date_to** | **\DateTime**| Filter invoices up to a specific date. | [optional] |
| **status** | **string**| Filter invoices by status. Possible values are &#x60;draft&#x60; or &#x60;finalized&#x60;. | [optional] |
| **payment_status** | **string**| Filter invoices by payment status. Possible values are &#x60;pending&#x60;, &#x60;failed&#x60; or &#x60;succeeded&#x60;. | [optional] |
| **payment_overdue** | **bool**| Filter invoices by payment_overdue. Possible values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional] |
| **search_term** | **string**| Search invoices by id, number, customer name, customer external_id or customer email. | [optional] |
| **currency** | **string**| Filter invoices by currency. Possible values ISO 4217 currency codes. | [optional] |
| **payment_dispute_lost** | **bool**| Filter invoices with a payment dispute lost. Possible values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional] |
| **invoice_type** | **string**| Filter invoices by invoice type. Possible values are &#x60;subscription&#x60;, &#x60;add_on&#x60;, &#x60;credit&#x60;, &#x60;one_off&#x60;, &#x60;advance_charges&#x60; or &#x60;progressive_billing&#x60;. | [optional] |
| **self_billed** | **bool**| Filter invoices by self billed. Possible values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional] |
| **billing_entity_codes** | [**string[]**](../Model/string.md)| Filter invoices by billing entity codes. Possible values are the billing entity codes you have created. | [optional] |
| **metadata_key** | **string**| Filter invoices by metadata. Replace &#x60;key&#x60; with the actual metadata key you want to match, and provide the corresponding value. Providing empty value will search for invoice without given metadata key. For example, &#x60;metadata[color]&#x3D;blue&#x60;. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\InvoicesPaginated**](../Model/InvoicesPaginated.md)

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
findInvoice($lago_id): \Lago\LagoPhpClient\Model\Invoice
```

Retrieve an invoice

This endpoint is used for retrieving a specific invoice that has been issued.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->findInvoice($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->findInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentUrl()`

```php
invoicePaymentUrl($lago_id): \Lago\LagoPhpClient\Model\InvoicePaymentUrl
```

Generate a payment URL

This endpoint generates a checkout link for a specific invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->invoicePaymentUrl($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicePaymentUrl: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\InvoicePaymentUrl**](../Model/InvoicePaymentUrl.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePreview()`

```php
invoicePreview($invoice_preview_input): \Lago\LagoPhpClient\Model\Invoice
```

Create an invoice preview

This endpoint is used for generating invoice preview.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$invoice_preview_input = new \Lago\LagoPhpClient\Model\InvoicePreviewInput(); // \Lago\LagoPhpClient\Model\InvoicePreviewInput | Invoice preview payload

try {
    $result = $apiInstance->invoicePreview($invoice_preview_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->invoicePreview: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **invoice_preview_input** | [**\Lago\LagoPhpClient\Model\InvoicePreviewInput**](../Model/InvoicePreviewInput.md)| Invoice preview payload | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `loseDisputeInvoice()`

```php
loseDisputeInvoice($lago_id): \Lago\LagoPhpClient\Model\Invoice
```

Mark an invoice payment dispute as lost

This endpoint is used for setting invoice's payment dispute as lost.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->loseDisputeInvoice($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->loseDisputeInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

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
refreshInvoice($lago_id): \Lago\LagoPhpClient\Model\Invoice
```

Refresh a draft invoice

This endpoint is used for refreshing a draft invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->refreshInvoice($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->refreshInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `retryInvoice()`

```php
retryInvoice($lago_id): \Lago\LagoPhpClient\Model\Invoice
```

Retry generation of a failed invoice

This endpoint is used for retrying to generate a failed invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $result = $apiInstance->retryInvoice($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->retryInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

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
retryPayment($lago_id)
```

Retry an invoice payment

This endpoint resends an invoice for collection and retry a payment.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.

try {
    $apiInstance->retryPayment($lago_id);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->retryPayment: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |

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
updateInvoice($lago_id, $invoice_update_input): \Lago\LagoPhpClient\Model\Invoice
```

Update an invoice

This endpoint is used for updating an existing invoice.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.
$invoice_update_input = new \Lago\LagoPhpClient\Model\InvoiceUpdateInput(); // \Lago\LagoPhpClient\Model\InvoiceUpdateInput | Update an existing invoice

try {
    $result = $apiInstance->updateInvoice($lago_id, $invoice_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->updateInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |
| **invoice_update_input** | [**\Lago\LagoPhpClient\Model\InvoiceUpdateInput**](../Model/InvoiceUpdateInput.md)| Update an existing invoice | |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidInvoice()`

```php
voidInvoice($lago_id, $invoice_void_input): \Lago\LagoPhpClient\Model\Invoice
```

Void an invoice

This endpoint is used for voiding an invoice. • When no body parameters are provided, the invoice can be voided only if it is in a `finalized` status and its payment status is NOT `succeeded`. • When `generate_credit_note` is provided (optionally with `refund_amount` and/or `credit_amount`), this validation is bypassed: the invoice is forcibly voided and a credit note is generated. If the specified refund/credit amounts do not cover the full invoice total, the remainder is issued on a second credit note that is created and immediately voided.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\InvoicesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice's record within the Lago system.
$invoice_void_input = new \Lago\LagoPhpClient\Model\InvoiceVoidInput(); // \Lago\LagoPhpClient\Model\InvoiceVoidInput | Void invoice payload

try {
    $result = $apiInstance->voidInvoice($lago_id, $invoice_void_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling InvoicesApi->voidInvoice: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| Unique identifier assigned to the invoice within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the invoice&#39;s record within the Lago system. | |
| **invoice_void_input** | [**\Lago\LagoPhpClient\Model\InvoiceVoidInput**](../Model/InvoiceVoidInput.md)| Void invoice payload | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\Invoice**](../Model/Invoice.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
