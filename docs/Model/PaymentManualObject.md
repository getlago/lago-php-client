# # PaymentManualObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | The unique identifier of the payment, created by Lago. | [optional]
**invoice_ids** | **string[]** | List of invoice IDs associated with the payment. | [optional]
**amount_cents** | **int** | The amount of the payment in cents. | [optional]
**amount_currency** | **string** | The currency of the payment amount. | [optional]
**payment_status** | **string** | The current status of the payment. | [optional]
**type** | **string** | The type of payment. | [optional]
**reference** | **string** | Reference for the payment. | [optional]
**external_payment_id** | **string** | External identifier for the payment (if applicable). | [optional]
**created_at** | **\DateTime** | Timestamp when the payment was created. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
