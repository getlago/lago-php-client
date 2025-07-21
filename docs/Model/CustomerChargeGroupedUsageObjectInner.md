# # CustomerChargeGroupedUsageObjectInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | The amount in cents, tax excluded, consumed for a specific group related to a charge item. | [optional]
**events_count** | **int** | The quantity of usage events that have been recorded for a particular charge during the specified time period. These events may also be referred to as the number of transactions in some contexts. | [optional]
**units** | **string** | The number of units consumed for a specific group related to a charge item. | [optional]
**grouped_by** | **array<string,string>** | Key value list of event properties aggregated by the charge model | [optional]
**filters** | [**\Lago\LagoPhpClient\Model\CustomerChargeFiltersUsageObjectInner[]**](CustomerChargeFiltersUsageObjectInner.md) | Array of filter object, representing multiple dimensions for a charge item. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
