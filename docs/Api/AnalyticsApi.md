# Lago\LagoPhpClient\AnalyticsApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**findAllGrossRevenues()**](AnalyticsApi.md#findAllGrossRevenues) | **GET** /analytics/gross_revenue | List gross revenue |
| [**findAllInvoiceCollections()**](AnalyticsApi.md#findAllInvoiceCollections) | **GET** /analytics/invoice_collection | List of finalized invoices |
| [**findAllInvoicedUsages()**](AnalyticsApi.md#findAllInvoicedUsages) | **GET** /analytics/invoiced_usage | List usage revenue |
| [**findAllMrrs()**](AnalyticsApi.md#findAllMrrs) | **GET** /analytics/mrr | List MRR |
| [**findAllOverdueBalances()**](AnalyticsApi.md#findAllOverdueBalances) | **GET** /analytics/overdue_balance | List overdue balance |


## `findAllGrossRevenues()`

```php
findAllGrossRevenues($currency, $external_customer_id, $months): \Lago\LagoPhpClient\Model\GrossRevenues
```

List gross revenue

Gross revenue is the sum of monthly `finalized` invoice payments and fees paid in advance that are not invoiceable. This total is calculated after deducting taxes and discounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = USD; // \LagoLagoPhpClientModelCurrency | Currency of revenue analytics. Format must be ISO 4217.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application). Use it to filter revenue analytics at the customer level.
$months = 12; // int | Show data only for given number of months.

try {
    $result = $apiInstance->findAllGrossRevenues($currency, $external_customer_id, $months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->findAllGrossRevenues: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**\LagoLagoPhpClientModelCurrency**](../Model/.md)| Currency of revenue analytics. Format must be ISO 4217. | [optional] |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). Use it to filter revenue analytics at the customer level. | [optional] |
| **months** | **int**| Show data only for given number of months. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\GrossRevenues**](../Model/GrossRevenues.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllInvoiceCollections()`

```php
findAllInvoiceCollections($currency, $months): \Lago\LagoPhpClient\Model\InvoiceCollections
```

List of finalized invoices

Represents a monthly aggregation, detailing both the total count and the cumulative amount of invoices that have been marked as `finalized`. This report sorts invoices categorically based on their `payment_status`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = USD; // \LagoLagoPhpClientModelCurrency | The currency of revenue analytics. Format must be ISO 4217.
$months = 12; // int | Show data only for given number of months.

try {
    $result = $apiInstance->findAllInvoiceCollections($currency, $months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->findAllInvoiceCollections: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**\LagoLagoPhpClientModelCurrency**](../Model/.md)| The currency of revenue analytics. Format must be ISO 4217. | [optional] |
| **months** | **int**| Show data only for given number of months. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\InvoiceCollections**](../Model/InvoiceCollections.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllInvoicedUsages()`

```php
findAllInvoicedUsages($currency, $months): \Lago\LagoPhpClient\Model\InvoicedUsages
```

List usage revenue

Reports a monthly analysis focused on the revenue generated from all usage-based fees. It exclusively accounts for revenue that has been formally invoiced. Importantly, this report does not include revenue related to the usage in the current billing period, limiting its scope to previously invoiced amounts.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = USD; // \LagoLagoPhpClientModelCurrency | The currency of invoiced usage analytics. Format must be ISO 4217.
$months = 12; // int | Show data only for given number of months.

try {
    $result = $apiInstance->findAllInvoicedUsages($currency, $months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->findAllInvoicedUsages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**\LagoLagoPhpClientModelCurrency**](../Model/.md)| The currency of invoiced usage analytics. Format must be ISO 4217. | [optional] |
| **months** | **int**| Show data only for given number of months. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\InvoicedUsages**](../Model/InvoicedUsages.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllMrrs()`

```php
findAllMrrs($currency, $months): \Lago\LagoPhpClient\Model\Mrrs
```

List MRR

This endpoint is used to list MRR.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = USD; // \LagoLagoPhpClientModelCurrency | Quantifies the revenue generated from `subscription` fees on a monthly basis. This figure is calculated post-application of applicable taxes and deduction of any applicable discounts. The method of calculation varies based on the subscription billing cycle:  - Revenue from `monthly` subscription invoices is included in the MRR for the month in which the invoice is issued. - Revenue from `quarterly` subscription invoices is distributed evenly over three months. This distribution applies to fees paid in advance (allocated to the next remaining months depending on calendar or anniversary billing) as well as to fees paid in arrears (allocated to the preceding months depending on calendar or anniversary billing). - Revenue from `yearly` subscription invoices is distributed evenly over twelve months. This allocation is applicable for fees paid in advance (spread over the next  remaining months depending on calendar or anniversary billing) and for fees paid in arrears (spread over the previous months depending on calendar or anniversary billing). - Revenue from `weekly` subscription invoices, the total revenue from all invoices issued within a month is summed up. This total is then divided by the number of invoices issued during that month, and the result is multiplied by 4.33, representing the average number of weeks in a month.
$months = 12; // int | Show data only for given number of months.

try {
    $result = $apiInstance->findAllMrrs($currency, $months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->findAllMrrs: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**\LagoLagoPhpClientModelCurrency**](../Model/.md)| Quantifies the revenue generated from &#x60;subscription&#x60; fees on a monthly basis. This figure is calculated post-application of applicable taxes and deduction of any applicable discounts. The method of calculation varies based on the subscription billing cycle:  - Revenue from &#x60;monthly&#x60; subscription invoices is included in the MRR for the month in which the invoice is issued. - Revenue from &#x60;quarterly&#x60; subscription invoices is distributed evenly over three months. This distribution applies to fees paid in advance (allocated to the next remaining months depending on calendar or anniversary billing) as well as to fees paid in arrears (allocated to the preceding months depending on calendar or anniversary billing). - Revenue from &#x60;yearly&#x60; subscription invoices is distributed evenly over twelve months. This allocation is applicable for fees paid in advance (spread over the next  remaining months depending on calendar or anniversary billing) and for fees paid in arrears (spread over the previous months depending on calendar or anniversary billing). - Revenue from &#x60;weekly&#x60; subscription invoices, the total revenue from all invoices issued within a month is summed up. This total is then divided by the number of invoices issued during that month, and the result is multiplied by 4.33, representing the average number of weeks in a month. | [optional] |
| **months** | **int**| Show data only for given number of months. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\Mrrs**](../Model/Mrrs.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `findAllOverdueBalances()`

```php
findAllOverdueBalances($currency, $external_customer_id, $months): \Lago\LagoPhpClient\Model\OverdueBalances
```

List overdue balance

Overdue balance is the total amount associated with overdue invoices (invoices with pending or failed payments which are past their due dates).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\AnalyticsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$currency = USD; // \LagoLagoPhpClientModelCurrency | Currency of revenue analytics. Format must be ISO 4217.
$external_customer_id = 5eb02857-a71e-4ea2-bcf9-57d3a41bc6ba; // string | The customer external unique identifier (provided by your own application). Use it to filter revenue analytics at the customer level.
$months = 12; // int | Show data only for given number of months.

try {
    $result = $apiInstance->findAllOverdueBalances($currency, $external_customer_id, $months);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AnalyticsApi->findAllOverdueBalances: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **currency** | [**\LagoLagoPhpClientModelCurrency**](../Model/.md)| Currency of revenue analytics. Format must be ISO 4217. | [optional] |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application). Use it to filter revenue analytics at the customer level. | [optional] |
| **months** | **int**| Show data only for given number of months. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\OverdueBalances**](../Model/OverdueBalances.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
