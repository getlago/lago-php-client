# # AlertThresholdObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique identifier of the usage threshold created by Lago. | [optional]
**recurring** | **bool** | This field when set to &#x60;true&#x60; indicates that the alert will be retrigger when this threshold is reached after the last non-recurring threshold. Only one recurring threshold per alert allowed. | [optional] [default to false]
**value** | **string** | A value that should trigger this alert, formatted as a BigDecimal. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
