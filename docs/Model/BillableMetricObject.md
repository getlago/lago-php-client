# # BillableMetricObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the billable metric created by Lago. |
**name** | **string** | Name of the billable metric. |
**code** | **string** | Unique code used to identify the billable metric associated with the API request. This code associates each event with the correct metric. |
**description** | **string** | Internal description of the billable metric. | [optional]
**recurring** | **bool** | Defines if the billable metric is persisted billing period over billing period.  - If set to &#x60;true&#x60;: the accumulated number of units calculated from the previous billing period is persisted to the next billing period. - If set to &#x60;false&#x60;: the accumulated number of units is reset to 0 at the end of the billing period. - If not defined in the request, default value is &#x60;false&#x60;. |
**rounding_function** | **string** | Refers to the numeric value or mathematical expression that will be rounded based on the calculated number of billing units. Possible values are &#x60;round&#x60;, &#x60;ceil&#x60; and &#x60;floor&#x60;. | [optional]
**rounding_precision** | **int** | Specifies the number of decimal places to which the &#x60;rounding_function&#x60; will be rounded. It can be a positive or negative value. | [optional]
**created_at** | **\DateTime** | Creation date of the billable metric. |
**expression** | **string** | Expression used to calculate the event units. The expression is evalutated for each event and the result is then used to calculate the total aggregated units. | [optional]
**field_name** | **string** | Property of the billable metric used for aggregating usage data. This field is not required for &#x60;count_agg&#x60;. | [optional]
**aggregation_type** | **string** | Aggregation method used to compute usage for this billable metric. |
**weighted_interval** | **string** | Parameter exclusively utilized in conjunction with the &#x60;weighted_sum&#x60; aggregation type. It serves to adjust the aggregation result by assigning weights and proration to the result based on time intervals. When this field is not provided, the default time interval is assumed to be in &#x60;seconds&#x60;. | [optional]
**filters** | [**\Lago\LagoPhpClient\Model\BillableMetricFilterObject[]**](BillableMetricFilterObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
