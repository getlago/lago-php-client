# Lago\LagoPhpClient\CreditNotesApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**createCreditNote()**](CreditNotesApi.md#createCreditNote) | **POST** /credit_notes | Create a credit note |
| [**downloadCreditNote()**](CreditNotesApi.md#downloadCreditNote) | **POST** /credit_notes/{lago_id}/download | Download a credit note PDF |
| [**estimateCreditNote()**](CreditNotesApi.md#estimateCreditNote) | **POST** /credit_notes/estimate | Estimate amounts for a new credit note |
| [**findAllCreditNotes()**](CreditNotesApi.md#findAllCreditNotes) | **GET** /credit_notes | List all credit notes |
| [**findCreditNote()**](CreditNotesApi.md#findCreditNote) | **GET** /credit_notes/{lago_id} | Retrieve a credit note |
| [**updateCreditNote()**](CreditNotesApi.md#updateCreditNote) | **PUT** /credit_notes/{lago_id} | Update a credit note |
| [**voidCreditNote()**](CreditNotesApi.md#voidCreditNote) | **PUT** /credit_notes/{lago_id}/void | Void available credit |


## `createCreditNote()`

```php
createCreditNote($credit_note_create_input): \Lago\LagoPhpClient\Model\CreditNote
```

Create a credit note

This endpoint creates a new credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_create_input = new \Lago\LagoPhpClient\Model\CreditNoteCreateInput(); // \Lago\LagoPhpClient\Model\CreditNoteCreateInput | Credit note payload

try {
    $result = $apiInstance->createCreditNote($credit_note_create_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->createCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_create_input** | [**\Lago\LagoPhpClient\Model\CreditNoteCreateInput**](../Model/CreditNoteCreateInput.md)| Credit note payload | |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadCreditNote()`

```php
downloadCreditNote($lago_id): \Lago\LagoPhpClient\Model\CreditNote
```

Download a credit note PDF

This endpoint downloads the PDF of an existing credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | The credit note unique identifier, created by Lago.

try {
    $result = $apiInstance->downloadCreditNote($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->downloadCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `estimateCreditNote()`

```php
estimateCreditNote($credit_note_estimate_input): \Lago\LagoPhpClient\Model\CreditNoteEstimated
```

Estimate amounts for a new credit note

This endpoint allows you to retrieve amounts for a new credit note creation.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$credit_note_estimate_input = new \Lago\LagoPhpClient\Model\CreditNoteEstimateInput(); // \Lago\LagoPhpClient\Model\CreditNoteEstimateInput | Credit note estimate payload

try {
    $result = $apiInstance->estimateCreditNote($credit_note_estimate_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->estimateCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **credit_note_estimate_input** | [**\Lago\LagoPhpClient\Model\CreditNoteEstimateInput**](../Model/CreditNoteEstimateInput.md)| Credit note estimate payload | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNoteEstimated**](../Model/CreditNoteEstimated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllCreditNotes()`

```php
findAllCreditNotes($page, $per_page, $external_customer_id, $issuing_date_from, $issuing_date_to, $search_term, $currency, $reason, $credit_status, $refund_status, $invoice_number, $amount_from, $amount_to, $self_billed, $billing_entity_codes): \Lago\LagoPhpClient\Model\CreditNotesPaginated
```

List all credit notes

This endpoint list all existing credit notes.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | Unique identifier assigned to the customer in your application.
$issuing_date_from = 2022-07-08; // \DateTime | Filter credit notes starting from a specific date.
$issuing_date_to = 2022-08-09; // \DateTime | Filter credit notes up to a specific date.
$search_term = Jane; // string | Search credit notes by id, number, customer name, customer external_id or customer email.
$currency = EUR; // string | Filter credit notes by currency. Possible values ISO 4217 currency codes.
$reason = 'reason_example'; // string | Filter credit notes by reasons. Possible values are `product_unsatisfactory`, `order_change`, `order_cancellation`, `fraudulent_charge`, `duplicated_charge` or `other`.
$credit_status = 'credit_status_example'; // string | Filter credit notes by credit status. Possible values are `available`, `consumed`  or `voided`.
$refund_status = 'refund_status_example'; // string | Filter credit notes by refund status. Possible values are `pending`, `succeeded`  or `failed`.
$invoice_number = INV-001-002; // string | Filter credit notes by their related invoice number.
$amount_from = 9000; // int | Filter credit notes of at least a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types.
$amount_to = 100000; // int | Filter credit notes up to a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types.
$self_billed = true; // bool | Filter credit notes belonging to a self billed invoice. Possible values are `true` or `false`.
$billing_entity_codes = ["billing_entity_code_1","billing_entity_code_2"]; // string[] | Filter credit notes by billing entity codes.

try {
    $result = $apiInstance->findAllCreditNotes($page, $per_page, $external_customer_id, $issuing_date_from, $issuing_date_to, $search_term, $currency, $reason, $credit_status, $refund_status, $invoice_number, $amount_from, $amount_to, $self_billed, $billing_entity_codes);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->findAllCreditNotes: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **external_customer_id** | **string**| Unique identifier assigned to the customer in your application. | [optional] |
| **issuing_date_from** | **\DateTime**| Filter credit notes starting from a specific date. | [optional] |
| **issuing_date_to** | **\DateTime**| Filter credit notes up to a specific date. | [optional] |
| **search_term** | **string**| Search credit notes by id, number, customer name, customer external_id or customer email. | [optional] |
| **currency** | **string**| Filter credit notes by currency. Possible values ISO 4217 currency codes. | [optional] |
| **reason** | **string**| Filter credit notes by reasons. Possible values are &#x60;product_unsatisfactory&#x60;, &#x60;order_change&#x60;, &#x60;order_cancellation&#x60;, &#x60;fraudulent_charge&#x60;, &#x60;duplicated_charge&#x60; or &#x60;other&#x60;. | [optional] |
| **credit_status** | **string**| Filter credit notes by credit status. Possible values are &#x60;available&#x60;, &#x60;consumed&#x60;  or &#x60;voided&#x60;. | [optional] |
| **refund_status** | **string**| Filter credit notes by refund status. Possible values are &#x60;pending&#x60;, &#x60;succeeded&#x60;  or &#x60;failed&#x60;. | [optional] |
| **invoice_number** | **string**| Filter credit notes by their related invoice number. | [optional] |
| **amount_from** | **int**| Filter credit notes of at least a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types. | [optional] |
| **amount_to** | **int**| Filter credit notes up to a specific amount. This parameter must be defined in cents to ensure consistent handling for all currency types. | [optional] |
| **self_billed** | **bool**| Filter credit notes belonging to a self billed invoice. Possible values are &#x60;true&#x60; or &#x60;false&#x60;. | [optional] |
| **billing_entity_codes** | [**string[]**](../Model/string.md)| Filter credit notes by billing entity codes. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNotesPaginated**](../Model/CreditNotesPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findCreditNote()`

```php
findCreditNote($lago_id): \Lago\LagoPhpClient\Model\CreditNote
```

Retrieve a credit note

This endpoint retrieves an existing credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 12345; // string | The credit note unique identifier, created by Lago.

try {
    $result = $apiInstance->findCreditNote($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->findCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `updateCreditNote()`

```php
updateCreditNote($lago_id, $credit_note_update_input): \Lago\LagoPhpClient\Model\CreditNote
```

Update a credit note

This endpoint updates an existing credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 12345; // string | The credit note unique identifier, created by Lago.
$credit_note_update_input = new \Lago\LagoPhpClient\Model\CreditNoteUpdateInput(); // \Lago\LagoPhpClient\Model\CreditNoteUpdateInput | Credit note update payload

try {
    $result = $apiInstance->updateCreditNote($lago_id, $credit_note_update_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->updateCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |
| **credit_note_update_input** | [**\Lago\LagoPhpClient\Model\CreditNoteUpdateInput**](../Model/CreditNoteUpdateInput.md)| Credit note update payload | |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `voidCreditNote()`

```php
voidCreditNote($lago_id): \Lago\LagoPhpClient\Model\CreditNote
```

Void available credit

This endpoint voids the available credit linked to a specific credit note.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\CreditNotesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$lago_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | The credit note unique identifier, created by Lago.

try {
    $result = $apiInstance->voidCreditNote($lago_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CreditNotesApi->voidCreditNote: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **lago_id** | **string**| The credit note unique identifier, created by Lago. | |

### Return type

[**\Lago\LagoPhpClient\Model\CreditNote**](../Model/CreditNote.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
