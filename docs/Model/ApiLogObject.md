# # ApiLogObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**api_version** | **string** | Lago API version used in the request. |
**client** | **string** | The client used to make the request to the API. |
**http_method** | **string** | This field represents the HTTP method of the request. |
**http_status** | **int** | This field represents the HTTP status of the requests. |
**logged_at** | **\DateTime** | The logged date of the api log, presented in the ISO 8601 datetime format, specifically in Coordinated Universal Time (UTC). It provides the precise timestamp of when the event&#39;s record was created within the Lago application |
**request_body** | **object** |  |
**request_origin** | **string** | This field represents the API origin of the requested URL |
**request_path** | **string** | This field represents the API path of the requested URL |
**created_at** | **\DateTime** | The creation date of the api log record in the Lago application, presented in the ISO 8601 datetime format, specifically in Coordinated Universal Time (UTC). It provides the precise timestamp of when the event&#39;s record was created within the Lago application |
**request_id** | **string** | Unique identifier for the api log. |
**request_response** | **object** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
