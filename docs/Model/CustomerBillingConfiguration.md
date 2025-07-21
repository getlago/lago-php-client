# # CustomerBillingConfiguration

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_grace_period** | **int** | The grace period, expressed in days, for the invoice. This period refers to the additional time granted to the customer beyond the invoice due date to adjust usage and line items | [optional]
**payment_provider** | **string** | The payment provider utilized to initiate payments for invoices issued by Lago. Accepted values: &#x60;stripe&#x60;, &#x60;adyen&#x60;, &#x60;gocardless&#x60; or null. This field is required if you intend to assign a &#x60;provider_customer_id&#x60;. | [optional]
**payment_provider_code** | **string** | Unique code used to identify a payment provider connection. | [optional]
**provider_customer_id** | **string** | The customer ID within the payment provider&#39;s system. If this field is not provided, Lago has the option to create a new customer record within the payment provider&#39;s system on behalf of the customer | [optional]
**sync** | **bool** | Set this field to &#x60;true&#x60; if you want to create the customer in the payment provider synchronously with the customer creation process in Lago. This option is applicable only when the &#x60;provider_customer_id&#x60; is &#x60;null&#x60; and the customer is automatically created in the payment provider through Lago. By default, the value is set to &#x60;false&#x60; | [optional]
**sync_with_provider** | **bool** | Set this field to &#x60;true&#x60; if you want to create a customer record in the payment provider&#39;s system. This option is applicable only when the &#x60;provider_customer_id&#x60; is null and the &#x60;sync_with_provider&#x60; field is set to &#x60;true&#x60;. By default, the value is set to &#x60;false&#x60; | [optional]
**document_locale** | **string** | The document locale, specified in the ISO 639-1 format. This field represents the language or locale used for the documents issued by Lago | [optional]
**provider_payment_methods** | **string[]** | Specifies the available payment methods that can be used for this customer when &#x60;payment_provider&#x60; is set to &#x60;stripe&#x60;. The &#x60;provider_payment_methods&#x60; field is an array that allows multiple payment options to be defined. If this field is not explicitly set, the payment methods will be set to &#x60;card&#x60;. For now, possible values are &#x60;card&#x60;, &#x60;sepa_debit&#x60;, &#x60;us_bank_account&#x60;, &#x60;bacs_debit&#x60;, &#x60;boleto&#x60;, &#x60;link&#x60;, &#x60;crypto&#x60; and &#x60;customer_balance&#x60;. Note that when &#x60;link&#x60; is selected, &#x60;card&#x60; should also be provided in the array. When &#x60;customer_balance&#x60; is selected, no other payment can be selected. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
