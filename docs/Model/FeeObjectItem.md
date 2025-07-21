# # FeeObjectItem

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**type** | **string** | The fee type. Possible values are &#x60;add-on&#x60;, &#x60;charge&#x60;, &#x60;credit&#x60;, &#x60;subscription&#x60; or &#x60;commitment&#x60;. |
**code** | **string** | The code of the fee item. It can be the code of the &#x60;add-on&#x60;, the code of the &#x60;charge&#x60;, the code of the &#x60;credit&#x60; or the code of the &#x60;subscription&#x60;. |
**name** | **string** | The name of the fee item. It can be the name of the &#x60;add-on&#x60;, the &#x60;charge&#x60;, the &#x60;credit&#x60;, the &#x60;subscription&#x60; or the &#x60;commitment&#x60;. |
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. | [optional]
**filter_invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the actual charge filter values will be used as the default display name. | [optional]
**filters** | **array<string,string[]>** | Key value list of event properties | [optional]
**lago_item_id** | **string** | Unique identifier of the fee item, created by Lago. It can be the identifier of the &#x60;add-on&#x60;, the &#x60;charge&#x60;, the &#x60;credit&#x60;, the &#x60;subscription&#x60; or the &#x60;commitment&#x60;. |
**item_type** | **string** | The type of the fee item. Possible values are &#x60;AddOn&#x60;, &#x60;BillableMetric&#x60;, &#x60;WalletTransaction&#x60;, &#x60;Subscription&#x60; or &#x60;Commitment&#x60;. |
**grouped_by** | **array<string,string>** | Key value list of event properties aggregated by the charge model | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
