# # BillingEntityObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | A unique identifier for the billing entity in the Lago application |
**code** | **string** | The unique code of the billing entity |
**name** | **string** | The name of the billing entity |
**default_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The default currency of the billing entity |
**document_locale** | **string** | The language of the documents generated for this billing entity |
**document_numbering** | **string** | The type of document numbering for this billing entity: - &#x60;per_customer&#x60;: document numbers are unique per customer - &#x60;per_billing_entity&#x60;: document numbers are unique per billing entity |
**document_number_prefix** | **string** | The prefix used in document numbers for this billing entity | [optional]
**finalize_zero_amount_invoice** | **bool** | Whether to finalize invoices with zero amount for this billing entity |
**invoice_footer** | **string** | The footer text to be displayed on invoices for this billing entity | [optional]
**invoice_grace_period** | **int** | The grace period (in days) for invoice finalization |
**is_default** | **bool** | Whether this billing entity is the default billing entity for the organization. Default billing entity will be used as fallback in services if no billing entity is specified when billing_entity is not provided. Default billing entity is the billing entity that will be used to generate invoices if no billing entity is specified when invoice is created. is the oldest active billing entity and this flag cannot be changed | [optional]
**net_payment_term** | **int** | The net payment term (in days) for this billing entity |
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
**timezone** | [**\Lago\LagoPhpClient\Model\Timezone**](Timezone.md) | The timezone of the billing entity |
**email_settings** | **string[]** | The email notification settings for this billing entity | [optional]
**eu_tax_management** | **bool** | Whether EU tax management is enabled for this billing entity | [optional]
**logo_url** | **string** | The URL of the billing entity&#39;s logo | [optional]
**created_at** | **\DateTime** | The date and time when the billing entity was created |
**updated_at** | **\DateTime** | The date and time when the billing entity was last updated |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
