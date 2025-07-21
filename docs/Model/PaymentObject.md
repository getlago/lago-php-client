# # PaymentObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the payment, created by Lago. |
**lago_payable_id** | **string** | The unique identifier of the paid resource, created by Lago. |
**lago_customer_id** | **string** | Unique identifier of the customer, created by Lago. |
**status** | **string** | The status of the payment within the payment provider |
**external_id** | **string** | The customer external unique identifier (provided by your own application) | [optional]
**provider_customer_id** | **string** | Unique identifier of the customer within the payment provider |
**payment_provider_code** | **string** | Code of the payment provider | [optional]
**payment_provider_type** | **string** | The type of payment provider |
**provider_payment_id** | **string** | Unique identifier of the payment within the payment provider |
**next_action** | **array<string,mixed>** |  |
**amount_cents** | **int** | The amount of the payment in cents | [optional]
**amount_currency** | **string** | The currency of the payment | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
