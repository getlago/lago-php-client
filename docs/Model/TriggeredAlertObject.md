# # TriggeredAlertObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the alert, created by Lago. |
**lago_organization_id** | **string** | Unique identifier of the organization, created by Lago. |
**lago_alert_id** | **string** | Unique identifier of the alert, created by Lago. |
**lago_subscription_id** | **string** | Unique identifier of the subscription, created by Lago. |
**subscription_external_id** | **string** | The subscription external unique identifier (provided by your own application). |
**billable_metric_code** | **string** | The code of the billable metric associated with the alert. Only for alerts based on a billable metric. |
**alert_type** | **string** | The type of alert triggered. |
**alert_code** | **string** | Unique code used to identify the alert triggered. |
**alert_name** | **string** | The name of the alert triggered. |
**current_value** | **float** | When the system checked if this alert should be triggered, this value was retrieved and checked if any threshold were crossed between this value and previous value. |
**previous_value** | **float** | During the previous run, this value was retrieved. |
**triggered_at** | **\DateTime** | The date and time in UTC (ISO 8601) when the system triggered the alert. |
**crossed_thresholds** | [**\Lago\LagoPhpClient\Model\AlertThresholdObject[]**](AlertThresholdObject.md) | Array of thresholds crossed. All the recurring threshold values are present. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
