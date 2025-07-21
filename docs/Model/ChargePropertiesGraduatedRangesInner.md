# # ChargePropertiesGraduatedRangesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**from_value** | **int** | Specifies the lower value of a tier for a &#x60;graduated&#x60; charge model. It must be either 0 or the previous range&#39;s &#x60;to_value + 1&#x60; to maintain the proper sequence of values. |
**to_value** | **int** | Specifies the highest value of a tier for a &#x60;graduated&#x60; charge model. - This value must be higher than the from_value of the same tier. - This value must be null for the last tier. |
**flat_amount** | **string** | The flat amount for a whole tier, excluding tax, for a &#x60;graduated&#x60; charge model. It is expressed as a decimal value. |
**per_unit_amount** | **string** | The unit price, excluding tax, for a specific tier of a &#x60;graduated&#x60; charge model. It is expressed as a decimal value. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
