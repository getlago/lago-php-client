# # AlertObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the alert, created by Lago. |
**lago_organization_id** | **string** | Unique identifier of the organization, created by Lago. |
**subscription_external_id** | **string** | The subscription external unique identifier (provided by your own application). |
**customer_external_id** | **string** | The customer external unique identifier (provided by your own application). |
**billable_metric** | [**\Lago\LagoPhpClient\Model\BillableMetricObject**](BillableMetricObject.md) | The billable metric associated with the alert. Only for alerts based on a billable metric. |
**alert_type** | **string** | The type of alert. |
**code** | **string** | Unique code used to identify the alert. |
**name** | **string** | The name of the alert. |
**previous_value** | **float** | When the system checked if this alert should be triggered, this value was retrieved and checked against the thresholds. |
**last_processed_at** | **\DateTime** | The date and time in UTC (ISO 8601) when the system checked if this alert should be triggered. Null until it&#39;s processed for the first time. |
**thresholds** | [**\Lago\LagoPhpClient\Model\AlertThresholdObject[]**](AlertThresholdObject.md) | Array of thresholds associated with the alert. |
**created_at** | **\DateTime** | The date and time in UTC (ISO 8601) when the alert was created. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
