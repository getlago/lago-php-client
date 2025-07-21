# # BillingPeriodObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_subscription_id** | **string** | Unique identifier assigned to the subscription, created by Lago. |
**external_subscription_id** | **string** | Unique identifier assigned to the subscription in your application. |
**lago_plan_id** | **string** | Unique identifier assigned to the plan, created by Lago. |
**subscription_from_datetime** | **\DateTime** | The beginning date of the subscription billing period. This field indicates the start date of the billing period associated with the subscription fee. |
**subscription_to_datetime** | **\DateTime** | The ending date of the subscription billing period. This field indicates the end date of the billing period associated with the subscription fee. |
**charges_from_datetime** | **\DateTime** | The beginning date of the period that covers the charge fees. It is applicable only to the &#x60;charge&#x60; fees attached to the subscription. This field indicates the start date of the billing period or subscription period associated with the fees. |
**charges_to_datetime** | **\DateTime** | The ending date of the period that covers the charge fees. It is applicable only to the &#x60;charge&#x60; fees attached to the subscription. This field indicates the end date of the billing period or subscription period associated with the fees. |
**invoicing_reason** | **string** | The reason explaining why this subscription appears on the invoice. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
