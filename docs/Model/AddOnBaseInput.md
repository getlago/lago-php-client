# # AddOnBaseInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the add-on. | [optional]
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. | [optional]
**code** | **string** | Unique code used to identify the add-on. | [optional]
**amount_cents** | **int** | The cost of the add-on in cents, excluding any applicable taxes, that is billed to a customer. By creating a one-off invoice, you will be able to override this value. | [optional]
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the add-on. | [optional]
**description** | **string** | The description of the add-on. | [optional]
**tax_codes** | **string[]** | List of unique code used to identify the taxes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
