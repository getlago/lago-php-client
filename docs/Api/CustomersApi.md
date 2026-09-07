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
| [**findAllCustomerPayments()**](CustomersApi.md#findAllCustomerPayments) | **GET** /customers/{external_customer_id}/payments | List all customer payments |


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

## `findAllCustomerPayments()`

```php
findAllCustomerPayments($external_customer_id, $page, $per_page, $invoice_id, 'application/json', $payment_status, $payment_statuses, $amount_from, $amount_to, $receipt_number, $created_at_from, $created_at_to, $payment_provider_type, $payment_method_type, $currency, $invoice_number, $payment_type, $payable_type, $search_term): \Lago\LagoPhpClient\Model\PaymentsPaginated
```

List all customer's payments

List payments with filters combined using AND and values within each array combined using OR. Results keep their existing visibility rules and are ordered by creation date descending, then ID. Amounts are integer cents and support the full signed 64-bit range from 0 through 9223372036854775807. Unknown enum or currency values, negative or out-of-range amounts, inverted amount bounds, invalid invoice UUIDs and receipt or invoice numbers longer than 255 characters return 422 validation_errors. Invalid date bounds are ignored. Search narrows the scope before exact filters apply; invoice search is skipped when invoice_id or invoice_number is supplied, and customer search is skipped when external_customer_id is supplied. Repeat the same filters when requesting the page number returned in meta.next_page.

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
$page = 1; // int | Page number.
$per_page = 20; // int | Number of records per page.
$invoice_id = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Filter by the Lago invoice UUID, matching the directly payable invoice or any invoice covered by a payment request.
$payment_status = [succeeded, failed]; // string[] | Filter by any of `pending`, `processing`, `succeeded` or `failed`; a single value can also be sent as `payment_status=succeeded`, and this parameter takes precedence over `payment_statuses`.
$payment_statuses = [succeeded]; // string[] | Alias for `payment_status[]`, matching any of `pending`, `processing`, `succeeded` or `failed`; a single value can also be sent as `payment_statuses=succeeded`, and it is ignored when `payment_status` is supplied.
$amount_from = 1000; // int | Inclusive minimum payment amount in integer cents, from 0 through 9223372036854775807; it must not exceed `amount_to` when both bounds are supplied.
$amount_to = 5000; // int | Inclusive maximum payment amount in integer cents, from 0 through 9223372036854775807; set it equal to `amount_from` to match an exact amount.
$receipt_number = rcpt-2026-0001; // string | Filter by an exact, case-insensitive payment receipt number of at most 255 characters; payments without a receipt do not match.
$created_at_from = 2026-09-01; // \DateTime | Filter payments created on or after this ISO-8601 date, inclusive from the start of the day in the organization timezone; invalid dates are ignored.
$created_at_to = 2026-09-07; // \DateTime | Filter payments created on or before this ISO-8601 date, inclusive through the end of the day in the organization timezone; invalid dates are ignored.
$payment_provider_type = [stripe]; // string[] | Filter by any of `stripe`, `gocardless`, `cashfree`, `adyen`, `flutterwave` or `moneyhash`; a single value can also be sent as `payment_provider_type=stripe`.
$payment_method_type = [card, sepa_debit]; // string[] | Filter by any of `card`, `sepa_debit`, `us_bank_account`, `bacs_debit`, `link`, `boleto`, `crypto` or `customer_balance`, using the payment provider method data and falling back to the saved payment method when its type is empty; a single value can also be sent as `payment_method_type=card`.
$currency = EUR; // string | Filter the results by currency, expressed as an ISO 4217 code.
$invoice_number = LAG-1234-001-002; // string | Filter by an exact, case-insensitive invoice number of at most 255 characters, matching either the directly payable invoice or any invoice covered by a payment request.
$payment_type = [manual]; // string[] | Filter by either `manual` or `provider`, matching any supplied type; a single value can also be sent as `payment_type=manual`.
$payable_type = [PaymentRequest]; // string[] | Filter by either `Invoice` or `PaymentRequest`, matching any supplied payable type; a single value can also be sent as `payable_type=PaymentRequest`.
$search_term = pi_3; // string | Search case-insensitively within provider payment IDs, references, payment UUIDs, directly payable invoice numbers and customer name, first name, last name, external ID or email; receipt numbers use their own exact filter.

try {
    $result = $apiInstance->findAllCustomerPayments($external_customer_id, $page, $per_page, $invoice_id, 'application/json', $payment_status, $payment_statuses, $amount_from, $amount_to, $receipt_number, $created_at_from, $created_at_to, $payment_provider_type, $payment_method_type, $currency, $invoice_number, $payment_type, $payable_type, $search_term);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CustomersApi->findAllCustomerPayments: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **external_customer_id** | **string**| The customer external unique identifier (provided by your own application) | |
| **page** | **int**| Page number. | [optional] |
| **per_page** | **int**| Number of records per page. | [optional] |
| **invoice_id** | **string**| Filter by the Lago invoice UUID, matching the directly payable invoice or any invoice covered by a payment request. | [optional] |
| **payment_status** | [**string[]**](../Model/string.md)| Filter by any of &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;succeeded&#x60; or &#x60;failed&#x60;; a single value can also be sent as &#x60;payment_status&#x3D;succeeded&#x60;, and this parameter takes precedence over &#x60;payment_statuses&#x60;. | [optional] |
| **payment_statuses** | [**string[]**](../Model/string.md)| Alias for &#x60;payment_status[]&#x60;, matching any of &#x60;pending&#x60;, &#x60;processing&#x60;, &#x60;succeeded&#x60; or &#x60;failed&#x60;; a single value can also be sent as &#x60;payment_statuses&#x3D;succeeded&#x60;, and it is ignored when &#x60;payment_status&#x60; is supplied. | [optional] |
| **amount_from** | **int**| Inclusive minimum payment amount in integer cents, from 0 through 9223372036854775807; it must not exceed &#x60;amount_to&#x60; when both bounds are supplied. | [optional] |
| **amount_to** | **int**| Inclusive maximum payment amount in integer cents, from 0 through 9223372036854775807; set it equal to &#x60;amount_from&#x60; to match an exact amount. | [optional] |
| **receipt_number** | **string**| Filter by an exact, case-insensitive payment receipt number of at most 255 characters; payments without a receipt do not match. | [optional] |
| **created_at_from** | **\DateTime**| Filter payments created on or after this ISO-8601 date, inclusive from the start of the day in the organization timezone; invalid dates are ignored. | [optional] |
| **created_at_to** | **\DateTime**| Filter payments created on or before this ISO-8601 date, inclusive through the end of the day in the organization timezone; invalid dates are ignored. | [optional] |
| **payment_provider_type** | [**string[]**](../Model/string.md)| Filter by any of &#x60;stripe&#x60;, &#x60;gocardless&#x60;, &#x60;cashfree&#x60;, &#x60;adyen&#x60;, &#x60;flutterwave&#x60; or &#x60;moneyhash&#x60;; a single value can also be sent as &#x60;payment_provider_type&#x3D;stripe&#x60;. | [optional] |
| **payment_method_type** | [**string[]**](../Model/string.md)| Filter by any of &#x60;card&#x60;, &#x60;sepa_debit&#x60;, &#x60;us_bank_account&#x60;, &#x60;bacs_debit&#x60;, &#x60;link&#x60;, &#x60;boleto&#x60;, &#x60;crypto&#x60; or &#x60;customer_balance&#x60;, using the payment provider method data and falling back to the saved payment method when its type is empty; a single value can also be sent as &#x60;payment_method_type&#x3D;card&#x60;. | [optional] |
| **currency** | **string**| Filter the results by currency, expressed as an ISO 4217 code. | [optional] |
| **invoice_number** | **string**| Filter by an exact, case-insensitive invoice number of at most 255 characters, matching either the directly payable invoice or any invoice covered by a payment request. | [optional] |
| **payment_type** | [**string[]**](../Model/string.md)| Filter by either &#x60;manual&#x60; or &#x60;provider&#x60;, matching any supplied type; a single value can also be sent as &#x60;payment_type&#x3D;manual&#x60;. | [optional] |
| **payable_type** | [**string[]**](../Model/string.md)| Filter by either &#x60;Invoice&#x60; or &#x60;PaymentRequest&#x60;, matching any supplied payable type; a single value can also be sent as &#x60;payable_type&#x3D;PaymentRequest&#x60;. | [optional] |
| **search_term** | **string**| Search case-insensitively within provider payment IDs, references, payment UUIDs, directly payable invoice numbers and customer name, first name, last name, external ID or email; receipt numbers use their own exact filter. | [optional] |

### Return type

[**\Lago\LagoPhpClient\Model\PaymentsPaginated**](../Model/PaymentsPaginated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
