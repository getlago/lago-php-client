# Lago\LagoPhpClient\DefaultApi

All URIs are relative to https://api.getlago.com/api/v1, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**alertTriggered()**](DefaultApi.md#alertTriggered) | **POST** /alert_triggered | A new alert was triggered |
| [**creditNoteCreated()**](DefaultApi.md#creditNoteCreated) | **POST** /credit_note_created | A new credit note has been created |
| [**creditNoteGenerated()**](DefaultApi.md#creditNoteGenerated) | **POST** /credit_note_generated | A new credit note PDF has been generated |
| [**creditNoteProviderRefundFailure()**](DefaultApi.md#creditNoteProviderRefundFailure) | **POST** /credit_note_provider_refund_failure | The refund of a credit note has failed on a payment provider |
| [**customerAccountingProviderCreated()**](DefaultApi.md#customerAccountingProviderCreated) | **POST** /customer_accounting_provider_created | A customer was created on an accouting integration |
| [**customerAccountingProviderError()**](DefaultApi.md#customerAccountingProviderError) | **POST** /customer_accounting_provider_error | An error was encountered while syncing a customer to an accounting provider |
| [**customerCheckoutUrlGenerated()**](DefaultApi.md#customerCheckoutUrlGenerated) | **POST** /customer_checkout_url_generated | A checkout URL was generated for a customer |
| [**customerCreated()**](DefaultApi.md#customerCreated) | **POST** /customer_created | A new customer has been created |
| [**customerCrmProviderCreated()**](DefaultApi.md#customerCrmProviderCreated) | **POST** /customer_crm_provider_created | A customer has been created in the CRM provider |
| [**customerCrmProviderError()**](DefaultApi.md#customerCrmProviderError) | **POST** /customer_crm_provider_error | An error was encountered while syncing a customer to a CRM provider |
| [**customerPaymentProviderCreated()**](DefaultApi.md#customerPaymentProviderCreated) | **POST** /customer_payment_provider_created | A customer has been created on a payment provider |
| [**customerPaymentProviderError()**](DefaultApi.md#customerPaymentProviderError) | **POST** /customer_payment_provider_error | An error was encountered while syncing a customer to a payment provider |
| [**customerTaxProviderError()**](DefaultApi.md#customerTaxProviderError) | **POST** /customer_tax_provider_error | An error was encountered while fetching taxes for a customer on a tax provider |
| [**customerUpdated()**](DefaultApi.md#customerUpdated) | **POST** /customer_updated | A customer has been updated |
| [**customerViesCheck()**](DefaultApi.md#customerViesCheck) | **POST** /customer_vies_check | VIES VAT number has been checked for a customer |
| [**eventError()**](DefaultApi.md#eventError) | **POST** /event_error | An error has been detected on an event |
| [**eventsErrors()**](DefaultApi.md#eventsErrors) | **POST** /events_errors | Errors were encountered while post-processing some events |
| [**feeCreated()**](DefaultApi.md#feeCreated) | **POST** /fee_created | A pay in advance fee has been created |
| [**feeTaxProviderError()**](DefaultApi.md#feeTaxProviderError) | **POST** /fee_tax_provider_error | An error was encountered while fetching taxes for a fee on a tax provider |
| [**integrationProviderError()**](DefaultApi.md#integrationProviderError) | **POST** /integration_provider_error | An error was encountered while processing data on an integration |
| [**invoiceAddOnAdded()**](DefaultApi.md#invoiceAddOnAdded) | **POST** /invoice_add_on_added | A new add on invoice has been emitted |
| [**invoiceCreated()**](DefaultApi.md#invoiceCreated) | **POST** /invoice_created | A new invoice has been emitted |
| [**invoiceDrafted()**](DefaultApi.md#invoiceDrafted) | **POST** /invoice_drafted | A new draft invoice has been emitted |
| [**invoiceGenerated()**](DefaultApi.md#invoiceGenerated) | **POST** /invoice_generated | A new invoice PDF has been generated |
| [**invoiceOneOffCreated()**](DefaultApi.md#invoiceOneOffCreated) | **POST** /invoice_one_off_created | A new one off invoice has been emitted |
| [**invoicePaidCreditAdded()**](DefaultApi.md#invoicePaidCreditAdded) | **POST** /invoice_paid_credit_added | A new prepaid credit invoice has been emitted |
| [**invoicePaymentDisputeLost()**](DefaultApi.md#invoicePaymentDisputeLost) | **POST** /invoice_payment_dispute_lost | A payment dispute has been lost for an invoice payment |
| [**invoicePaymentFailure()**](DefaultApi.md#invoicePaymentFailure) | **POST** /invoice_payment_failure | A payment attempt for an invoice has failed on a payment provider |
| [**invoicePaymentOverdue()**](DefaultApi.md#invoicePaymentOverdue) | **POST** /invoice_payment_overdue | An invoice payment is overdue |
| [**invoicePaymentStatusUpdated()**](DefaultApi.md#invoicePaymentStatusUpdated) | **POST** /invoice_payment_status_updated | The payment status of an invoice has been updated |
| [**invoiceResynced()**](DefaultApi.md#invoiceResynced) | **POST** /invoice_resynced | An invoice has been resynced with salesforce |
| [**invoiceVoided()**](DefaultApi.md#invoiceVoided) | **POST** /invoice_voided | An invoice has been voided |
| [**paymentProviderError()**](DefaultApi.md#paymentProviderError) | **POST** /payment_provider_error | An error was raised by a payment provider |
| [**paymentRequestCreated()**](DefaultApi.md#paymentRequestCreated) | **POST** /payment_request_created | An new payment request has been created |
| [**paymentRequestPaymentFailure()**](DefaultApi.md#paymentRequestPaymentFailure) | **POST** /payment_request_payment_failure | A payment attempt for a payment request has failed on a payment provider |
| [**paymentRequestPaymentStatusUpdated()**](DefaultApi.md#paymentRequestPaymentStatusUpdated) | **POST** /payment_request_payment_status_updated | The payment status of an invoice has been updated |
| [**paymentRequiresAction()**](DefaultApi.md#paymentRequiresAction) | **POST** /payment_requires_action | An action is required to process a payment |
| [**planCreated()**](DefaultApi.md#planCreated) | **POST** /plan_created | A new plan has been created |
| [**planDeleted()**](DefaultApi.md#planDeleted) | **POST** /plan_deleted | A plan has been deleted |
| [**planUpdated()**](DefaultApi.md#planUpdated) | **POST** /plan_updated | A plan has been updated |
| [**subscriptionStarted()**](DefaultApi.md#subscriptionStarted) | **POST** /subscription_started | An subscription has started |
| [**subscriptionTerminated()**](DefaultApi.md#subscriptionTerminated) | **POST** /subscription_terminated | A subscription has been terminated |
| [**subscriptionTerminationAlert()**](DefaultApi.md#subscriptionTerminationAlert) | **POST** /subscription_termination_alert | A subscription will be terminated in the future |
| [**subscriptionTrialEnded()**](DefaultApi.md#subscriptionTrialEnded) | **POST** /subscription_trial_ended | A subscription trial period has ended |
| [**subscriptionUsageThresholdReached()**](DefaultApi.md#subscriptionUsageThresholdReached) | **POST** /subscription_usage_threshold_reached | A usage threshold has been reached by a subscription |
| [**walletDepletedOngoingBalance()**](DefaultApi.md#walletDepletedOngoingBalance) | **POST** /wallet_depleted_ongoing_balance | The balance of a wallet has been depleted |
| [**walletTransactionCreated()**](DefaultApi.md#walletTransactionCreated) | **POST** /wallet_transaction_created | A new wallet transaction has been created |
| [**walletTransactionPaymentFailure()**](DefaultApi.md#walletTransactionPaymentFailure) | **POST** /wallet_transaction_payment_failure | A payment attempt for a wallet transaction has failed on a payment provider |
| [**walletTransactionUpdated()**](DefaultApi.md#walletTransactionUpdated) | **POST** /wallet_transaction_updated | A wallet transaction has been updated |


## `alertTriggered()`

```php
alertTriggered($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $alert_triggered_request)
```

A new alert was triggered

One or more thresholds defined in the alert were crossed

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$alert_triggered_request = new \Lago\LagoPhpClient\Model\AlertTriggeredRequest(); // \Lago\LagoPhpClient\Model\AlertTriggeredRequest | Details of the triggered alert

try {
    $apiInstance->alertTriggered($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $alert_triggered_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->alertTriggered: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **alert_triggered_request** | [**\Lago\LagoPhpClient\Model\AlertTriggeredRequest**](../Model/AlertTriggeredRequest.md)| Details of the triggered alert | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteCreated()`

```php
creditNoteCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $credit_note_created_request)
```

A new credit note has been created

A new credit note has been created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$credit_note_created_request = new \Lago\LagoPhpClient\Model\CreditNoteCreatedRequest(); // \Lago\LagoPhpClient\Model\CreditNoteCreatedRequest | Details of the new credit note

try {
    $apiInstance->creditNoteCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $credit_note_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->creditNoteCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **credit_note_created_request** | [**\Lago\LagoPhpClient\Model\CreditNoteCreatedRequest**](../Model/CreditNoteCreatedRequest.md)| Details of the new credit note | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteGenerated()`

```php
creditNoteGenerated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $credit_note_generated_request)
```

A new credit note PDF has been generated

A new credit note PDF has been generated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$credit_note_generated_request = new \Lago\LagoPhpClient\Model\CreditNoteGeneratedRequest(); // \Lago\LagoPhpClient\Model\CreditNoteGeneratedRequest | Details of the credit note

try {
    $apiInstance->creditNoteGenerated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $credit_note_generated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->creditNoteGenerated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **credit_note_generated_request** | [**\Lago\LagoPhpClient\Model\CreditNoteGeneratedRequest**](../Model/CreditNoteGeneratedRequest.md)| Details of the credit note | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `creditNoteProviderRefundFailure()`

```php
creditNoteProviderRefundFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $credit_note_provider_refund_failure_request)
```

The refund of a credit note has failed on a payment provider

The refund of a credit note has failed on a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$credit_note_provider_refund_failure_request = new \Lago\LagoPhpClient\Model\CreditNoteProviderRefundFailureRequest(); // \Lago\LagoPhpClient\Model\CreditNoteProviderRefundFailureRequest | Details of the credit note and of the provider error

try {
    $apiInstance->creditNoteProviderRefundFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $credit_note_provider_refund_failure_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->creditNoteProviderRefundFailure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **credit_note_provider_refund_failure_request** | [**\Lago\LagoPhpClient\Model\CreditNoteProviderRefundFailureRequest**](../Model/CreditNoteProviderRefundFailureRequest.md)| Details of the credit note and of the provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAccountingProviderCreated()`

```php
customerAccountingProviderCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_accounting_provider_created_request)
```

A customer was created on an accouting integration

A customer was created on an accouting integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_accounting_provider_created_request = new \Lago\LagoPhpClient\Model\CustomerAccountingProviderCreatedRequest(); // \Lago\LagoPhpClient\Model\CustomerAccountingProviderCreatedRequest | Details of the customer

try {
    $apiInstance->customerAccountingProviderCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_accounting_provider_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerAccountingProviderCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_accounting_provider_created_request** | [**\Lago\LagoPhpClient\Model\CustomerAccountingProviderCreatedRequest**](../Model/CustomerAccountingProviderCreatedRequest.md)| Details of the customer | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerAccountingProviderError()`

```php
customerAccountingProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_accounting_provider_error_request)
```

An error was encountered while syncing a customer to an accounting provider

An error was encountered while syncing a customer to an accounting provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_accounting_provider_error_request = new \Lago\LagoPhpClient\Model\CustomerAccountingProviderErrorRequest(); // \Lago\LagoPhpClient\Model\CustomerAccountingProviderErrorRequest | Details of the customer and of the provider error

try {
    $apiInstance->customerAccountingProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_accounting_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerAccountingProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_accounting_provider_error_request** | [**\Lago\LagoPhpClient\Model\CustomerAccountingProviderErrorRequest**](../Model/CustomerAccountingProviderErrorRequest.md)| Details of the customer and of the provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCheckoutUrlGenerated()`

```php
customerCheckoutUrlGenerated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_checkout_url_generated_request)
```

A checkout URL was generated for a customer

A checkout URL was generated for a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_checkout_url_generated_request = new \Lago\LagoPhpClient\Model\CustomerCheckoutUrlGeneratedRequest(); // \Lago\LagoPhpClient\Model\CustomerCheckoutUrlGeneratedRequest | Details of the customer with the generated checkout URL

try {
    $apiInstance->customerCheckoutUrlGenerated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_checkout_url_generated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerCheckoutUrlGenerated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_checkout_url_generated_request** | [**\Lago\LagoPhpClient\Model\CustomerCheckoutUrlGeneratedRequest**](../Model/CustomerCheckoutUrlGeneratedRequest.md)| Details of the customer with the generated checkout URL | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCreated()`

```php
customerCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_created_request)
```

A new customer has been created

A new customer has been created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_created_request = new \Lago\LagoPhpClient\Model\CustomerCreatedRequest(); // \Lago\LagoPhpClient\Model\CustomerCreatedRequest | Details of the new customer

try {
    $apiInstance->customerCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_created_request** | [**\Lago\LagoPhpClient\Model\CustomerCreatedRequest**](../Model/CustomerCreatedRequest.md)| Details of the new customer | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCrmProviderCreated()`

```php
customerCrmProviderCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_crm_provider_created_request)
```

A customer has been created in the CRM provider

A customer has been created in the CRM provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_crm_provider_created_request = new \Lago\LagoPhpClient\Model\CustomerCrmProviderCreatedRequest(); // \Lago\LagoPhpClient\Model\CustomerCrmProviderCreatedRequest | Details of the customer

try {
    $apiInstance->customerCrmProviderCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_crm_provider_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerCrmProviderCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_crm_provider_created_request** | [**\Lago\LagoPhpClient\Model\CustomerCrmProviderCreatedRequest**](../Model/CustomerCrmProviderCreatedRequest.md)| Details of the customer | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerCrmProviderError()`

```php
customerCrmProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_crm_provider_error_request)
```

An error was encountered while syncing a customer to a CRM provider

An error was encountered while syncing a customer to a CRM provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_crm_provider_error_request = new \Lago\LagoPhpClient\Model\CustomerCrmProviderErrorRequest(); // \Lago\LagoPhpClient\Model\CustomerCrmProviderErrorRequest | Details of the customer and of the CRM provider error

try {
    $apiInstance->customerCrmProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_crm_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerCrmProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_crm_provider_error_request** | [**\Lago\LagoPhpClient\Model\CustomerCrmProviderErrorRequest**](../Model/CustomerCrmProviderErrorRequest.md)| Details of the customer and of the CRM provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPaymentProviderCreated()`

```php
customerPaymentProviderCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_payment_provider_created_request)
```

A customer has been created on a payment provider

A customer has been created on a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_payment_provider_created_request = new \Lago\LagoPhpClient\Model\CustomerPaymentProviderCreatedRequest(); // \Lago\LagoPhpClient\Model\CustomerPaymentProviderCreatedRequest | Details of the customer

try {
    $apiInstance->customerPaymentProviderCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_payment_provider_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerPaymentProviderCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_payment_provider_created_request** | [**\Lago\LagoPhpClient\Model\CustomerPaymentProviderCreatedRequest**](../Model/CustomerPaymentProviderCreatedRequest.md)| Details of the customer | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerPaymentProviderError()`

```php
customerPaymentProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_payment_provider_error_request)
```

An error was encountered while syncing a customer to a payment provider

An error was encountered while syncing a customer to a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_payment_provider_error_request = new \Lago\LagoPhpClient\Model\CustomerPaymentProviderErrorRequest(); // \Lago\LagoPhpClient\Model\CustomerPaymentProviderErrorRequest | Details of the customer and of the payment provider error

try {
    $apiInstance->customerPaymentProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_payment_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerPaymentProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_payment_provider_error_request** | [**\Lago\LagoPhpClient\Model\CustomerPaymentProviderErrorRequest**](../Model/CustomerPaymentProviderErrorRequest.md)| Details of the customer and of the payment provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerTaxProviderError()`

```php
customerTaxProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_tax_provider_error_request)
```

An error was encountered while fetching taxes for a customer on a tax provider

An error was encountered while fetching taxes for a customer on a tax provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_tax_provider_error_request = new \Lago\LagoPhpClient\Model\CustomerTaxProviderErrorRequest(); // \Lago\LagoPhpClient\Model\CustomerTaxProviderErrorRequest | Details of the customer and of the tax provider error

try {
    $apiInstance->customerTaxProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_tax_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerTaxProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_tax_provider_error_request** | [**\Lago\LagoPhpClient\Model\CustomerTaxProviderErrorRequest**](../Model/CustomerTaxProviderErrorRequest.md)| Details of the customer and of the tax provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerUpdated()`

```php
customerUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_updated_request)
```

A customer has been updated

A customer has been updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_updated_request = new \Lago\LagoPhpClient\Model\CustomerUpdatedRequest(); // \Lago\LagoPhpClient\Model\CustomerUpdatedRequest | Details of the customer

try {
    $apiInstance->customerUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_updated_request** | [**\Lago\LagoPhpClient\Model\CustomerUpdatedRequest**](../Model/CustomerUpdatedRequest.md)| Details of the customer | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `customerViesCheck()`

```php
customerViesCheck($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_vies_check_request)
```

VIES VAT number has been checked for a customer

VIES VAT number has been checked for a customer

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$customer_vies_check_request = new \Lago\LagoPhpClient\Model\CustomerViesCheckRequest(); // \Lago\LagoPhpClient\Model\CustomerViesCheckRequest | Details of the customer with the VIES VAT check status

try {
    $apiInstance->customerViesCheck($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $customer_vies_check_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->customerViesCheck: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **customer_vies_check_request** | [**\Lago\LagoPhpClient\Model\CustomerViesCheckRequest**](../Model/CustomerViesCheckRequest.md)| Details of the customer with the VIES VAT check status | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventError()`

```php
eventError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $event_error_request)
```

An error has been detected on an event

An error has been detected on an event

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$event_error_request = new \Lago\LagoPhpClient\Model\EventErrorRequest(); // \Lago\LagoPhpClient\Model\EventErrorRequest | Details of the event and of the error

try {
    $apiInstance->eventError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $event_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **event_error_request** | [**\Lago\LagoPhpClient\Model\EventErrorRequest**](../Model/EventErrorRequest.md)| Details of the event and of the error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `eventsErrors()`

```php
eventsErrors($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $events_errors_request)
```

Errors were encountered while post-processing some events

Errors were encountered while post-processing some events

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$events_errors_request = new \Lago\LagoPhpClient\Model\EventsErrorsRequest(); // \Lago\LagoPhpClient\Model\EventsErrorsRequest | Details of the events errors

try {
    $apiInstance->eventsErrors($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $events_errors_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->eventsErrors: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **events_errors_request** | [**\Lago\LagoPhpClient\Model\EventsErrorsRequest**](../Model/EventsErrorsRequest.md)| Details of the events errors | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeCreated()`

```php
feeCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $fee_created_request)
```

A pay in advance fee has been created

A pay in advance fee has been created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$fee_created_request = new \Lago\LagoPhpClient\Model\FeeCreatedRequest(); // \Lago\LagoPhpClient\Model\FeeCreatedRequest | Details of the new fee

try {
    $apiInstance->feeCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $fee_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->feeCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **fee_created_request** | [**\Lago\LagoPhpClient\Model\FeeCreatedRequest**](../Model/FeeCreatedRequest.md)| Details of the new fee | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `feeTaxProviderError()`

```php
feeTaxProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $fee_tax_provider_error_request)
```

An error was encountered while fetching taxes for a fee on a tax provider

An error was encountered while fetching taxes for a fee on a tax provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$fee_tax_provider_error_request = new \Lago\LagoPhpClient\Model\FeeTaxProviderErrorRequest(); // \Lago\LagoPhpClient\Model\FeeTaxProviderErrorRequest | Details of the fee and of the tax provider error

try {
    $apiInstance->feeTaxProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $fee_tax_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->feeTaxProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **fee_tax_provider_error_request** | [**\Lago\LagoPhpClient\Model\FeeTaxProviderErrorRequest**](../Model/FeeTaxProviderErrorRequest.md)| Details of the fee and of the tax provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `integrationProviderError()`

```php
integrationProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $integration_provider_error_request)
```

An error was encountered while processing data on an integration

An error was encountered while processing data on an integration

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$integration_provider_error_request = new \Lago\LagoPhpClient\Model\IntegrationProviderErrorRequest(); // \Lago\LagoPhpClient\Model\IntegrationProviderErrorRequest | Details of the integration and of the integration error

try {
    $apiInstance->integrationProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $integration_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->integrationProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **integration_provider_error_request** | [**\Lago\LagoPhpClient\Model\IntegrationProviderErrorRequest**](../Model/IntegrationProviderErrorRequest.md)| Details of the integration and of the integration error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceAddOnAdded()`

```php
invoiceAddOnAdded($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_add_on_added_request)
```

A new add on invoice has been emitted

A new add on invoice has been emitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_add_on_added_request = new \Lago\LagoPhpClient\Model\InvoiceAddOnAddedRequest(); // \Lago\LagoPhpClient\Model\InvoiceAddOnAddedRequest | Details of the new invoice

try {
    $apiInstance->invoiceAddOnAdded($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_add_on_added_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceAddOnAdded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_add_on_added_request** | [**\Lago\LagoPhpClient\Model\InvoiceAddOnAddedRequest**](../Model/InvoiceAddOnAddedRequest.md)| Details of the new invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceCreated()`

```php
invoiceCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_created_request)
```

A new invoice has been emitted

A new invoice has been emitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_created_request = new \Lago\LagoPhpClient\Model\InvoiceCreatedRequest(); // \Lago\LagoPhpClient\Model\InvoiceCreatedRequest | Details of the new invoice

try {
    $apiInstance->invoiceCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_created_request** | [**\Lago\LagoPhpClient\Model\InvoiceCreatedRequest**](../Model/InvoiceCreatedRequest.md)| Details of the new invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceDrafted()`

```php
invoiceDrafted($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_drafted_request)
```

A new draft invoice has been emitted

A new draft invoice has been emitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_drafted_request = new \Lago\LagoPhpClient\Model\InvoiceDraftedRequest(); // \Lago\LagoPhpClient\Model\InvoiceDraftedRequest | Details of the new invoice

try {
    $apiInstance->invoiceDrafted($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_drafted_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceDrafted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_drafted_request** | [**\Lago\LagoPhpClient\Model\InvoiceDraftedRequest**](../Model/InvoiceDraftedRequest.md)| Details of the new invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceGenerated()`

```php
invoiceGenerated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_generated_request)
```

A new invoice PDF has been generated

A new invoice PDF has been generated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_generated_request = new \Lago\LagoPhpClient\Model\InvoiceGeneratedRequest(); // \Lago\LagoPhpClient\Model\InvoiceGeneratedRequest | Details of the invoice

try {
    $apiInstance->invoiceGenerated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_generated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceGenerated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_generated_request** | [**\Lago\LagoPhpClient\Model\InvoiceGeneratedRequest**](../Model/InvoiceGeneratedRequest.md)| Details of the invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceOneOffCreated()`

```php
invoiceOneOffCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_one_off_created_request)
```

A new one off invoice has been emitted

A new one off invoice has been emitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_one_off_created_request = new \Lago\LagoPhpClient\Model\InvoiceOneOffCreatedRequest(); // \Lago\LagoPhpClient\Model\InvoiceOneOffCreatedRequest | Details of the new invoice

try {
    $apiInstance->invoiceOneOffCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_one_off_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceOneOffCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_one_off_created_request** | [**\Lago\LagoPhpClient\Model\InvoiceOneOffCreatedRequest**](../Model/InvoiceOneOffCreatedRequest.md)| Details of the new invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaidCreditAdded()`

```php
invoicePaidCreditAdded($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_paid_credit_added_request)
```

A new prepaid credit invoice has been emitted

A new prepaid credit invoice has been emitted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_paid_credit_added_request = new \Lago\LagoPhpClient\Model\InvoicePaidCreditAddedRequest(); // \Lago\LagoPhpClient\Model\InvoicePaidCreditAddedRequest | Details of the new invoice

try {
    $apiInstance->invoicePaidCreditAdded($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_paid_credit_added_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoicePaidCreditAdded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_paid_credit_added_request** | [**\Lago\LagoPhpClient\Model\InvoicePaidCreditAddedRequest**](../Model/InvoicePaidCreditAddedRequest.md)| Details of the new invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentDisputeLost()`

```php
invoicePaymentDisputeLost($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_dispute_lost_request)
```

A payment dispute has been lost for an invoice payment

A payment dispute has been lost for an invoice payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_payment_dispute_lost_request = new \Lago\LagoPhpClient\Model\InvoicePaymentDisputeLostRequest(); // \Lago\LagoPhpClient\Model\InvoicePaymentDisputeLostRequest | Details of the invoice and of the payment dispute

try {
    $apiInstance->invoicePaymentDisputeLost($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_dispute_lost_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoicePaymentDisputeLost: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_payment_dispute_lost_request** | [**\Lago\LagoPhpClient\Model\InvoicePaymentDisputeLostRequest**](../Model/InvoicePaymentDisputeLostRequest.md)| Details of the invoice and of the payment dispute | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentFailure()`

```php
invoicePaymentFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_failure_request)
```

A payment attempt for an invoice has failed on a payment provider

A payment attempt for an invoice has failed on a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_payment_failure_request = new \Lago\LagoPhpClient\Model\InvoicePaymentFailureRequest(); // \Lago\LagoPhpClient\Model\InvoicePaymentFailureRequest | Details of the invoice and of the payment provider error

try {
    $apiInstance->invoicePaymentFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_failure_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoicePaymentFailure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_payment_failure_request** | [**\Lago\LagoPhpClient\Model\InvoicePaymentFailureRequest**](../Model/InvoicePaymentFailureRequest.md)| Details of the invoice and of the payment provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentOverdue()`

```php
invoicePaymentOverdue($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_overdue_request)
```

An invoice payment is overdue

An invoice payment is overdue

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_payment_overdue_request = new \Lago\LagoPhpClient\Model\InvoicePaymentOverdueRequest(); // \Lago\LagoPhpClient\Model\InvoicePaymentOverdueRequest | Details of the invoice

try {
    $apiInstance->invoicePaymentOverdue($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_overdue_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoicePaymentOverdue: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_payment_overdue_request** | [**\Lago\LagoPhpClient\Model\InvoicePaymentOverdueRequest**](../Model/InvoicePaymentOverdueRequest.md)| Details of the invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoicePaymentStatusUpdated()`

```php
invoicePaymentStatusUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_status_updated_request)
```

The payment status of an invoice has been updated

The payment status of an invoice has been updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_payment_status_updated_request = new \Lago\LagoPhpClient\Model\InvoicePaymentStatusUpdatedRequest(); // \Lago\LagoPhpClient\Model\InvoicePaymentStatusUpdatedRequest | Details of the invoice

try {
    $apiInstance->invoicePaymentStatusUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_payment_status_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoicePaymentStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_payment_status_updated_request** | [**\Lago\LagoPhpClient\Model\InvoicePaymentStatusUpdatedRequest**](../Model/InvoicePaymentStatusUpdatedRequest.md)| Details of the invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceResynced()`

```php
invoiceResynced($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_resynced_request)
```

An invoice has been resynced with salesforce

An invoice has been resynced with salesforce

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_resynced_request = new \Lago\LagoPhpClient\Model\InvoiceResyncedRequest(); // \Lago\LagoPhpClient\Model\InvoiceResyncedRequest | Details of the invoice

try {
    $apiInstance->invoiceResynced($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_resynced_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceResynced: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_resynced_request** | [**\Lago\LagoPhpClient\Model\InvoiceResyncedRequest**](../Model/InvoiceResyncedRequest.md)| Details of the invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `invoiceVoided()`

```php
invoiceVoided($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_voided_request)
```

An invoice has been voided

An invoice has been voided

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$invoice_voided_request = new \Lago\LagoPhpClient\Model\InvoiceVoidedRequest(); // \Lago\LagoPhpClient\Model\InvoiceVoidedRequest | Details of the invoice

try {
    $apiInstance->invoiceVoided($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $invoice_voided_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->invoiceVoided: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **invoice_voided_request** | [**\Lago\LagoPhpClient\Model\InvoiceVoidedRequest**](../Model/InvoiceVoidedRequest.md)| Details of the invoice | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentProviderError()`

```php
paymentProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_provider_error_request)
```

An error was raised by a payment provider

An error was raised by a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$payment_provider_error_request = new \Lago\LagoPhpClient\Model\PaymentProviderErrorRequest(); // \Lago\LagoPhpClient\Model\PaymentProviderErrorRequest | Details of the payment provider and of the error

try {
    $apiInstance->paymentProviderError($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_provider_error_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentProviderError: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **payment_provider_error_request** | [**\Lago\LagoPhpClient\Model\PaymentProviderErrorRequest**](../Model/PaymentProviderErrorRequest.md)| Details of the payment provider and of the error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestCreated()`

```php
paymentRequestCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_request_created_request)
```

An new payment request has been created

An new payment request has been created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$payment_request_created_request = new \Lago\LagoPhpClient\Model\PaymentRequestCreatedRequest(); // \Lago\LagoPhpClient\Model\PaymentRequestCreatedRequest | Details of the new payment request

try {
    $apiInstance->paymentRequestCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_request_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentRequestCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **payment_request_created_request** | [**\Lago\LagoPhpClient\Model\PaymentRequestCreatedRequest**](../Model/PaymentRequestCreatedRequest.md)| Details of the new payment request | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestPaymentFailure()`

```php
paymentRequestPaymentFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_request_payment_failure_request)
```

A payment attempt for a payment request has failed on a payment provider

A payment attempt for a payment request has failed on a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$payment_request_payment_failure_request = new \Lago\LagoPhpClient\Model\PaymentRequestPaymentFailureRequest(); // \Lago\LagoPhpClient\Model\PaymentRequestPaymentFailureRequest | Details of the payment request and of the provider error

try {
    $apiInstance->paymentRequestPaymentFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_request_payment_failure_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentRequestPaymentFailure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **payment_request_payment_failure_request** | [**\Lago\LagoPhpClient\Model\PaymentRequestPaymentFailureRequest**](../Model/PaymentRequestPaymentFailureRequest.md)| Details of the payment request and of the provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequestPaymentStatusUpdated()`

```php
paymentRequestPaymentStatusUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_request_payment_status_updated_request)
```

The payment status of an invoice has been updated

The payment status of an invoice has been updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$payment_request_payment_status_updated_request = new \Lago\LagoPhpClient\Model\PaymentRequestPaymentStatusUpdatedRequest(); // \Lago\LagoPhpClient\Model\PaymentRequestPaymentStatusUpdatedRequest | Details of the payment request

try {
    $apiInstance->paymentRequestPaymentStatusUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_request_payment_status_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentRequestPaymentStatusUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **payment_request_payment_status_updated_request** | [**\Lago\LagoPhpClient\Model\PaymentRequestPaymentStatusUpdatedRequest**](../Model/PaymentRequestPaymentStatusUpdatedRequest.md)| Details of the payment request | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `paymentRequiresAction()`

```php
paymentRequiresAction($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_requires_action_request)
```

An action is required to process a payment

An action is required to process a payment

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$payment_requires_action_request = new \Lago\LagoPhpClient\Model\PaymentRequiresActionRequest(); // \Lago\LagoPhpClient\Model\PaymentRequiresActionRequest | Details of the payment and of the required action

try {
    $apiInstance->paymentRequiresAction($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $payment_requires_action_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->paymentRequiresAction: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **payment_requires_action_request** | [**\Lago\LagoPhpClient\Model\PaymentRequiresActionRequest**](../Model/PaymentRequiresActionRequest.md)| Details of the payment and of the required action | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `planCreated()`

```php
planCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $plan_created_request)
```

A new plan has been created

A new plan has been created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$plan_created_request = new \Lago\LagoPhpClient\Model\PlanCreatedRequest(); // \Lago\LagoPhpClient\Model\PlanCreatedRequest | Details of the new plan

try {
    $apiInstance->planCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $plan_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->planCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **plan_created_request** | [**\Lago\LagoPhpClient\Model\PlanCreatedRequest**](../Model/PlanCreatedRequest.md)| Details of the new plan | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `planDeleted()`

```php
planDeleted($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $plan_deleted_request)
```

A plan has been deleted

A plan has been deleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$plan_deleted_request = new \Lago\LagoPhpClient\Model\PlanDeletedRequest(); // \Lago\LagoPhpClient\Model\PlanDeletedRequest | Details of the plan

try {
    $apiInstance->planDeleted($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $plan_deleted_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->planDeleted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **plan_deleted_request** | [**\Lago\LagoPhpClient\Model\PlanDeletedRequest**](../Model/PlanDeletedRequest.md)| Details of the plan | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `planUpdated()`

```php
planUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $plan_updated_request)
```

A plan has been updated

A plan has been updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$plan_updated_request = new \Lago\LagoPhpClient\Model\PlanUpdatedRequest(); // \Lago\LagoPhpClient\Model\PlanUpdatedRequest | Details of the plan

try {
    $apiInstance->planUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $plan_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->planUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **plan_updated_request** | [**\Lago\LagoPhpClient\Model\PlanUpdatedRequest**](../Model/PlanUpdatedRequest.md)| Details of the plan | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionStarted()`

```php
subscriptionStarted($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_started_request)
```

An subscription has started

An subscription has started

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$subscription_started_request = new \Lago\LagoPhpClient\Model\SubscriptionStartedRequest(); // \Lago\LagoPhpClient\Model\SubscriptionStartedRequest | Details of the subscription

try {
    $apiInstance->subscriptionStarted($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_started_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionStarted: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **subscription_started_request** | [**\Lago\LagoPhpClient\Model\SubscriptionStartedRequest**](../Model/SubscriptionStartedRequest.md)| Details of the subscription | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionTerminated()`

```php
subscriptionTerminated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_terminated_request)
```

A subscription has been terminated

A subscription has been terminated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$subscription_terminated_request = new \Lago\LagoPhpClient\Model\SubscriptionTerminatedRequest(); // \Lago\LagoPhpClient\Model\SubscriptionTerminatedRequest | Details of the subscription

try {
    $apiInstance->subscriptionTerminated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_terminated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionTerminated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **subscription_terminated_request** | [**\Lago\LagoPhpClient\Model\SubscriptionTerminatedRequest**](../Model/SubscriptionTerminatedRequest.md)| Details of the subscription | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionTerminationAlert()`

```php
subscriptionTerminationAlert($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_termination_alert_request)
```

A subscription will be terminated in the future

A subscription will be terminated in the future

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$subscription_termination_alert_request = new \Lago\LagoPhpClient\Model\SubscriptionTerminationAlertRequest(); // \Lago\LagoPhpClient\Model\SubscriptionTerminationAlertRequest | Details of the subscription

try {
    $apiInstance->subscriptionTerminationAlert($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_termination_alert_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionTerminationAlert: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **subscription_termination_alert_request** | [**\Lago\LagoPhpClient\Model\SubscriptionTerminationAlertRequest**](../Model/SubscriptionTerminationAlertRequest.md)| Details of the subscription | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionTrialEnded()`

```php
subscriptionTrialEnded($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_trial_ended_request)
```

A subscription trial period has ended

A subscription trial period has ended

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$subscription_trial_ended_request = new \Lago\LagoPhpClient\Model\SubscriptionTrialEndedRequest(); // \Lago\LagoPhpClient\Model\SubscriptionTrialEndedRequest | Details of the subscription

try {
    $apiInstance->subscriptionTrialEnded($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_trial_ended_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionTrialEnded: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **subscription_trial_ended_request** | [**\Lago\LagoPhpClient\Model\SubscriptionTrialEndedRequest**](../Model/SubscriptionTrialEndedRequest.md)| Details of the subscription | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `subscriptionUsageThresholdReached()`

```php
subscriptionUsageThresholdReached($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_usage_threshold_reached_request)
```

A usage threshold has been reached by a subscription

A usage threshold has been reached by a subscription

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$subscription_usage_threshold_reached_request = new \Lago\LagoPhpClient\Model\SubscriptionUsageThresholdReachedRequest(); // \Lago\LagoPhpClient\Model\SubscriptionUsageThresholdReachedRequest | Details of the subscription and of the reached threshold

try {
    $apiInstance->subscriptionUsageThresholdReached($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $subscription_usage_threshold_reached_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->subscriptionUsageThresholdReached: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **subscription_usage_threshold_reached_request** | [**\Lago\LagoPhpClient\Model\SubscriptionUsageThresholdReachedRequest**](../Model/SubscriptionUsageThresholdReachedRequest.md)| Details of the subscription and of the reached threshold | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletDepletedOngoingBalance()`

```php
walletDepletedOngoingBalance($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_depleted_ongoing_balance_request)
```

The balance of a wallet has been depleted

The balance of a wallet has been depleted

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$wallet_depleted_ongoing_balance_request = new \Lago\LagoPhpClient\Model\WalletDepletedOngoingBalanceRequest(); // \Lago\LagoPhpClient\Model\WalletDepletedOngoingBalanceRequest | Details of the wallet

try {
    $apiInstance->walletDepletedOngoingBalance($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_depleted_ongoing_balance_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletDepletedOngoingBalance: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **wallet_depleted_ongoing_balance_request** | [**\Lago\LagoPhpClient\Model\WalletDepletedOngoingBalanceRequest**](../Model/WalletDepletedOngoingBalanceRequest.md)| Details of the wallet | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletTransactionCreated()`

```php
walletTransactionCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_transaction_created_request)
```

A new wallet transaction has been created

A new wallet transaction has been created

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$wallet_transaction_created_request = new \Lago\LagoPhpClient\Model\WalletTransactionCreatedRequest(); // \Lago\LagoPhpClient\Model\WalletTransactionCreatedRequest | Details of the wallet transaction

try {
    $apiInstance->walletTransactionCreated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_transaction_created_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletTransactionCreated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **wallet_transaction_created_request** | [**\Lago\LagoPhpClient\Model\WalletTransactionCreatedRequest**](../Model/WalletTransactionCreatedRequest.md)| Details of the wallet transaction | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletTransactionPaymentFailure()`

```php
walletTransactionPaymentFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_transaction_payment_failure_request)
```

A payment attempt for a wallet transaction has failed on a payment provider

A payment attempt for a wallet transaction has failed on a payment provider

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$wallet_transaction_payment_failure_request = new \Lago\LagoPhpClient\Model\WalletTransactionPaymentFailureRequest(); // \Lago\LagoPhpClient\Model\WalletTransactionPaymentFailureRequest | Details of the wallet transaction and of the provider error

try {
    $apiInstance->walletTransactionPaymentFailure($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_transaction_payment_failure_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletTransactionPaymentFailure: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **wallet_transaction_payment_failure_request** | [**\Lago\LagoPhpClient\Model\WalletTransactionPaymentFailureRequest**](../Model/WalletTransactionPaymentFailureRequest.md)| Details of the wallet transaction and of the provider error | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `walletTransactionUpdated()`

```php
walletTransactionUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_transaction_updated_request)
```

A wallet transaction has been updated

A wallet transaction has been updated

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$x_lago_signature = Ap¶5É¿Î£6ÐfV£ÄºõÔõÔ[DæAâÿüÚ; // string | Signature of the webhook payload
$x_lago_signature_algorithm = hmac; // string | Algorithm used to generate the signature
$x_lago_unique_key = 1a901a90-1a90-1a90-1a90-1a901a901a90; // string | Unique id of the webhook. It can be used for idempotency
$wallet_transaction_updated_request = new \Lago\LagoPhpClient\Model\WalletTransactionUpdatedRequest(); // \Lago\LagoPhpClient\Model\WalletTransactionUpdatedRequest | Details of the wallet transaction

try {
    $apiInstance->walletTransactionUpdated($x_lago_signature, $x_lago_signature_algorithm, $x_lago_unique_key, $wallet_transaction_updated_request);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->walletTransactionUpdated: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **x_lago_signature** | **string**| Signature of the webhook payload | |
| **x_lago_signature_algorithm** | **string**| Algorithm used to generate the signature | |
| **x_lago_unique_key** | **string**| Unique id of the webhook. It can be used for idempotency | |
| **wallet_transaction_updated_request** | [**\Lago\LagoPhpClient\Model\WalletTransactionUpdatedRequest**](../Model/WalletTransactionUpdatedRequest.md)| Details of the wallet transaction | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
