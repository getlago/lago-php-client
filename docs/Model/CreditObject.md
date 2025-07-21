# # CreditObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the credit within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the credit&#39;s item record within the Lago system. |
**amount_cents** | **int** | The amount of credit associated with the invoice, expressed in cents. |
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the credit. |
**before_taxes** | **bool** | Indicates whether the credit is applied on the amount before taxes (coupons) or after taxes (credit notes). This flag helps determine the order in which credits are applied to the invoice calculation |
**item** | [**\Lago\LagoPhpClient\Model\CreditObjectItem**](CreditObjectItem.md) |  |
**invoice** | [**\Lago\LagoPhpClient\Model\CreditObjectInvoice**](CreditObjectInvoice.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
