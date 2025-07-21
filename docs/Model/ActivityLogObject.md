# # ActivityLogObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**activity_id** | **string** | Unique identifier assigned to the activity log within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the activity log record within the Lago system |
**user_email** | **string** | The email of the user who performed the activity | [optional]
**activity_type** | **string** | This field stores the actitivy action that was performed to the activity_object. |
**activity_source** | **string** | This field represents the source of the activity log, the interaction source that triggered the action. |
**activity_object** | **object** | This field represents the final state of the object that the action was applied. | [optional]
**activity_object_changes** | **object** |  | [optional]
**external_customer_id** | **string** | The customer external unique identifier (provided by your own application) | [optional]
**external_subscription_id** | **string** | Unique identifier assigned to the subscription in your application. | [optional]
**resource_id** | **string** | The resource id of the object that the action was applied. |
**resource_type** | **string** | The resource type of the resource_id record. |
**organization_id** | **string** | Unique identifier for the organization associated with the activity log. |
**logged_at** | **\DateTime** | The logged date of the activity, presented in the ISO 8601 datetime format, specifically in Coordinated Universal Time (UTC). It provides the precise timestamp of when the event&#39;s record was created within the Lago application |
**created_at** | **\DateTime** | The creation date of the activity record in the Lago application, presented in the ISO 8601 datetime format, specifically in Coordinated Universal Time (UTC). It provides the precise timestamp of when the event&#39;s record was created within the Lago application |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
