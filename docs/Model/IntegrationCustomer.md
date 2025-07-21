# # IntegrationCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | A unique identifier for the integration customer object in the Lago application. |
**type** | **string** | The integration type used for accounting and tax syncs. Accepted values: &#x60;netsuite, anrok&#x60;. |
**integration_code** | **string** | Unique code used to identify an integration connection. |
**external_customer_id** | **string** | The customer ID within the integration&#39;s system. If this field is not provided, Lago has the option to create a new customer record within the integration&#39;s system on behalf of the customer. |
**sync_with_provider** | **bool** | Set this field to &#x60;true&#x60; if you want to create a customer record in the integration&#39;s system. This option is applicable only when the &#x60;external_customer_id&#x60; is null and the &#x60;sync_with_provider&#x60; field is set to &#x60;true&#x60;. By default, the value is set to &#x60;false&#x60; | [optional]
**subsidiary_id** | **string** | This optional field is needed only when working with &#x60;netsuite&#x60; connection. | [optional]
**targeted_object** | **string** | This optional field is present only when working with &#x60;hubspot&#x60; connection. | [optional]
**email** | **string** | This optional field is present only when working with &#x60;hubspot&#x60; connection. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
