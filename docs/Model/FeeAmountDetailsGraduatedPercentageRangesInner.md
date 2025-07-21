# # FeeAmountDetailsGraduatedPercentageRangesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | **string** | Total units received in Lago. |
**from_value** | **int** | Lower value of a tier. It is either 0 or the previous range&#39;s &#x60;to_value + 1&#x60;. |
**to_value** | **int** | Highest value of a tier. - This value is higher than the from_value of the same tier. - This value is null for the last tier. |
**flat_unit_amount** | **string** | Flat unit amount within a specified tier. |
**rate** | **string** | Percentage rate applied within a specified tier. |
**per_unit_total_amount** | **string** | Total amount of received units to be charged within a specified tier. |
**total_with_flat_amount** | **string** | Total amount to be charged for a specific tier, taking into account the flat_unit_amount and the per_unit_total_amount. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
