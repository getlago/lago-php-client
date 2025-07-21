# # BillingEntityUpdateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the billing entity | [optional]
**default_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The default currency of the billing entity | [optional]
**document_numbering** | **string** | The type of document numbering for this billing entity: - &#x60;per_customer&#x60;: document numbers are unique per customer - &#x60;per_billing_entity&#x60;: document numbers are unique per billing entity | [optional]
**document_number_prefix** | **string** | The prefix used in document numbers for this billing entity | [optional]
**finalize_zero_amount_invoice** | **bool** | Whether to finalize invoices with zero amount for this billing entity | [optional]
**billing_configuration** | [**\Lago\LagoPhpClient\Model\BillingEntityCreateInputBillingEntityBillingConfiguration**](BillingEntityCreateInputBillingEntityBillingConfiguration.md) |  | [optional]
**net_payment_term** | **int** | The net payment term (in days) for this billing entity | [optional]
**address_line1** | **string** | The first line of the billing address | [optional]
**address_line2** | **string** | The second line of the billing address | [optional]
**city** | **string** | The city of the billing address | [optional]
**state** | **string** | The state of the billing address | [optional]
**country** | [**\Lago\LagoPhpClient\Model\Country**](Country.md) | The country code of the billing address | [optional]
**zipcode** | **string** | The zipcode of the billing address | [optional]
**email** | **string** | The email address of the billing entity | [optional]
**legal_name** | **string** | The legal name of the billing entity | [optional]
**legal_number** | **string** | The legal registration number of the billing entity | [optional]
**tax_identification_number** | **string** | The tax identification number of the billing entity | [optional]
**timezone** | [**\Lago\LagoPhpClient\Model\Timezone**](Timezone.md) | The timezone of the billing entity | [optional]
**tax_codes** | **string[]** | The tax codes that should be associated with this billing entity | [optional]
**email_settings** | **string[]** | The email notification settings for this billing entity | [optional]
**eu_tax_management** | **bool** | Whether EU tax management is enabled for this billing entity | [optional]
**logo** | **string** | The base64 encoded logo image for the billing entity. Sending \&quot;null\&quot; will remove the logo, if any exist. | [optional]
**invoice_custom_section_codes** | **string[]** | The codes of the invoice custom section that should be associated with this billing entity | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
