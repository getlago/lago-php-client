# # MinimumCommitmentObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the minimum commitment, created by Lago. |
**plan_code** | **string** | The unique code representing the plan to be attached to the customer. | [optional]
**amount_cents** | **int** | The amount of the minimum commitment in cents. |
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the default name will be used as the display name. | [optional]
**interval** | **string** | The interval used for recurring billing. It represents the frequency at which subscription billing occurs. The interval can be one of the following values: &#x60;yearly&#x60;, &#x60;quarterly&#x60;, &#x60;monthly&#x60; or &#x60;weekly&#x60;. | [optional]
**created_at** | **\DateTime** | The date and time when the minimum commitment was created. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the minimum commitment was initially created. |
**updated_at** | **\DateTime** | The date and time when the minimum commitment was updated. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the minimum commitment was initially created. | [optional]
**taxes** | [**\Lago\LagoPhpClient\Model\TaxObject[]**](TaxObject.md) | All taxes applied to the minimum commitment. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
