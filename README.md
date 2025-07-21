# lago-php-client

Lago API allows your application to push customer information and metrics (events) from your application to the billing application.


## Installation & Usage

### Requirements

PHP 8.1 and later.

### Composer

To install the bindings via [Composer](https://getcomposer.org/), add the following to `composer.json`:

```json
{
  "repositories": [
    {
      "type": "vcs",
      "url": "https://github.com/GIT_USER_ID/GIT_REPO_ID.git"
    }
  ],
  "require": {
    "GIT_USER_ID/GIT_REPO_ID": "*@dev"
  }
}
```

Then run `composer install`

### Manual Installation

Download the files and include `autoload.php`:

```php
<?php
require_once('/path/to/lago-php-client/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = Lago\LagoPhpClient\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Lago\LagoPhpClient\Api\ActivityLogsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$activity_id = bdc0eda6-ea52-4f72-a46a-94f47a89b546; // string | The Activity Id of the existing activity log.

try {
    $result = $apiInstance->findActivityLog($activity_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ActivityLogsApi->findActivityLog: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.getlago.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*ActivityLogsApi* | [**findActivityLog**](docs/Api/ActivityLogsApi.md#findactivitylog) | **GET** /activity_logs/{activity_id} | Retrieve an activity log
*ActivityLogsApi* | [**findAllActivityLogs**](docs/Api/ActivityLogsApi.md#findallactivitylogs) | **GET** /activity_logs | List all activity logs
*AddOnsApi* | [**createAddOn**](docs/Api/AddOnsApi.md#createaddon) | **POST** /add_ons | Create an add-on
*AddOnsApi* | [**destroyAddOn**](docs/Api/AddOnsApi.md#destroyaddon) | **DELETE** /add_ons/{code} | Delete an add-on
*AddOnsApi* | [**findAddOn**](docs/Api/AddOnsApi.md#findaddon) | **GET** /add_ons/{code} | Retrieve an add-on
*AddOnsApi* | [**findAllAddOns**](docs/Api/AddOnsApi.md#findalladdons) | **GET** /add_ons | List all add-ons
*AddOnsApi* | [**updateAddOn**](docs/Api/AddOnsApi.md#updateaddon) | **PUT** /add_ons/{code} | Update an add-on
*AnalyticsApi* | [**findAllGrossRevenues**](docs/Api/AnalyticsApi.md#findallgrossrevenues) | **GET** /analytics/gross_revenue | List gross revenue
*AnalyticsApi* | [**findAllInvoiceCollections**](docs/Api/AnalyticsApi.md#findallinvoicecollections) | **GET** /analytics/invoice_collection | List of finalized invoices
*AnalyticsApi* | [**findAllInvoicedUsages**](docs/Api/AnalyticsApi.md#findallinvoicedusages) | **GET** /analytics/invoiced_usage | List usage revenue
*AnalyticsApi* | [**findAllMrrs**](docs/Api/AnalyticsApi.md#findallmrrs) | **GET** /analytics/mrr | List MRR
*AnalyticsApi* | [**findAllOverdueBalances**](docs/Api/AnalyticsApi.md#findalloverduebalances) | **GET** /analytics/overdue_balance | List overdue balance
*ApiLogsApi* | [**findAllApiLogs**](docs/Api/ApiLogsApi.md#findallapilogs) | **GET** /api_logs | List all api logs
*ApiLogsApi* | [**findApiLog**](docs/Api/ApiLogsApi.md#findapilog) | **GET** /api_logs/{request_id} | Retrieve an api log
*BillableMetricsApi* | [**createBillableMetric**](docs/Api/BillableMetricsApi.md#createbillablemetric) | **POST** /billable_metrics | Create a billable metric
*BillableMetricsApi* | [**destroyBillableMetric**](docs/Api/BillableMetricsApi.md#destroybillablemetric) | **DELETE** /billable_metrics/{code} | Delete a billable metric
*BillableMetricsApi* | [**evaluateBillableMetricExpression**](docs/Api/BillableMetricsApi.md#evaluatebillablemetricexpression) | **POST** /billable_metrics/evaluate_expression | Evaluate an expression for a billable metric
*BillableMetricsApi* | [**findAllBillableMetrics**](docs/Api/BillableMetricsApi.md#findallbillablemetrics) | **GET** /billable_metrics | List all billable metrics
*BillableMetricsApi* | [**findBillableMetric**](docs/Api/BillableMetricsApi.md#findbillablemetric) | **GET** /billable_metrics/{code} | Retrieve a billable metric
*BillableMetricsApi* | [**updateBillableMetric**](docs/Api/BillableMetricsApi.md#updatebillablemetric) | **PUT** /billable_metrics/{code} | Update a billable metric
*BillingEntitiesApi* | [**createBillingEntity**](docs/Api/BillingEntitiesApi.md#createbillingentity) | **POST** /billing_entities | Create a billing entity
*BillingEntitiesApi* | [**getBillingEntity**](docs/Api/BillingEntitiesApi.md#getbillingentity) | **GET** /billing_entities/{code} | Retrieve a billing entity
*BillingEntitiesApi* | [**listBillingEntities**](docs/Api/BillingEntitiesApi.md#listbillingentities) | **GET** /billing_entities | List all billing entities
*BillingEntitiesApi* | [**updateBillingEntity**](docs/Api/BillingEntitiesApi.md#updatebillingentity) | **PUT** /billing_entities/{code} | Update a billing entity
*CouponsApi* | [**applyCoupon**](docs/Api/CouponsApi.md#applycoupon) | **POST** /applied_coupons | Apply a coupon to a customer
*CouponsApi* | [**createCoupon**](docs/Api/CouponsApi.md#createcoupon) | **POST** /coupons | Create a coupon
*CouponsApi* | [**deleteAppliedCoupon**](docs/Api/CouponsApi.md#deleteappliedcoupon) | **DELETE** /customers/{external_customer_id}/applied_coupons/{applied_coupon_id} | Delete an applied coupon
*CouponsApi* | [**destroyCoupon**](docs/Api/CouponsApi.md#destroycoupon) | **DELETE** /coupons/{code} | Delete a coupon
*CouponsApi* | [**findAllAppliedCoupons**](docs/Api/CouponsApi.md#findallappliedcoupons) | **GET** /applied_coupons | List all applied coupons
*CouponsApi* | [**findAllCoupons**](docs/Api/CouponsApi.md#findallcoupons) | **GET** /coupons | List all coupons
*CouponsApi* | [**findCoupon**](docs/Api/CouponsApi.md#findcoupon) | **GET** /coupons/{code} | Retrieve a coupon
*CouponsApi* | [**updateCoupon**](docs/Api/CouponsApi.md#updatecoupon) | **PUT** /coupons/{code} | Update a coupon
*CreditNotesApi* | [**createCreditNote**](docs/Api/CreditNotesApi.md#createcreditnote) | **POST** /credit_notes | Create a credit note
*CreditNotesApi* | [**downloadCreditNote**](docs/Api/CreditNotesApi.md#downloadcreditnote) | **POST** /credit_notes/{lago_id}/download | Download a credit note PDF
*CreditNotesApi* | [**estimateCreditNote**](docs/Api/CreditNotesApi.md#estimatecreditnote) | **POST** /credit_notes/estimate | Estimate amounts for a new credit note
*CreditNotesApi* | [**findAllCreditNotes**](docs/Api/CreditNotesApi.md#findallcreditnotes) | **GET** /credit_notes | List all credit notes
*CreditNotesApi* | [**findCreditNote**](docs/Api/CreditNotesApi.md#findcreditnote) | **GET** /credit_notes/{lago_id} | Retrieve a credit note
*CreditNotesApi* | [**updateCreditNote**](docs/Api/CreditNotesApi.md#updatecreditnote) | **PUT** /credit_notes/{lago_id} | Update a credit note
*CreditNotesApi* | [**voidCreditNote**](docs/Api/CreditNotesApi.md#voidcreditnote) | **PUT** /credit_notes/{lago_id}/void | Void available credit
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | Create a customer
*CustomersApi* | [**deleteAppliedCoupon**](docs/Api/CustomersApi.md#deleteappliedcoupon) | **DELETE** /customers/{external_customer_id}/applied_coupons/{applied_coupon_id} | Delete an applied coupon
*CustomersApi* | [**destroyCustomer**](docs/Api/CustomersApi.md#destroycustomer) | **DELETE** /customers/{external_customer_id} | Delete a customer
*CustomersApi* | [**findAllCustomerPastUsage**](docs/Api/CustomersApi.md#findallcustomerpastusage) | **GET** /customers/{external_customer_id}/past_usage | Retrieve customer past usage
*CustomersApi* | [**findAllCustomers**](docs/Api/CustomersApi.md#findallcustomers) | **GET** /customers | List all customers
*CustomersApi* | [**findCustomer**](docs/Api/CustomersApi.md#findcustomer) | **GET** /customers/{external_customer_id} | Retrieve a customer
*CustomersApi* | [**findCustomerCurrentUsage**](docs/Api/CustomersApi.md#findcustomercurrentusage) | **GET** /customers/{external_customer_id}/current_usage | Retrieve customer current usage
*CustomersApi* | [**generateCustomerCheckoutURL**](docs/Api/CustomersApi.md#generatecustomercheckouturl) | **POST** /customers/{external_customer_id}/checkout_url | Generate a Customer Payment Provider Checkout URL
*CustomersApi* | [**getCustomerPortalUrl**](docs/Api/CustomersApi.md#getcustomerportalurl) | **GET** /customers/{external_customer_id}/portal_url | Get a customer portal URL
*EventsApi* | [**createBatchEvents**](docs/Api/EventsApi.md#createbatchevents) | **POST** /events/batch | Batch multiple events
*EventsApi* | [**createEvent**](docs/Api/EventsApi.md#createevent) | **POST** /events | Send usage events
*EventsApi* | [**eventBatchEstimateInstantFees**](docs/Api/EventsApi.md#eventbatchestimateinstantfees) | **POST** /events/batch_estimate_instant_fees | Batch estimate instant fees for a pay in advance charge
*EventsApi* | [**eventEstimateFees**](docs/Api/EventsApi.md#eventestimatefees) | **POST** /events/estimate_fees | Estimate fees for a pay in advance charge
*EventsApi* | [**eventEstimateInstantFees**](docs/Api/EventsApi.md#eventestimateinstantfees) | **POST** /events/estimate_instant_fees | Estimate instant fees for a pay in advance charge
*EventsApi* | [**findAllEvents**](docs/Api/EventsApi.md#findallevents) | **GET** /events | List all events
*EventsApi* | [**findEvent**](docs/Api/EventsApi.md#findevent) | **GET** /events/{transaction_id} | Retrieve a specific event
*FeesApi* | [**deleteFee**](docs/Api/FeesApi.md#deletefee) | **DELETE** /fees/{lago_id} | Delete a fee
*FeesApi* | [**findAllFees**](docs/Api/FeesApi.md#findallfees) | **GET** /fees | List all fees
*FeesApi* | [**findFee**](docs/Api/FeesApi.md#findfee) | **GET** /fees/{lago_id} | Retrieve a specific fee
*FeesApi* | [**updateFee**](docs/Api/FeesApi.md#updatefee) | **PUT** /fees/{lago_id} | Update a fee
*InvoicesApi* | [**createInvoice**](docs/Api/InvoicesApi.md#createinvoice) | **POST** /invoices | Create a one-off invoice
*InvoicesApi* | [**downloadInvoice**](docs/Api/InvoicesApi.md#downloadinvoice) | **POST** /invoices/{lago_id}/download | Download an invoice PDF
*InvoicesApi* | [**finalizeInvoice**](docs/Api/InvoicesApi.md#finalizeinvoice) | **PUT** /invoices/{lago_id}/finalize | Finalize a draft invoice
*InvoicesApi* | [**findAllInvoices**](docs/Api/InvoicesApi.md#findallinvoices) | **GET** /invoices | List all invoices
*InvoicesApi* | [**findInvoice**](docs/Api/InvoicesApi.md#findinvoice) | **GET** /invoices/{lago_id} | Retrieve an invoice
*InvoicesApi* | [**invoicePaymentUrl**](docs/Api/InvoicesApi.md#invoicepaymenturl) | **POST** /invoices/{lago_id}/payment_url | Generate a payment URL
*InvoicesApi* | [**invoicePreview**](docs/Api/InvoicesApi.md#invoicepreview) | **POST** /invoices/preview | Create an invoice preview
*InvoicesApi* | [**loseDisputeInvoice**](docs/Api/InvoicesApi.md#losedisputeinvoice) | **POST** /invoices/{lago_id}/lose_dispute | Mark an invoice payment dispute as lost
*InvoicesApi* | [**refreshInvoice**](docs/Api/InvoicesApi.md#refreshinvoice) | **PUT** /invoices/{lago_id}/refresh | Refresh a draft invoice
*InvoicesApi* | [**retryInvoice**](docs/Api/InvoicesApi.md#retryinvoice) | **POST** /invoices/{lago_id}/retry | Retry generation of a failed invoice
*InvoicesApi* | [**retryPayment**](docs/Api/InvoicesApi.md#retrypayment) | **POST** /invoices/{lago_id}/retry_payment | Retry an invoice payment
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /invoices/{lago_id} | Update an invoice
*InvoicesApi* | [**voidInvoice**](docs/Api/InvoicesApi.md#voidinvoice) | **POST** /invoices/{lago_id}/void | Void an invoice
*OrganizationsApi* | [**updateOrganization**](docs/Api/OrganizationsApi.md#updateorganization) | **PUT** /organizations | Update your organization
*PaymentReceiptsApi* | [**findAllPaymentReceipts**](docs/Api/PaymentReceiptsApi.md#findallpaymentreceipts) | **GET** /payment_receipts | List all payment receipts
*PaymentReceiptsApi* | [**findPaymentReceipt**](docs/Api/PaymentReceiptsApi.md#findpaymentreceipt) | **GET** /payment_receipts/{lago_id} | Retrieve a payment receipt
*PaymentRequestsApi* | [**createPaymentRequest**](docs/Api/PaymentRequestsApi.md#createpaymentrequest) | **POST** /payment_requests | Create a payment request
*PaymentRequestsApi* | [**findAllPaymentRequests**](docs/Api/PaymentRequestsApi.md#findallpaymentrequests) | **GET** /payment_requests | List all payment requests
*PaymentsApi* | [**createPayment**](docs/Api/PaymentsApi.md#createpayment) | **POST** /payments | Create a payment
*PaymentsApi* | [**findAllPayments**](docs/Api/PaymentsApi.md#findallpayments) | **GET** /payments | List all payments
*PaymentsApi* | [**findPayment**](docs/Api/PaymentsApi.md#findpayment) | **GET** /payments/{lago_id} | Retrieve a payment
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create a plan
*PlansApi* | [**destroyPlan**](docs/Api/PlansApi.md#destroyplan) | **DELETE** /plans/{code} | Delete a plan
*PlansApi* | [**findAllPlans**](docs/Api/PlansApi.md#findallplans) | **GET** /plans | List all plans
*PlansApi* | [**findPlan**](docs/Api/PlansApi.md#findplan) | **GET** /plans/{code} | Retrieve a plan
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{code} | Update a plan
*SubscriptionsApi* | [**createSubscription**](docs/Api/SubscriptionsApi.md#createsubscription) | **POST** /subscriptions | Assign a plan to a customer
*SubscriptionsApi* | [**createSubscriptionAlert**](docs/Api/SubscriptionsApi.md#createsubscriptionalert) | **POST** /subscriptions/{external_id}/alerts | Create a subscription alert
*SubscriptionsApi* | [**deleteSubscriptionAlert**](docs/Api/SubscriptionsApi.md#deletesubscriptionalert) | **DELETE** /subscriptions/{external_id}/alerts/{code} | Delete a subscription alert
*SubscriptionsApi* | [**destroySubscription**](docs/Api/SubscriptionsApi.md#destroysubscription) | **DELETE** /subscriptions/{external_id} | Terminate a subscription
*SubscriptionsApi* | [**findAllSubscriptions**](docs/Api/SubscriptionsApi.md#findallsubscriptions) | **GET** /subscriptions | List all subscriptions
*SubscriptionsApi* | [**findSubscription**](docs/Api/SubscriptionsApi.md#findsubscription) | **GET** /subscriptions/{external_id} | Retrieve a subscription
*SubscriptionsApi* | [**getSubscriptionAlert**](docs/Api/SubscriptionsApi.md#getsubscriptionalert) | **GET** /subscriptions/{external_id}/alerts/{code} | Retrieve a subscription alert
*SubscriptionsApi* | [**getSubscriptionAlerts**](docs/Api/SubscriptionsApi.md#getsubscriptionalerts) | **GET** /subscriptions/{external_id}/alerts | List subscription alerts
*SubscriptionsApi* | [**getSubscriptionLifetimeUsage**](docs/Api/SubscriptionsApi.md#getsubscriptionlifetimeusage) | **GET** /subscriptions/{external_id}/lifetime_usage | Retrieve subscription lifetime usage
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PUT** /subscriptions/{external_id} | Update a subscription
*SubscriptionsApi* | [**updateSubscriptionAlert**](docs/Api/SubscriptionsApi.md#updatesubscriptionalert) | **PUT** /subscriptions/{external_id}/alerts/{code} | Update a subscription alert
*SubscriptionsApi* | [**updateSubscriptionLifetimeUsage**](docs/Api/SubscriptionsApi.md#updatesubscriptionlifetimeusage) | **PUT** /subscriptions/{external_id}/lifetime_usage | Update a subscription lifetime usage
*TaxesApi* | [**createTax**](docs/Api/TaxesApi.md#createtax) | **POST** /taxes | Create a tax
*TaxesApi* | [**destroyTax**](docs/Api/TaxesApi.md#destroytax) | **DELETE** /taxes/{code} | Delete a tax
*TaxesApi* | [**findAllTaxes**](docs/Api/TaxesApi.md#findalltaxes) | **GET** /taxes | List all taxes
*TaxesApi* | [**findTax**](docs/Api/TaxesApi.md#findtax) | **GET** /taxes/{code} | Retrieve a Tax
*TaxesApi* | [**updateTax**](docs/Api/TaxesApi.md#updatetax) | **PUT** /taxes/{code} | Update a tax
*WalletsApi* | [**createWallet**](docs/Api/WalletsApi.md#createwallet) | **POST** /wallets | Create a wallet
*WalletsApi* | [**createWalletTransaction**](docs/Api/WalletsApi.md#createwallettransaction) | **POST** /wallet_transactions | Top up a wallet
*WalletsApi* | [**destroyWallet**](docs/Api/WalletsApi.md#destroywallet) | **DELETE** /wallets/{lago_id} | Terminate a wallet
*WalletsApi* | [**findAllWalletTransactions**](docs/Api/WalletsApi.md#findallwallettransactions) | **GET** /wallets/{lago_id}/wallet_transactions | List all wallet transactions
*WalletsApi* | [**findAllWallets**](docs/Api/WalletsApi.md#findallwallets) | **GET** /wallets | List all wallets
*WalletsApi* | [**findWallet**](docs/Api/WalletsApi.md#findwallet) | **GET** /wallets/{lago_id} | Retrieve a wallet
*WalletsApi* | [**findWalletTransaction**](docs/Api/WalletsApi.md#findwallettransaction) | **GET** /wallet_transactions/{lago_id} | Retrieve a wallet transaction
*WalletsApi* | [**updateWallet**](docs/Api/WalletsApi.md#updatewallet) | **PUT** /wallets/{lago_id} | Update a wallet
*WalletsApi* | [**walletTransactionPaymentUrl**](docs/Api/WalletsApi.md#wallettransactionpaymenturl) | **POST** /wallet_transactions/{lago_id}/payment_url | Generate a payment URL
*WebhookEndpointsApi* | [**createWebhookEndpoint**](docs/Api/WebhookEndpointsApi.md#createwebhookendpoint) | **POST** /webhook_endpoints | Create a webhook_endpoint
*WebhookEndpointsApi* | [**destroyWebhookEndpoint**](docs/Api/WebhookEndpointsApi.md#destroywebhookendpoint) | **DELETE** /webhook_endpoints/{lago_id} | Delete a webhook endpoint
*WebhookEndpointsApi* | [**findAllWebhookEndpoints**](docs/Api/WebhookEndpointsApi.md#findallwebhookendpoints) | **GET** /webhook_endpoints | List all webhook endpoints
*WebhookEndpointsApi* | [**findWebhookEndpoint**](docs/Api/WebhookEndpointsApi.md#findwebhookendpoint) | **GET** /webhook_endpoints/{lago_id} | Retrieve a webhook endpoint
*WebhookEndpointsApi* | [**updateWebhookEndpoint**](docs/Api/WebhookEndpointsApi.md#updatewebhookendpoint) | **PUT** /webhook_endpoints/{lago_id} | Update a webhook endpoint
*WebhooksApi* | [**fetchPublicKey**](docs/Api/WebhooksApi.md#fetchpublickey) | **GET** /webhooks/public_key | Retrieve webhook public key

## Models

- [ActivityLog](docs/Model/ActivityLog.md)
- [ActivityLogObject](docs/Model/ActivityLogObject.md)
- [ActivityLogsPaginated](docs/Model/ActivityLogsPaginated.md)
- [AddOn](docs/Model/AddOn.md)
- [AddOnBaseInput](docs/Model/AddOnBaseInput.md)
- [AddOnCreateInput](docs/Model/AddOnCreateInput.md)
- [AddOnObject](docs/Model/AddOnObject.md)
- [AddOnUpdateInput](docs/Model/AddOnUpdateInput.md)
- [AddOnsPaginated](docs/Model/AddOnsPaginated.md)
- [Address](docs/Model/Address.md)
- [Alert](docs/Model/Alert.md)
- [AlertBaseInput](docs/Model/AlertBaseInput.md)
- [AlertCreateInput](docs/Model/AlertCreateInput.md)
- [AlertCreateInputAlert](docs/Model/AlertCreateInputAlert.md)
- [AlertObject](docs/Model/AlertObject.md)
- [AlertThresholdBaseObject](docs/Model/AlertThresholdBaseObject.md)
- [AlertThresholdInput](docs/Model/AlertThresholdInput.md)
- [AlertThresholdInputAllOfValue](docs/Model/AlertThresholdInputAllOfValue.md)
- [AlertThresholdObject](docs/Model/AlertThresholdObject.md)
- [AlertTriggeredRequest](docs/Model/AlertTriggeredRequest.md)
- [AlertUpdateInput](docs/Model/AlertUpdateInput.md)
- [Alerts](docs/Model/Alerts.md)
- [ApiErrorBadRequest](docs/Model/ApiErrorBadRequest.md)
- [ApiErrorForbidden](docs/Model/ApiErrorForbidden.md)
- [ApiErrorNotAllowed](docs/Model/ApiErrorNotAllowed.md)
- [ApiErrorNotFound](docs/Model/ApiErrorNotFound.md)
- [ApiErrorUnauthorized](docs/Model/ApiErrorUnauthorized.md)
- [ApiErrorUnprocessableEntity](docs/Model/ApiErrorUnprocessableEntity.md)
- [ApiLog](docs/Model/ApiLog.md)
- [ApiLogObject](docs/Model/ApiLogObject.md)
- [ApiLogsPaginated](docs/Model/ApiLogsPaginated.md)
- [AppliedCoupon](docs/Model/AppliedCoupon.md)
- [AppliedCouponInput](docs/Model/AppliedCouponInput.md)
- [AppliedCouponInputAppliedCoupon](docs/Model/AppliedCouponInputAppliedCoupon.md)
- [AppliedCouponObject](docs/Model/AppliedCouponObject.md)
- [AppliedCouponObjectExtended](docs/Model/AppliedCouponObjectExtended.md)
- [AppliedCouponsPaginated](docs/Model/AppliedCouponsPaginated.md)
- [AppliedUsageThresholdObject](docs/Model/AppliedUsageThresholdObject.md)
- [BaseAppliedTax](docs/Model/BaseAppliedTax.md)
- [BillableMetric](docs/Model/BillableMetric.md)
- [BillableMetricBaseInput](docs/Model/BillableMetricBaseInput.md)
- [BillableMetricCreateInput](docs/Model/BillableMetricCreateInput.md)
- [BillableMetricEvaluateExpressionInput](docs/Model/BillableMetricEvaluateExpressionInput.md)
- [BillableMetricEvaluateExpressionInputEvent](docs/Model/BillableMetricEvaluateExpressionInputEvent.md)
- [BillableMetricEvaluateExpressionInputEventPropertiesValue](docs/Model/BillableMetricEvaluateExpressionInputEventPropertiesValue.md)
- [BillableMetricEvaluateExpressionInputEventTimestamp](docs/Model/BillableMetricEvaluateExpressionInputEventTimestamp.md)
- [BillableMetricEvaluateExpressionResult](docs/Model/BillableMetricEvaluateExpressionResult.md)
- [BillableMetricEvaluateExpressionResultExpressionResult](docs/Model/BillableMetricEvaluateExpressionResultExpressionResult.md)
- [BillableMetricEvaluateExpressionResultExpressionResultValue](docs/Model/BillableMetricEvaluateExpressionResultExpressionResultValue.md)
- [BillableMetricFilterInput](docs/Model/BillableMetricFilterInput.md)
- [BillableMetricFilterObject](docs/Model/BillableMetricFilterObject.md)
- [BillableMetricObject](docs/Model/BillableMetricObject.md)
- [BillableMetricUpdateInput](docs/Model/BillableMetricUpdateInput.md)
- [BillableMetricsPaginated](docs/Model/BillableMetricsPaginated.md)
- [BillingEntityCreateInput](docs/Model/BillingEntityCreateInput.md)
- [BillingEntityCreateInputBillingEntity](docs/Model/BillingEntityCreateInputBillingEntity.md)
- [BillingEntityCreateInputBillingEntityBillingConfiguration](docs/Model/BillingEntityCreateInputBillingEntityBillingConfiguration.md)
- [BillingEntityObject](docs/Model/BillingEntityObject.md)
- [BillingEntityObjectExtended](docs/Model/BillingEntityObjectExtended.md)
- [BillingEntityUpdateInput](docs/Model/BillingEntityUpdateInput.md)
- [BillingPeriodObject](docs/Model/BillingPeriodObject.md)
- [ChargeFilterInput](docs/Model/ChargeFilterInput.md)
- [ChargeFilterObject](docs/Model/ChargeFilterObject.md)
- [ChargeObject](docs/Model/ChargeObject.md)
- [ChargeProperties](docs/Model/ChargeProperties.md)
- [ChargePropertiesGraduatedPercentageRangesInner](docs/Model/ChargePropertiesGraduatedPercentageRangesInner.md)
- [ChargePropertiesGraduatedRangesInner](docs/Model/ChargePropertiesGraduatedRangesInner.md)
- [ChargePropertiesVolumeRangesInner](docs/Model/ChargePropertiesVolumeRangesInner.md)
- [Country](docs/Model/Country.md)
- [CountryOrNull](docs/Model/CountryOrNull.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponBaseInput](docs/Model/CouponBaseInput.md)
- [CouponBaseInputAppliesTo](docs/Model/CouponBaseInputAppliesTo.md)
- [CouponCreateInput](docs/Model/CouponCreateInput.md)
- [CouponObject](docs/Model/CouponObject.md)
- [CouponUpdateInput](docs/Model/CouponUpdateInput.md)
- [CouponsPaginated](docs/Model/CouponsPaginated.md)
- [CreditNote](docs/Model/CreditNote.md)
- [CreditNoteAppliedTaxObject](docs/Model/CreditNoteAppliedTaxObject.md)
- [CreditNoteCreateInput](docs/Model/CreditNoteCreateInput.md)
- [CreditNoteCreateInputCreditNote](docs/Model/CreditNoteCreateInputCreditNote.md)
- [CreditNoteCreateInputCreditNoteItemsInner](docs/Model/CreditNoteCreateInputCreditNoteItemsInner.md)
- [CreditNoteCreatedRequest](docs/Model/CreditNoteCreatedRequest.md)
- [CreditNoteErrorDetailsObject](docs/Model/CreditNoteErrorDetailsObject.md)
- [CreditNoteEstimateInput](docs/Model/CreditNoteEstimateInput.md)
- [CreditNoteEstimateInputCreditNote](docs/Model/CreditNoteEstimateInputCreditNote.md)
- [CreditNoteEstimated](docs/Model/CreditNoteEstimated.md)
- [CreditNoteEstimatedEstimatedCreditNote](docs/Model/CreditNoteEstimatedEstimatedCreditNote.md)
- [CreditNoteEstimatedEstimatedCreditNoteAppliedTaxesInner](docs/Model/CreditNoteEstimatedEstimatedCreditNoteAppliedTaxesInner.md)
- [CreditNoteEstimatedEstimatedCreditNoteItemsInner](docs/Model/CreditNoteEstimatedEstimatedCreditNoteItemsInner.md)
- [CreditNoteExtendedObject](docs/Model/CreditNoteExtendedObject.md)
- [CreditNoteGeneratedRequest](docs/Model/CreditNoteGeneratedRequest.md)
- [CreditNoteItemObject](docs/Model/CreditNoteItemObject.md)
- [CreditNoteObject](docs/Model/CreditNoteObject.md)
- [CreditNotePaymentProviderRefundError](docs/Model/CreditNotePaymentProviderRefundError.md)
- [CreditNoteProviderRefundFailureRequest](docs/Model/CreditNoteProviderRefundFailureRequest.md)
- [CreditNoteUpdateInput](docs/Model/CreditNoteUpdateInput.md)
- [CreditNoteUpdateInputCreditNote](docs/Model/CreditNoteUpdateInputCreditNote.md)
- [CreditNotesPaginated](docs/Model/CreditNotesPaginated.md)
- [CreditObject](docs/Model/CreditObject.md)
- [CreditObjectInvoice](docs/Model/CreditObjectInvoice.md)
- [CreditObjectItem](docs/Model/CreditObjectItem.md)
- [Currency](docs/Model/Currency.md)
- [CurrencyOrNull](docs/Model/CurrencyOrNull.md)
- [Customer](docs/Model/Customer.md)
- [CustomerAccountingProviderCreatedRequest](docs/Model/CustomerAccountingProviderCreatedRequest.md)
- [CustomerAccountingProviderErrorRequest](docs/Model/CustomerAccountingProviderErrorRequest.md)
- [CustomerBaseObject](docs/Model/CustomerBaseObject.md)
- [CustomerBillingConfiguration](docs/Model/CustomerBillingConfiguration.md)
- [CustomerChargeFiltersUsageObjectInner](docs/Model/CustomerChargeFiltersUsageObjectInner.md)
- [CustomerChargeGroupedUsageObjectInner](docs/Model/CustomerChargeGroupedUsageObjectInner.md)
- [CustomerChargeUsageObject](docs/Model/CustomerChargeUsageObject.md)
- [CustomerChargeUsageObjectBillableMetric](docs/Model/CustomerChargeUsageObjectBillableMetric.md)
- [CustomerChargeUsageObjectCharge](docs/Model/CustomerChargeUsageObjectCharge.md)
- [CustomerCheckoutUrl](docs/Model/CustomerCheckoutUrl.md)
- [CustomerCheckoutUrlCustomer](docs/Model/CustomerCheckoutUrlCustomer.md)
- [CustomerCheckoutUrlGeneratedRequest](docs/Model/CustomerCheckoutUrlGeneratedRequest.md)
- [CustomerCreateInput](docs/Model/CustomerCreateInput.md)
- [CustomerCreateInputCustomer](docs/Model/CustomerCreateInputCustomer.md)
- [CustomerCreateInputCustomerIntegrationCustomersInner](docs/Model/CustomerCreateInputCustomerIntegrationCustomersInner.md)
- [CustomerCreateInputCustomerMetadataInner](docs/Model/CustomerCreateInputCustomerMetadataInner.md)
- [CustomerCreatedRequest](docs/Model/CustomerCreatedRequest.md)
- [CustomerCrmProviderCreatedRequest](docs/Model/CustomerCrmProviderCreatedRequest.md)
- [CustomerCrmProviderErrorRequest](docs/Model/CustomerCrmProviderErrorRequest.md)
- [CustomerIntegratrionErrorObject](docs/Model/CustomerIntegratrionErrorObject.md)
- [CustomerIntegratrionErrorObjectProviderError](docs/Model/CustomerIntegratrionErrorObjectProviderError.md)
- [CustomerMetadata](docs/Model/CustomerMetadata.md)
- [CustomerObject](docs/Model/CustomerObject.md)
- [CustomerObjectExtended](docs/Model/CustomerObjectExtended.md)
- [CustomerPastUsage](docs/Model/CustomerPastUsage.md)
- [CustomerPaymentProviderCreatedRequest](docs/Model/CustomerPaymentProviderCreatedRequest.md)
- [CustomerPaymentProviderErrorObject](docs/Model/CustomerPaymentProviderErrorObject.md)
- [CustomerPaymentProviderErrorRequest](docs/Model/CustomerPaymentProviderErrorRequest.md)
- [CustomerTaxProviderErrorObject](docs/Model/CustomerTaxProviderErrorObject.md)
- [CustomerTaxProviderErrorRequest](docs/Model/CustomerTaxProviderErrorRequest.md)
- [CustomerUpdatedRequest](docs/Model/CustomerUpdatedRequest.md)
- [CustomerUsage](docs/Model/CustomerUsage.md)
- [CustomerUsageObject](docs/Model/CustomerUsageObject.md)
- [CustomerViesCheckObject](docs/Model/CustomerViesCheckObject.md)
- [CustomerViesCheckObjectAllOfViesCheck](docs/Model/CustomerViesCheckObjectAllOfViesCheck.md)
- [CustomerViesCheckRequest](docs/Model/CustomerViesCheckRequest.md)
- [CustomersPaginated](docs/Model/CustomersPaginated.md)
- [ErrorDetailObject](docs/Model/ErrorDetailObject.md)
- [Event](docs/Model/Event.md)
- [EventBatchEstimateInstantFeesInput](docs/Model/EventBatchEstimateInstantFeesInput.md)
- [EventBatchInput](docs/Model/EventBatchInput.md)
- [EventCreated](docs/Model/EventCreated.md)
- [EventCreatedEvent](docs/Model/EventCreatedEvent.md)
- [EventErrorRequest](docs/Model/EventErrorRequest.md)
- [EventErrorsObject](docs/Model/EventErrorsObject.md)
- [EventEstimateFeesInput](docs/Model/EventEstimateFeesInput.md)
- [EventEstimateFeesInputEvent](docs/Model/EventEstimateFeesInputEvent.md)
- [EventEstimateInstantFeesInput](docs/Model/EventEstimateInstantFeesInput.md)
- [EventEstimateInstantFeesInputEvent](docs/Model/EventEstimateInstantFeesInputEvent.md)
- [EventInput](docs/Model/EventInput.md)
- [EventInputObject](docs/Model/EventInputObject.md)
- [EventInputObjectTimestamp](docs/Model/EventInputObjectTimestamp.md)
- [EventObject](docs/Model/EventObject.md)
- [EventObjectProperties](docs/Model/EventObjectProperties.md)
- [EventsCreated](docs/Model/EventsCreated.md)
- [EventsErrorsObject](docs/Model/EventsErrorsObject.md)
- [EventsErrorsRequest](docs/Model/EventsErrorsRequest.md)
- [EventsPaginated](docs/Model/EventsPaginated.md)
- [Fee](docs/Model/Fee.md)
- [FeeAmountDetails](docs/Model/FeeAmountDetails.md)
- [FeeAmountDetailsGraduatedPercentageRangesInner](docs/Model/FeeAmountDetailsGraduatedPercentageRangesInner.md)
- [FeeAmountDetailsGraduatedRangesInner](docs/Model/FeeAmountDetailsGraduatedRangesInner.md)
- [FeeAmountDetailsVolumeRangesInner](docs/Model/FeeAmountDetailsVolumeRangesInner.md)
- [FeeAppliedTaxObject](docs/Model/FeeAppliedTaxObject.md)
- [FeeCreatedRequest](docs/Model/FeeCreatedRequest.md)
- [FeeEstimateObject](docs/Model/FeeEstimateObject.md)
- [FeeEstimateObjectItem](docs/Model/FeeEstimateObjectItem.md)
- [FeeObject](docs/Model/FeeObject.md)
- [FeeObjectItem](docs/Model/FeeObjectItem.md)
- [FeeTaxProviderErrorObject](docs/Model/FeeTaxProviderErrorObject.md)
- [FeeTaxProviderErrorRequest](docs/Model/FeeTaxProviderErrorRequest.md)
- [FeeUpdateInput](docs/Model/FeeUpdateInput.md)
- [FeeUpdateInputFee](docs/Model/FeeUpdateInputFee.md)
- [Fees](docs/Model/Fees.md)
- [FeesEstimate](docs/Model/FeesEstimate.md)
- [FeesPaginated](docs/Model/FeesPaginated.md)
- [FindAllApiLogsHttpStatusesParameterInner](docs/Model/FindAllApiLogsHttpStatusesParameterInner.md)
- [GetBillingEntity200Response](docs/Model/GetBillingEntity200Response.md)
- [GetCustomerPortalUrl200Response](docs/Model/GetCustomerPortalUrl200Response.md)
- [GetCustomerPortalUrl200ResponseCustomer](docs/Model/GetCustomerPortalUrl200ResponseCustomer.md)
- [GrossRevenueObject](docs/Model/GrossRevenueObject.md)
- [GrossRevenues](docs/Model/GrossRevenues.md)
- [IntegrationCustomer](docs/Model/IntegrationCustomer.md)
- [IntegrationProviderErrorObject](docs/Model/IntegrationProviderErrorObject.md)
- [IntegrationProviderErrorRequest](docs/Model/IntegrationProviderErrorRequest.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceAddOnAddedRequest](docs/Model/InvoiceAddOnAddedRequest.md)
- [InvoiceAppliedTaxObject](docs/Model/InvoiceAppliedTaxObject.md)
- [InvoiceBaseObject](docs/Model/InvoiceBaseObject.md)
- [InvoiceCollectionObject](docs/Model/InvoiceCollectionObject.md)
- [InvoiceCollections](docs/Model/InvoiceCollections.md)
- [InvoiceCreatedRequest](docs/Model/InvoiceCreatedRequest.md)
- [InvoiceCustomSectionObject](docs/Model/InvoiceCustomSectionObject.md)
- [InvoiceDraftedRequest](docs/Model/InvoiceDraftedRequest.md)
- [InvoiceGeneratedRequest](docs/Model/InvoiceGeneratedRequest.md)
- [InvoiceMetadataObject](docs/Model/InvoiceMetadataObject.md)
- [InvoiceObject](docs/Model/InvoiceObject.md)
- [InvoiceObjectExtended](docs/Model/InvoiceObjectExtended.md)
- [InvoiceOneOffCreateInput](docs/Model/InvoiceOneOffCreateInput.md)
- [InvoiceOneOffCreateInputInvoice](docs/Model/InvoiceOneOffCreateInputInvoice.md)
- [InvoiceOneOffCreateInputInvoiceFeesInner](docs/Model/InvoiceOneOffCreateInputInvoiceFeesInner.md)
- [InvoiceOneOffCreatedRequest](docs/Model/InvoiceOneOffCreatedRequest.md)
- [InvoicePaidCreditAddedRequest](docs/Model/InvoicePaidCreditAddedRequest.md)
- [InvoicePaymentDisputeLostRequest](docs/Model/InvoicePaymentDisputeLostRequest.md)
- [InvoicePaymentFailureObject](docs/Model/InvoicePaymentFailureObject.md)
- [InvoicePaymentFailureRequest](docs/Model/InvoicePaymentFailureRequest.md)
- [InvoicePaymentOverdueRequest](docs/Model/InvoicePaymentOverdueRequest.md)
- [InvoicePaymentStatusUpdatedRequest](docs/Model/InvoicePaymentStatusUpdatedRequest.md)
- [InvoicePaymentUrl](docs/Model/InvoicePaymentUrl.md)
- [InvoicePaymentUrlInvoicePaymentDetails](docs/Model/InvoicePaymentUrlInvoicePaymentDetails.md)
- [InvoicePreviewInput](docs/Model/InvoicePreviewInput.md)
- [InvoicePreviewInputCouponsInner](docs/Model/InvoicePreviewInputCouponsInner.md)
- [InvoicePreviewInputCustomer](docs/Model/InvoicePreviewInputCustomer.md)
- [InvoicePreviewInputCustomerIntegrationCustomersInner](docs/Model/InvoicePreviewInputCustomerIntegrationCustomersInner.md)
- [InvoicePreviewInputSubscriptions](docs/Model/InvoicePreviewInputSubscriptions.md)
- [InvoiceResyncedRequest](docs/Model/InvoiceResyncedRequest.md)
- [InvoiceUpdateInput](docs/Model/InvoiceUpdateInput.md)
- [InvoiceUpdateInputInvoice](docs/Model/InvoiceUpdateInputInvoice.md)
- [InvoiceUpdateInputInvoiceMetadataInner](docs/Model/InvoiceUpdateInputInvoiceMetadataInner.md)
- [InvoiceVoidInput](docs/Model/InvoiceVoidInput.md)
- [InvoiceVoidedRequest](docs/Model/InvoiceVoidedRequest.md)
- [InvoicedUsageObject](docs/Model/InvoicedUsageObject.md)
- [InvoicedUsages](docs/Model/InvoicedUsages.md)
- [InvoicesPaginated](docs/Model/InvoicesPaginated.md)
- [LifetimeUsage](docs/Model/LifetimeUsage.md)
- [LifetimeUsageInput](docs/Model/LifetimeUsageInput.md)
- [LifetimeUsageInputLifetimeUsage](docs/Model/LifetimeUsageInputLifetimeUsage.md)
- [LifetimeUsageObject](docs/Model/LifetimeUsageObject.md)
- [LifetimeUsageThresholdObject](docs/Model/LifetimeUsageThresholdObject.md)
- [ListBillingEntities200Response](docs/Model/ListBillingEntities200Response.md)
- [MinimumCommitmentInput](docs/Model/MinimumCommitmentInput.md)
- [MinimumCommitmentObject](docs/Model/MinimumCommitmentObject.md)
- [MrrObject](docs/Model/MrrObject.md)
- [Mrrs](docs/Model/Mrrs.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationBillingConfiguration](docs/Model/OrganizationBillingConfiguration.md)
- [OrganizationObject](docs/Model/OrganizationObject.md)
- [OrganizationUpdateInput](docs/Model/OrganizationUpdateInput.md)
- [OrganizationUpdateInputOrganization](docs/Model/OrganizationUpdateInputOrganization.md)
- [OverdueBalanceObject](docs/Model/OverdueBalanceObject.md)
- [OverdueBalances](docs/Model/OverdueBalances.md)
- [PaginationMeta](docs/Model/PaginationMeta.md)
- [Payment](docs/Model/Payment.md)
- [PaymentCreateInput](docs/Model/PaymentCreateInput.md)
- [PaymentCreateInputPayment](docs/Model/PaymentCreateInputPayment.md)
- [PaymentManualObject](docs/Model/PaymentManualObject.md)
- [PaymentObject](docs/Model/PaymentObject.md)
- [PaymentProviderErrorObject](docs/Model/PaymentProviderErrorObject.md)
- [PaymentProviderErrorRequest](docs/Model/PaymentProviderErrorRequest.md)
- [PaymentReceipt](docs/Model/PaymentReceipt.md)
- [PaymentReceiptObject](docs/Model/PaymentReceiptObject.md)
- [PaymentReceiptsPaginated](docs/Model/PaymentReceiptsPaginated.md)
- [PaymentRequest](docs/Model/PaymentRequest.md)
- [PaymentRequestCreateInput](docs/Model/PaymentRequestCreateInput.md)
- [PaymentRequestCreateInputPaymentRequest](docs/Model/PaymentRequestCreateInputPaymentRequest.md)
- [PaymentRequestCreatedRequest](docs/Model/PaymentRequestCreatedRequest.md)
- [PaymentRequestObject](docs/Model/PaymentRequestObject.md)
- [PaymentRequestPaymentFailureObject](docs/Model/PaymentRequestPaymentFailureObject.md)
- [PaymentRequestPaymentFailureRequest](docs/Model/PaymentRequestPaymentFailureRequest.md)
- [PaymentRequestPaymentStatusUpdatedRequest](docs/Model/PaymentRequestPaymentStatusUpdatedRequest.md)
- [PaymentRequestsPaginated](docs/Model/PaymentRequestsPaginated.md)
- [PaymentRequiresActionRequest](docs/Model/PaymentRequiresActionRequest.md)
- [PaymentsPaginated](docs/Model/PaymentsPaginated.md)
- [Plan](docs/Model/Plan.md)
- [PlanCreateInput](docs/Model/PlanCreateInput.md)
- [PlanCreateInputPlan](docs/Model/PlanCreateInputPlan.md)
- [PlanCreateInputPlanChargesInner](docs/Model/PlanCreateInputPlanChargesInner.md)
- [PlanCreatedRequest](docs/Model/PlanCreatedRequest.md)
- [PlanDeletedRequest](docs/Model/PlanDeletedRequest.md)
- [PlanObject](docs/Model/PlanObject.md)
- [PlanOverridesObject](docs/Model/PlanOverridesObject.md)
- [PlanOverridesObjectChargesInner](docs/Model/PlanOverridesObjectChargesInner.md)
- [PlanUpdateInput](docs/Model/PlanUpdateInput.md)
- [PlanUpdateInputPlan](docs/Model/PlanUpdateInputPlan.md)
- [PlanUpdateInputPlanChargesInner](docs/Model/PlanUpdateInputPlanChargesInner.md)
- [PlanUpdatedRequest](docs/Model/PlanUpdatedRequest.md)
- [PlansPaginated](docs/Model/PlansPaginated.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionCreateInput](docs/Model/SubscriptionCreateInput.md)
- [SubscriptionCreateInputSubscription](docs/Model/SubscriptionCreateInputSubscription.md)
- [SubscriptionObject](docs/Model/SubscriptionObject.md)
- [SubscriptionObjectExtended](docs/Model/SubscriptionObjectExtended.md)
- [SubscriptionStartedRequest](docs/Model/SubscriptionStartedRequest.md)
- [SubscriptionTerminatedRequest](docs/Model/SubscriptionTerminatedRequest.md)
- [SubscriptionTerminationAlertRequest](docs/Model/SubscriptionTerminationAlertRequest.md)
- [SubscriptionTrialEndedRequest](docs/Model/SubscriptionTrialEndedRequest.md)
- [SubscriptionUpdateInput](docs/Model/SubscriptionUpdateInput.md)
- [SubscriptionUpdateInputSubscription](docs/Model/SubscriptionUpdateInputSubscription.md)
- [SubscriptionUsageThresholdReachedRequest](docs/Model/SubscriptionUsageThresholdReachedRequest.md)
- [SubscriptionWithCustomerObject](docs/Model/SubscriptionWithCustomerObject.md)
- [SubscriptionWithThresholdObject](docs/Model/SubscriptionWithThresholdObject.md)
- [SubscriptionsPaginated](docs/Model/SubscriptionsPaginated.md)
- [Tax](docs/Model/Tax.md)
- [TaxBaseInput](docs/Model/TaxBaseInput.md)
- [TaxCreateInput](docs/Model/TaxCreateInput.md)
- [TaxObject](docs/Model/TaxObject.md)
- [TaxUpdateInput](docs/Model/TaxUpdateInput.md)
- [TaxesPaginated](docs/Model/TaxesPaginated.md)
- [Timezone](docs/Model/Timezone.md)
- [TimezoneOrNull](docs/Model/TimezoneOrNull.md)
- [TriggeredAlertObject](docs/Model/TriggeredAlertObject.md)
- [UsageThresholdInput](docs/Model/UsageThresholdInput.md)
- [UsageThresholdObject](docs/Model/UsageThresholdObject.md)
- [Wallet](docs/Model/Wallet.md)
- [WalletCreateInput](docs/Model/WalletCreateInput.md)
- [WalletCreateInputWallet](docs/Model/WalletCreateInputWallet.md)
- [WalletCreateInputWalletAppliesTo](docs/Model/WalletCreateInputWalletAppliesTo.md)
- [WalletCreateInputWalletRecurringTransactionRulesInner](docs/Model/WalletCreateInputWalletRecurringTransactionRulesInner.md)
- [WalletCreateInputWalletTransactionMetadataInner](docs/Model/WalletCreateInputWalletTransactionMetadataInner.md)
- [WalletDepletedOngoingBalanceRequest](docs/Model/WalletDepletedOngoingBalanceRequest.md)
- [WalletObject](docs/Model/WalletObject.md)
- [WalletObjectAppliesTo](docs/Model/WalletObjectAppliesTo.md)
- [WalletRecurringTransactionRule](docs/Model/WalletRecurringTransactionRule.md)
- [WalletRecurringTransactionRuleTransactionMetadataInner](docs/Model/WalletRecurringTransactionRuleTransactionMetadataInner.md)
- [WalletTransactionCreateInput](docs/Model/WalletTransactionCreateInput.md)
- [WalletTransactionCreateInputWalletTransaction](docs/Model/WalletTransactionCreateInputWalletTransaction.md)
- [WalletTransactionCreatedRequest](docs/Model/WalletTransactionCreatedRequest.md)
- [WalletTransactionObject](docs/Model/WalletTransactionObject.md)
- [WalletTransactionPaymentFailureObject](docs/Model/WalletTransactionPaymentFailureObject.md)
- [WalletTransactionPaymentFailureRequest](docs/Model/WalletTransactionPaymentFailureRequest.md)
- [WalletTransactionPaymentUrl](docs/Model/WalletTransactionPaymentUrl.md)
- [WalletTransactionPaymentUrlWalletTransactionPaymentDetails](docs/Model/WalletTransactionPaymentUrlWalletTransactionPaymentDetails.md)
- [WalletTransactionUpdatedRequest](docs/Model/WalletTransactionUpdatedRequest.md)
- [WalletTransactions](docs/Model/WalletTransactions.md)
- [WalletTransactionsPaginated](docs/Model/WalletTransactionsPaginated.md)
- [WalletUpdateInput](docs/Model/WalletUpdateInput.md)
- [WalletUpdateInputWallet](docs/Model/WalletUpdateInputWallet.md)
- [WalletUpdateInputWalletRecurringTransactionRulesInner](docs/Model/WalletUpdateInputWalletRecurringTransactionRulesInner.md)
- [WalletsPaginated](docs/Model/WalletsPaginated.md)
- [WebhookEndpoint](docs/Model/WebhookEndpoint.md)
- [WebhookEndpointCreateInput](docs/Model/WebhookEndpointCreateInput.md)
- [WebhookEndpointCreateInputWebhookEndpoint](docs/Model/WebhookEndpointCreateInputWebhookEndpoint.md)
- [WebhookEndpointObject](docs/Model/WebhookEndpointObject.md)
- [WebhookEndpointUpdateInput](docs/Model/WebhookEndpointUpdateInput.md)
- [WebhookEndpointsPaginated](docs/Model/WebhookEndpointsPaginated.md)

## Authorization

Authentication schemes defined for the API:
### bearerAuth

- **Type**: Bearer authentication

## Tests

To run the tests, use:

```bash
composer install
vendor/bin/phpunit
```

## Author

tech@getlago.com

## About this package

This PHP package is automatically generated by the [OpenAPI Generator](https://openapi-generator.tech) project:

- API version: `1.31.0`
    - Package version: `1.31.0`
    - Generator version: `7.14.0`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
