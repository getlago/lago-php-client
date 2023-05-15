# OpenAPIClient-php

Lago API allows your application to push customer information and metrics (events) from your application to the billing application.


## Installation & Usage

### Requirements

PHP 7.4 and later.
Should also work with PHP 8.0.

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
require_once('/path/to/OpenAPIClient-php/vendor/autoload.php');
```

## Getting Started

Please follow the [installation procedure](#installation--usage) and then run the following:

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');



// Configure Bearer authorization: bearerAuth
$config = OpenAPI\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new OpenAPI\Client\Api\AddOnsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$applied_add_on_input = new \OpenAPI\Client\Model\AppliedAddOnInput(); // \OpenAPI\Client\Model\AppliedAddOnInput | Apply add-on payload

try {
    $result = $apiInstance->applyAddOn($applied_add_on_input);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AddOnsApi->applyAddOn: ', $e->getMessage(), PHP_EOL;
}

```

## API Endpoints

All URIs are relative to *https://api.getlago.com/api/v1*

Class | Method | HTTP request | Description
------------ | ------------- | ------------- | -------------
*AddOnsApi* | [**applyAddOn**](docs/Api/AddOnsApi.md#applyaddon) | **POST** /applied_add_ons | Apply an add-on to a customer
*AddOnsApi* | [**createAddOn**](docs/Api/AddOnsApi.md#createaddon) | **POST** /add_ons | Create a new add-on
*AddOnsApi* | [**destroyAddOn**](docs/Api/AddOnsApi.md#destroyaddon) | **DELETE** /add_ons/{code} | Delete an add-on
*AddOnsApi* | [**findAddOn**](docs/Api/AddOnsApi.md#findaddon) | **GET** /add_ons/{code} | Find add-on by code
*AddOnsApi* | [**findAllAddOns**](docs/Api/AddOnsApi.md#findalladdons) | **GET** /add_ons | Find add-ons
*AddOnsApi* | [**updateAddOn**](docs/Api/AddOnsApi.md#updateaddon) | **PUT** /add_ons/{code} | Update an existing add-on
*BillableMetricsApi* | [**createBillableMetric**](docs/Api/BillableMetricsApi.md#createbillablemetric) | **POST** /billable_metrics | Create a new billable metric
*BillableMetricsApi* | [**destroyBillableMetric**](docs/Api/BillableMetricsApi.md#destroybillablemetric) | **DELETE** /billable_metrics/{code} | Delete a billable metric
*BillableMetricsApi* | [**findAllBillableMetricGroups**](docs/Api/BillableMetricsApi.md#findallbillablemetricgroups) | **GET** /billable_metrics/{code}/groups | Find Billable metric groups
*BillableMetricsApi* | [**findAllBillableMetrics**](docs/Api/BillableMetricsApi.md#findallbillablemetrics) | **GET** /billable_metrics | Find Billable metrics
*BillableMetricsApi* | [**findBillableMetric**](docs/Api/BillableMetricsApi.md#findbillablemetric) | **GET** /billable_metrics/{code} | Find billable metric by code
*BillableMetricsApi* | [**updateBillableMetric**](docs/Api/BillableMetricsApi.md#updatebillablemetric) | **PUT** /billable_metrics/{code} | Update an existing billable metric
*CouponsApi* | [**applyCoupon**](docs/Api/CouponsApi.md#applycoupon) | **POST** /applied_coupons | Apply a coupon to a customer
*CouponsApi* | [**createCoupon**](docs/Api/CouponsApi.md#createcoupon) | **POST** /coupons | Create a new coupon
*CouponsApi* | [**destroyCoupon**](docs/Api/CouponsApi.md#destroycoupon) | **DELETE** /coupons/{code} | Delete a coupon
*CouponsApi* | [**findAllAppliedCoupons**](docs/Api/CouponsApi.md#findallappliedcoupons) | **GET** /applied_coupons | Find Applied Coupons
*CouponsApi* | [**findAllCoupons**](docs/Api/CouponsApi.md#findallcoupons) | **GET** /coupons | Find Coupons
*CouponsApi* | [**findCoupon**](docs/Api/CouponsApi.md#findcoupon) | **GET** /coupons/{code} | Find coupon by code
*CouponsApi* | [**updateCoupon**](docs/Api/CouponsApi.md#updatecoupon) | **PUT** /coupons/{code} | Update an existing coupon
*CreditNotesApi* | [**createCreditNote**](docs/Api/CreditNotesApi.md#createcreditnote) | **POST** /credit_notes | Create a new Credit note
*CreditNotesApi* | [**downloadCreditNote**](docs/Api/CreditNotesApi.md#downloadcreditnote) | **POST** /credit_notes/{id}/download | Download an existing credit note
*CreditNotesApi* | [**findAllCreditNotes**](docs/Api/CreditNotesApi.md#findallcreditnotes) | **GET** /credit_notes | Find Credit notes
*CreditNotesApi* | [**findCreditNote**](docs/Api/CreditNotesApi.md#findcreditnote) | **GET** /credit_notes/{id} | Find credit note
*CreditNotesApi* | [**updateCreditNote**](docs/Api/CreditNotesApi.md#updatecreditnote) | **PUT** /credit_notes/{id} | Update an existing credit note
*CreditNotesApi* | [**voidCreditNote**](docs/Api/CreditNotesApi.md#voidcreditnote) | **PUT** /credit_notes/{id}/void | Void existing credit note
*CustomersApi* | [**createCustomer**](docs/Api/CustomersApi.md#createcustomer) | **POST** /customers | Create a customer
*CustomersApi* | [**deleteAppliedCoupon**](docs/Api/CustomersApi.md#deleteappliedcoupon) | **DELETE** /customers/{customer_external_id}/applied_coupons/{applied_coupon_id} | Delete customer&#39;s appplied coupon
*CustomersApi* | [**destroyCustomer**](docs/Api/CustomersApi.md#destroycustomer) | **DELETE** /customers/{external_id} | Delete a customer
*CustomersApi* | [**findAllCustomers**](docs/Api/CustomersApi.md#findallcustomers) | **GET** /customers | Find customers
*CustomersApi* | [**findCustomer**](docs/Api/CustomersApi.md#findcustomer) | **GET** /customers/{external_id} | Find customer by external ID
*CustomersApi* | [**findCustomerCurrentUsage**](docs/Api/CustomersApi.md#findcustomercurrentusage) | **GET** /customers/{customer_external_id}/current_usage | Find customer current usage
*CustomersApi* | [**getCustomerPortalUrl**](docs/Api/CustomersApi.md#getcustomerportalurl) | **GET** /customers/{customer_external_id}/portal_url | Get customer portal URL
*EventsApi* | [**createBatchEvents**](docs/Api/EventsApi.md#createbatchevents) | **POST** /events/batch | Create batch events
*EventsApi* | [**createEvent**](docs/Api/EventsApi.md#createevent) | **POST** /events | Create a new event
*EventsApi* | [**eventEstimateFees**](docs/Api/EventsApi.md#eventestimatefees) | **POST** /events/estimate_fees | Estimate fees for an instant charge
*EventsApi* | [**findEvent**](docs/Api/EventsApi.md#findevent) | **GET** /events/{id} | Find event by transaction ID
*FeesApi* | [**findAllFees**](docs/Api/FeesApi.md#findallfees) | **GET** /fees | Find all fees
*FeesApi* | [**findFee**](docs/Api/FeesApi.md#findfee) | **GET** /fees/{id} | Find fee by ID
*FeesApi* | [**updateFee**](docs/Api/FeesApi.md#updatefee) | **PUT** /fees/{id} | Update an existing fee
*InvoicesApi* | [**createInvoice**](docs/Api/InvoicesApi.md#createinvoice) | **POST** /invoices | Create a new invoice
*InvoicesApi* | [**downloadInvoice**](docs/Api/InvoicesApi.md#downloadinvoice) | **POST** /invoices/{id}/download | Download an existing invoice
*InvoicesApi* | [**finalizeInvoice**](docs/Api/InvoicesApi.md#finalizeinvoice) | **PUT** /invoices/{id}/finalize | Finalize a draft invoice
*InvoicesApi* | [**findAllInvoices**](docs/Api/InvoicesApi.md#findallinvoices) | **GET** /invoices | Find all invoices
*InvoicesApi* | [**findInvoice**](docs/Api/InvoicesApi.md#findinvoice) | **GET** /invoices/{id} | Find invoice by ID
*InvoicesApi* | [**refreshInvoice**](docs/Api/InvoicesApi.md#refreshinvoice) | **PUT** /invoices/{id}/refresh | Refresh a draft invoice
*InvoicesApi* | [**retryPayment**](docs/Api/InvoicesApi.md#retrypayment) | **POST** /invoices/{id}/retry_payment | Retry invoice payment
*InvoicesApi* | [**updateInvoice**](docs/Api/InvoicesApi.md#updateinvoice) | **PUT** /invoices/{id} | Update an existing invoice status
*OrganizationsApi* | [**updateOrganization**](docs/Api/OrganizationsApi.md#updateorganization) | **PUT** /organizations | Update an existing Organization
*PlansApi* | [**createPlan**](docs/Api/PlansApi.md#createplan) | **POST** /plans | Create a new plan
*PlansApi* | [**destroyPlan**](docs/Api/PlansApi.md#destroyplan) | **DELETE** /plans/{code} | Delete a plan
*PlansApi* | [**findAllPlans**](docs/Api/PlansApi.md#findallplans) | **GET** /plans | Find plans
*PlansApi* | [**findPlan**](docs/Api/PlansApi.md#findplan) | **GET** /plans/{code} | Find plan by code
*PlansApi* | [**updatePlan**](docs/Api/PlansApi.md#updateplan) | **PUT** /plans/{code} | Update an existing plan
*SubscriptionsApi* | [**createSubscription**](docs/Api/SubscriptionsApi.md#createsubscription) | **POST** /subscriptions | Assign a plan to a customer
*SubscriptionsApi* | [**destroySubscription**](docs/Api/SubscriptionsApi.md#destroysubscription) | **DELETE** /subscriptions/{external_id} | Terminate a subscription
*SubscriptionsApi* | [**findAllSubscriptions**](docs/Api/SubscriptionsApi.md#findallsubscriptions) | **GET** /subscriptions | Find subscriptions
*SubscriptionsApi* | [**updateSubscription**](docs/Api/SubscriptionsApi.md#updatesubscription) | **PUT** /subscriptions/{external_id} | Update an existing subscription
*WalletsApi* | [**createWallet**](docs/Api/WalletsApi.md#createwallet) | **POST** /wallets | Create a new wallet
*WalletsApi* | [**createWalletTransaction**](docs/Api/WalletsApi.md#createwallettransaction) | **POST** /wallet_transactions | Create a new wallet transaction
*WalletsApi* | [**destroyWallet**](docs/Api/WalletsApi.md#destroywallet) | **DELETE** /wallets/{id} | Delete a wallet
*WalletsApi* | [**findAllWalletTransactions**](docs/Api/WalletsApi.md#findallwallettransactions) | **GET** /wallets/{id}/wallet_transactions | Find wallet transactions
*WalletsApi* | [**findAllWallets**](docs/Api/WalletsApi.md#findallwallets) | **GET** /wallets | Find wallets
*WalletsApi* | [**findWallet**](docs/Api/WalletsApi.md#findwallet) | **GET** /wallets/{id} | Find wallet
*WalletsApi* | [**updateWallet**](docs/Api/WalletsApi.md#updatewallet) | **PUT** /wallets/{id} | Update an existing wallet
*WebhooksApi* | [**fetchPublicKey**](docs/Api/WebhooksApi.md#fetchpublickey) | **GET** /webhooks/public_key | Fetch webhook public key

## Models

- [AddOn](docs/Model/AddOn.md)
- [AddOnInput](docs/Model/AddOnInput.md)
- [AddOnInputAddOn](docs/Model/AddOnInputAddOn.md)
- [AddOnObject](docs/Model/AddOnObject.md)
- [AddOnsPaginated](docs/Model/AddOnsPaginated.md)
- [ApiResponseBadRequest](docs/Model/ApiResponseBadRequest.md)
- [ApiResponseForbidden](docs/Model/ApiResponseForbidden.md)
- [ApiResponseNotAllowed](docs/Model/ApiResponseNotAllowed.md)
- [ApiResponseNotFound](docs/Model/ApiResponseNotFound.md)
- [ApiResponseUnauthorized](docs/Model/ApiResponseUnauthorized.md)
- [ApiResponseUnprocessableEntity](docs/Model/ApiResponseUnprocessableEntity.md)
- [AppliedAddOn](docs/Model/AppliedAddOn.md)
- [AppliedAddOnInput](docs/Model/AppliedAddOnInput.md)
- [AppliedAddOnInputAppliedAddOn](docs/Model/AppliedAddOnInputAppliedAddOn.md)
- [AppliedAddOnObject](docs/Model/AppliedAddOnObject.md)
- [AppliedCoupon](docs/Model/AppliedCoupon.md)
- [AppliedCouponInput](docs/Model/AppliedCouponInput.md)
- [AppliedCouponInputAppliedCoupon](docs/Model/AppliedCouponInputAppliedCoupon.md)
- [AppliedCouponObject](docs/Model/AppliedCouponObject.md)
- [AppliedCouponObjectExtended](docs/Model/AppliedCouponObjectExtended.md)
- [AppliedCouponObjectExtendedAllOf](docs/Model/AppliedCouponObjectExtendedAllOf.md)
- [AppliedCouponsPaginated](docs/Model/AppliedCouponsPaginated.md)
- [BatchEventInput](docs/Model/BatchEventInput.md)
- [BatchEventInputEvent](docs/Model/BatchEventInputEvent.md)
- [BillableMetric](docs/Model/BillableMetric.md)
- [BillableMetricGroup](docs/Model/BillableMetricGroup.md)
- [BillableMetricGroupValuesInner](docs/Model/BillableMetricGroupValuesInner.md)
- [BillableMetricInput](docs/Model/BillableMetricInput.md)
- [BillableMetricInputBillableMetric](docs/Model/BillableMetricInputBillableMetric.md)
- [BillableMetricObject](docs/Model/BillableMetricObject.md)
- [BillableMetricsPaginated](docs/Model/BillableMetricsPaginated.md)
- [BillingConfigurationCustomer](docs/Model/BillingConfigurationCustomer.md)
- [BillingConfigurationOrganization](docs/Model/BillingConfigurationOrganization.md)
- [ChargeObject](docs/Model/ChargeObject.md)
- [ChargeUsageObject](docs/Model/ChargeUsageObject.md)
- [ChargeUsageObjectBillableMetric](docs/Model/ChargeUsageObjectBillableMetric.md)
- [ChargeUsageObjectCharge](docs/Model/ChargeUsageObjectCharge.md)
- [ChargeUsageObjectGroupsInner](docs/Model/ChargeUsageObjectGroupsInner.md)
- [Coupon](docs/Model/Coupon.md)
- [CouponInput](docs/Model/CouponInput.md)
- [CouponInputCoupon](docs/Model/CouponInputCoupon.md)
- [CouponInputCouponAppliesTo](docs/Model/CouponInputCouponAppliesTo.md)
- [CouponObject](docs/Model/CouponObject.md)
- [CouponsPaginated](docs/Model/CouponsPaginated.md)
- [CreditNote](docs/Model/CreditNote.md)
- [CreditNoteInput](docs/Model/CreditNoteInput.md)
- [CreditNoteInputCreditNote](docs/Model/CreditNoteInputCreditNote.md)
- [CreditNoteInputCreditNoteItemsInner](docs/Model/CreditNoteInputCreditNoteItemsInner.md)
- [CreditNoteItemObject](docs/Model/CreditNoteItemObject.md)
- [CreditNoteObject](docs/Model/CreditNoteObject.md)
- [CreditNoteUpdateInput](docs/Model/CreditNoteUpdateInput.md)
- [CreditNoteUpdateInputCreditNote](docs/Model/CreditNoteUpdateInputCreditNote.md)
- [CreditNotes](docs/Model/CreditNotes.md)
- [CreditObject](docs/Model/CreditObject.md)
- [CreditObjectInvoice](docs/Model/CreditObjectInvoice.md)
- [CreditObjectItem](docs/Model/CreditObjectItem.md)
- [Customer](docs/Model/Customer.md)
- [CustomerInput](docs/Model/CustomerInput.md)
- [CustomerInputCustomer](docs/Model/CustomerInputCustomer.md)
- [CustomerInputCustomerMetadataInner](docs/Model/CustomerInputCustomerMetadataInner.md)
- [CustomerMetadataObject](docs/Model/CustomerMetadataObject.md)
- [CustomerObject](docs/Model/CustomerObject.md)
- [CustomerUsage](docs/Model/CustomerUsage.md)
- [CustomerUsageObject](docs/Model/CustomerUsageObject.md)
- [CustomersPaginated](docs/Model/CustomersPaginated.md)
- [Event](docs/Model/Event.md)
- [EventEstimateFeesInput](docs/Model/EventEstimateFeesInput.md)
- [EventEstimateFeesInputEvent](docs/Model/EventEstimateFeesInputEvent.md)
- [EventInput](docs/Model/EventInput.md)
- [EventInputEvent](docs/Model/EventInputEvent.md)
- [EventObject](docs/Model/EventObject.md)
- [FeeObject](docs/Model/FeeObject.md)
- [FeeObjectItem](docs/Model/FeeObjectItem.md)
- [FeeUpdateInput](docs/Model/FeeUpdateInput.md)
- [FeeUpdateInputInvoice](docs/Model/FeeUpdateInputInvoice.md)
- [Fees](docs/Model/Fees.md)
- [FeesPaginated](docs/Model/FeesPaginated.md)
- [FeesPaginatedAllOf](docs/Model/FeesPaginatedAllOf.md)
- [GetCustomerPortalUrl200Response](docs/Model/GetCustomerPortalUrl200Response.md)
- [GetCustomerPortalUrl200ResponseCustomer](docs/Model/GetCustomerPortalUrl200ResponseCustomer.md)
- [GroupObject](docs/Model/GroupObject.md)
- [GroupPropertiesObject](docs/Model/GroupPropertiesObject.md)
- [GroupsPaginated](docs/Model/GroupsPaginated.md)
- [Invoice](docs/Model/Invoice.md)
- [InvoiceInput](docs/Model/InvoiceInput.md)
- [InvoiceInputInvoice](docs/Model/InvoiceInputInvoice.md)
- [InvoiceInputInvoiceMetadataInner](docs/Model/InvoiceInputInvoiceMetadataInner.md)
- [InvoiceMetadataObject](docs/Model/InvoiceMetadataObject.md)
- [InvoiceObject](docs/Model/InvoiceObject.md)
- [InvoiceObjectExtended](docs/Model/InvoiceObjectExtended.md)
- [InvoiceObjectExtendedAllOf](docs/Model/InvoiceObjectExtendedAllOf.md)
- [InvoiceOneOffInput](docs/Model/InvoiceOneOffInput.md)
- [InvoiceOneOffInputInvoice](docs/Model/InvoiceOneOffInputInvoice.md)
- [InvoiceOneOffInputInvoiceFeesInner](docs/Model/InvoiceOneOffInputInvoiceFeesInner.md)
- [InvoicesPaginated](docs/Model/InvoicesPaginated.md)
- [Organization](docs/Model/Organization.md)
- [OrganizationInput](docs/Model/OrganizationInput.md)
- [OrganizationInputOrganization](docs/Model/OrganizationInputOrganization.md)
- [OrganizationObject](docs/Model/OrganizationObject.md)
- [PaginationMeta](docs/Model/PaginationMeta.md)
- [Plan](docs/Model/Plan.md)
- [PlanInput](docs/Model/PlanInput.md)
- [PlanInputPlan](docs/Model/PlanInputPlan.md)
- [PlanInputPlanChargesInner](docs/Model/PlanInputPlanChargesInner.md)
- [PlanInputPlanChargesInnerGroupPropertiesInner](docs/Model/PlanInputPlanChargesInnerGroupPropertiesInner.md)
- [PlanObject](docs/Model/PlanObject.md)
- [PlansPaginated](docs/Model/PlansPaginated.md)
- [Subscription](docs/Model/Subscription.md)
- [SubscriptionCreateInput](docs/Model/SubscriptionCreateInput.md)
- [SubscriptionCreateInputSubscription](docs/Model/SubscriptionCreateInputSubscription.md)
- [SubscriptionObject](docs/Model/SubscriptionObject.md)
- [SubscriptionUpdateInput](docs/Model/SubscriptionUpdateInput.md)
- [SubscriptionUpdateInputSubscription](docs/Model/SubscriptionUpdateInputSubscription.md)
- [SubscriptionsPaginated](docs/Model/SubscriptionsPaginated.md)
- [Wallet](docs/Model/Wallet.md)
- [WalletInput](docs/Model/WalletInput.md)
- [WalletInputWallet](docs/Model/WalletInputWallet.md)
- [WalletObject](docs/Model/WalletObject.md)
- [WalletTransactionInput](docs/Model/WalletTransactionInput.md)
- [WalletTransactionInputWalletTransaction](docs/Model/WalletTransactionInputWalletTransaction.md)
- [WalletTransactionObject](docs/Model/WalletTransactionObject.md)
- [WalletTransactions](docs/Model/WalletTransactions.md)
- [WalletTransactionsPaginated](docs/Model/WalletTransactionsPaginated.md)
- [WalletUpdateInput](docs/Model/WalletUpdateInput.md)
- [WalletUpdateInputWallet](docs/Model/WalletUpdateInputWallet.md)
- [WalletsPaginated](docs/Model/WalletsPaginated.md)

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

- API version: `0.32.0-beta`
- Build package: `org.openapitools.codegen.languages.PhpClientCodegen`
