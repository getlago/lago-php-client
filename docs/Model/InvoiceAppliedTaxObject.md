# # InvoiceAppliedTaxObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_invoice_id** | **string** | Unique identifier of the invoice, created by Lago. | [optional]
**fees_amount_cents** | **int** | Fees total amount on which the tax is applied | [optional]
**lago_id** | **string** | Unique identifier of the applied tax, created by Lago. | [optional]
**lago_tax_id** | **string** | Unique identifier of the tax, created by Lago. | [optional]
**tax_name** | **string** | Name of the tax. | [optional]
**tax_code** | **string** | Unique code used to identify the tax associated with the API request. | [optional]
**tax_rate** | **float** | The percentage rate of the tax | [optional]
**tax_description** | **string** | Internal description of the taxe | [optional]
**amount_cents** | **int** | Amount of the tax | [optional]
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | Currency of the tax | [optional]
**created_at** | **\DateTime** | The date and time when the applied tax was created. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the applied tax was initially created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
