# # CreditNoteObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** |  |
**sequential_id** | **int** |  |
**number** | **string** |  |
**lago_invoice_id** | **string** |  |
**invoice_number** | **string** |  |
**issuing_date** | **\DateTime** |  |
**credit_status** | **string** | Credit status | [optional]
**refund_status** | **string** | Refund status | [optional]
**reason** | **string** | Reason |
**description** | **string** |  | [optional]
**currency** | **string** |  |
**total_amount_cents** | **int** |  |
**total_amount_currency** | **string** |  |
**vat_amount_cents** | **int** |  |
**vat_amount_currency** | **string** |  |
**sub_total_vat_excluded_amount_cents** | **int** |  |
**sub_total_vat_excluded_amount_currency** | **string** |  |
**balance_amount_cents** | **int** |  |
**balance_amount_currency** | **string** |  |
**credit_amount_cents** | **int** |  |
**credit_amount_currency** | **string** |  |
**refund_amount_cents** | **int** |  |
**refund_amount_currency** | **string** |  |
**coupons_adjustement_amount_cents** | **int** |  |
**created_at** | **\DateTime** |  |
**updated_at** | **\DateTime** |  |
**file_url** | **string** |  | [optional]
**items** | [**\OpenAPI\Client\Model\CreditNoteItemObject[]**](CreditNoteItemObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
