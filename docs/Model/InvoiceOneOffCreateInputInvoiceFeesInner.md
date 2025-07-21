# # InvoiceOneOffCreateInputInvoiceFeesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**add_on_code** | **string** | The code of the add-on used as invoice item. |
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. | [optional]
**unit_amount_cents** | **int** | The amount of the fee per unit, expressed in cents. By default, the amount of the add-on is used. | [optional]
**units** | **string** | The quantity of units associated with the fee. By default, only 1 unit is added to the invoice. | [optional]
**description** | **string** | This is a description | [optional]
**tax_codes** | **string[]** | List of unique code used to identify the taxes. | [optional]
**skip_psp** | **bool** | If true, the invoice will be created but not sent to the payment provider. | [optional] [default to false]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
