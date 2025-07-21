# # FeeEstimateObjectItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The fee type. The value will be &#x60;charge&#x60;. |
**code** | **string** | The code of the fee item. It will be the code of the &#x60;billable_metric&#x60;. |
**name** | **string** | The name of the fee item. It will be the name of the &#x60;billable_metric&#x60;. |
**description** | **string** | The description of the fee item. It will be the name of the &#x60;billable_metric&#x60;. | [optional]
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. | [optional]
**filter_invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the actual charge filter values will be used as the default display name. | [optional]
**filters** | **array<string,string[]>** | Key value list of event properties | [optional]
**lago_item_id** | **string** | Unique identifier of the fee item, created by Lago. It will be the identifier of the &#x60;billable_metric&#x60;. |
**item_type** | **string** | The type of the fee item. Values is &#x60;BillableMetric&#x60;. |
**grouped_by** | **array<string,string>** | Key value list of event properties aggregated by the charge model | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
