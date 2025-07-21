# # BillableMetricEvaluateExpressionInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**expression** | **string** | Expression used to calculate the event units. The expression is evalutated for each event and the result is then used to calculate the total aggregated units. Accepted function are &#x60;ceil&#x60;, &#x60;concat&#x60; and &#x60;round&#x60; as well as &#x60;+&#x60;, &#x60;-&#x60;, &#x60;\\&#x60; and &#x60;*&#x60; operations. Round is accepting an optional second parameter to specify the number of decimal. |
**event** | [**\Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionInputEvent**](BillableMetricEvaluateExpressionInputEvent.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
