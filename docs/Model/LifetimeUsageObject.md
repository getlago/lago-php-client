# # LifetimeUsageObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the lifetime usage record within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the lifetime usage record within the Lago system |
**lago_subscription_id** | **string** | Unique identifier assigned to the subscription record within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the subscription record within the Lago system |
**external_subscription_id** | **string** | The subscription external unique identifier (provided by your own application). |
**external_historical_usage_amount_cents** | **int** | The historical usage amount in cents for the subscription (provided by your own application). |
**invoiced_usage_amount_cents** | **int** | The total invoiced usage amount in cents for the subscription. |
**current_usage_amount_cents** | **int** | The current usage amount in cents for the subscription on the current billing period. |
**from_datetime** | **\DateTime** | The recording start date and time of the subscription lifetime usage. The date and time must be in ISO 8601 format. |
**to_datetime** | **\DateTime** | The recording end date and time of the subscription lifetime usage. The date and time must be in ISO 8601 format. |
**usage_thresholds** | [**\Lago\LagoPhpClient\Model\LifetimeUsageThresholdObject[]**](LifetimeUsageThresholdObject.md) | Array of usage thresholds attached to the subscription&#39;s plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
