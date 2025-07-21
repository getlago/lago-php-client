# # AddOnObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the add-on, created by Lago. |
**name** | **string** | The name of the add-on. |
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. |
**code** | **string** | Unique code used to identify the add-on. |
**amount_cents** | **int** | The cost of the add-on in cents, excluding any applicable taxes, that is billed to a customer. By creating a one-off invoice, you will be able to override this value. |
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the add-on. |
**description** | **string** | The description of the add-on. |
**created_at** | **\DateTime** | The date and time when the add-on was created. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the add-on was initially created. |
**taxes** | [**\Lago\LagoPhpClient\Model\TaxObject[]**](TaxObject.md) | All taxes applied to the add-on. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
