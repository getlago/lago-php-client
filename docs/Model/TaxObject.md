# # TaxObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the tax, created by Lago. |
**name** | **string** | Name of the tax. |
**code** | **string** | Unique code used to identify the tax associated with the API request. |
**description** | **string** | Internal description of the taxe | [optional]
**rate** | **float** | The percentage rate of the tax |
**applied_to_organization** | **bool** | This field is deprecated and will be removed in a future version. When set to true, it applies the tax to the organization&#39;s default billing entity. To apply or remove a tax from any billing entity (including the default one), please use the &#x60;PUT /billing_entities/:code&#x60; endpoint instead. |
**created_at** | **\DateTime** | Creation date of the tax. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
