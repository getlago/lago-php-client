# # AlertCreateInputAlert

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**code** | **string** | Unique code used to identify the alert. |
**billable_metric_code** | **string** | The code of the billable metric associated with the alert. Only for alerts based on a billable metric. | [optional]
**name** | **string** | The name of the alert. | [optional]
**thresholds** | [**\Lago\LagoPhpClient\Model\AlertThresholdInput[]**](AlertThresholdInput.md) | Array of thresholds associated with the alert. | [optional]
**alert_type** | **string** | The type of alert. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
