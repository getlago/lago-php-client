# # CustomerChargeUsageObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**units** | **string** | The number of units consumed by the customer for a specific charge item. |
**events_count** | **int** | The quantity of usage events that have been recorded for a particular charge during the specified time period. These events may also be referred to as the number of transactions in some contexts. |
**amount_cents** | **int** | The amount in cents, tax excluded, consumed by the customer for a specific charge item. |
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of a usage item consumed by the customer. |
**charge** | [**\Lago\LagoPhpClient\Model\CustomerChargeUsageObjectCharge**](CustomerChargeUsageObjectCharge.md) |  |
**billable_metric** | [**\Lago\LagoPhpClient\Model\CustomerChargeUsageObjectBillableMetric**](CustomerChargeUsageObjectBillableMetric.md) |  |
**filters** | [**\Lago\LagoPhpClient\Model\CustomerChargeFiltersUsageObjectInner[]**](CustomerChargeFiltersUsageObjectInner.md) | Array of filter object, representing multiple dimensions for a charge item. | [optional]
**grouped_usage** | [**\Lago\LagoPhpClient\Model\CustomerChargeGroupedUsageObjectInner[]**](CustomerChargeGroupedUsageObjectInner.md) | Array of aggregated fees, grouped by the event properties defined in a &#x60;standard&#x60; charge model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
