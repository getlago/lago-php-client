# # CreditNoteEstimatedEstimatedCreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_invoice_id** | **string** | Unique identifier assigned to the invoice that the credit note belongs to |
**invoice_number** | **string** | The invoice unique number, related to the credit note. |
**currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the credit note. |
**taxes_amount_cents** | **int** | The tax amount of the credit note, expressed in cents. |
**precise_taxes_amount_cents** | **float** | The precise tax amount of the credit note, expressed in cents with decimal precision. |
**taxes_rate** | **float** | The tax rate associated with this specific credit note. |
**sub_total_excluding_taxes_amount_cents** | **int** | The subtotal of the credit note excluding any applicable taxes, expressed in cents. |
**max_creditable_amount_cents** | **int** | The credited amount of the credit note, expressed in cents. |
**max_refundable_amount_cents** | **int** | The refunded amount of the credit note, expressed in cents. |
**coupons_adjustment_amount_cents** | **int** | The pro-rated amount of the coupons applied to the source invoice. |
**precise_coupons_adjustment_amount_cents** | **float** | The precise pro-rated amount with decimal precision of the coupons applied to the source invoice. |
**items** | [**\Lago\LagoPhpClient\Model\CreditNoteEstimatedEstimatedCreditNoteItemsInner[]**](CreditNoteEstimatedEstimatedCreditNoteItemsInner.md) | Array of credit note&#39;s items. |
**applied_taxes** | [**\Lago\LagoPhpClient\Model\CreditNoteEstimatedEstimatedCreditNoteAppliedTaxesInner[]**](CreditNoteEstimatedEstimatedCreditNoteAppliedTaxesInner.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
