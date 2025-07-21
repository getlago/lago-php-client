# # TaxBaseInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the tax. | [optional]
**code** | **string** | Unique code used to identify the tax associated with the API request. | [optional]
**rate** | **string** | The percentage rate of the tax | [optional]
**description** | **string** | Internal description of the taxe | [optional]
**applied_to_organization** | **bool** | This field is deprecated and will be removed in a future version. When set to true, it applies the tax to the organization&#39;s default billing entity. To apply or remove a tax from any billing entity (including the default one), please use the &#x60;PUT /billing_entities/:code&#x60; endpoint instead. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
