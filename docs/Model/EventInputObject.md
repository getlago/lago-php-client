# # EventInputObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**transaction_id** | **string** | This field represents a unique identifier for the event. It is crucial for ensuring idempotency, meaning that each event can be uniquely identified and processed without causing any unintended side effects.  WARNING: If the Lago organization is configured to use the new Clickhouse-based event pipeline (designed for high-volume processing), the idempotency logic is handled differently. Event uniqueness is maintained with both &#x60;transaction_id&#x60; and &#x60;timestamp&#x60; fields. If a new event arrives with identical values for these two fields as an existing event, the new one will overwrite the previous event rather than being rejected. |
**external_subscription_id** | **string** | The unique identifier of the subscription in your application. This field is mandatory in order to link events to the correct customer subscription. |
**code** | **string** | The code that identifies a targeted billable metric. It is essential that this code matches the &#x60;code&#x60; property of one of your active billable metrics. If the provided code does not correspond to any active billable metric, it will be ignored during the process. |
**timestamp** | [**\Lago\LagoPhpClient\Model\EventInputObjectTimestamp**](EventInputObjectTimestamp.md) |  | [optional]
**precise_total_amount_cents** | **string** | The precise total amount in cents with precision used by the &#x60;dynamic&#x60; pricing model to compute the usage amount. | [optional]
**properties** | [**array<string,\Lago\LagoPhpClient\Model\BillableMetricEvaluateExpressionInputEventPropertiesValue>**](BillableMetricEvaluateExpressionInputEventPropertiesValue.md) | This field represents additional properties associated with the event, which are utilized in the calculation of the final fee. This object becomes mandatory when the targeted billable metric employs a &#x60;sum_agg&#x60;, &#x60;max_agg&#x60;, or &#x60;unique_count_agg&#x60; aggregation method. However, when using a simple &#x60;count_agg&#x60;, this object is not required. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
