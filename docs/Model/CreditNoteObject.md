# # CreditNoteObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** |  | [optional]
**sequential_id** | **int** |  | [optional]
**number** | **string** |  | [optional]
**lago_invoice_id** | **string** |  | [optional]
**invoice_number** | **string** |  | [optional]
**issuing_date** | **string** |  | [optional]
**credit_status** | **string** | Credit status | [optional]
**refund_status** | **string** | Refund status | [optional]
**reason** | **string** | Reason | [optional]
**description** | **string** |  | [optional]
**total_amount_cents** | **int** |  | [optional]
**total_amount_currency** | **string** |  | [optional]
**vat_amount_cents** | **int** |  | [optional]
**vat_amount_currency** | **string** |  | [optional]
**sub_total_vat_excluded_amount_cents** | **int** |  | [optional]
**sub_total_vat_excluded_amount_currency** | **string** |  | [optional]
**balance_amount_cents** | **int** |  | [optional]
**balance_amount_currency** | **string** |  | [optional]
**credit_amount_cents** | **int** |  | [optional]
**credit_amount_currency** | **string** |  | [optional]
**refund_amount_cents** | **int** |  | [optional]
**refund_amount_currency** | **string** |  | [optional]
**created_at** | **string** |  | [optional]
**updated_at** | **string** |  | [optional]
**file_url** | **string** |  | [optional]
**customer** | [**\OpenAPI\Client\Model\CustomerObject**](CustomerObject.md) |  | [optional]
**items** | [**\OpenAPI\Client\Model\CreditNoteItemObject[]**](CreditNoteItemObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
