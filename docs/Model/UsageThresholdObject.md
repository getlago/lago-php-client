# # UsageThresholdObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the usage threshold created by Lago. |
**threshold_display_name** | **string** | The display name of the usage threshold. |
**amount_cents** | **int** | The amount to reach to trigger a &#x60;progressive_billing&#x60; invoice. |
**recurring** | **bool** | This field when set to &#x60;true&#x60; indicates that a &#x60;progressive_billing&#x60; invoice will be created every time the lifetime usage increases by the specified amount. |
**created_at** | **\DateTime** | The date and time when the usage threshold was created. It is expressed in UTC format according to the ISO 8601 datetime standard. |
**updated_at** | **\DateTime** | The date and time when the usage threshold was last updated. It is expressed in UTC format according to the ISO 8601 datetime standard. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
