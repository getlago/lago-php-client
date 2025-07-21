# # CreditNoteObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | The credit note unique identifier, created by Lago. |
**billing_entity_code** | **string** | The unique code of the billing entity associated with the credit note. |
**sequential_id** | **int** | The sequential identifier of the credit note, specifically scoped on the associated invoice. It provides a unique numerical identifier for the credit note within the context of the invoice. |
**number** | **string** | The credit note unique number. |
**lago_invoice_id** | **string** | Unique identifier assigned to the invoice that the credit note belongs to |
**invoice_number** | **string** | The invoice unique number, related to the credit note. |
**issuing_date** | **\DateTime** | The date of creation of the credit note. It follows the ISO 8601 date format and provides the specific date when the credit note was created. |
**credit_status** | **string** | The status of the credit portion of the credit note. It indicates the current state or condition of the credit amount associated with the credit note. The possible values for this field are:  - &#x60;available&#x60;: this status indicates that an amount remains available for future usage. The credit can be applied towards future transactions or invoices. - &#x60;consumed&#x60;: this status indicates that the credit amount has been fully consumed. The remaining amount is 0, indicating that the credit has been utilized in its entirety. - &#x60;voided&#x60;: this status indicates that the remaining amount of the credit cannot be used any further. The credit has been voided and is no longer available for application or redemption. | [optional]
**refund_status** | **string** | The status of the refund portion of the credit note. It indicates the current state or condition of the refund associated with the credit note. The possible values for this field are:  - &#x60;pending&#x60;: this status indicates that the refund is pending execution. The refund request has been initiated but has not been processed or completed yet. - &#x60;succeeded&#x60;: this status indicates that the refund has been successfully executed. The refund amount has been processed and returned to the customer or the designated recipient. - &#x60;failed&#x60;: this status indicates that the refund failed to execute. The refund request encountered an error or unsuccessful processing, and the refund amount could not be returned. | [optional]
**reason** | **string** | The reason of the credit note creation. Possible values are &#x60;duplicated_charge&#x60;, &#x60;product_unsatisfactory&#x60;, &#x60;order_change&#x60;, &#x60;order_cancellation&#x60;, &#x60;fraudulent_charge&#x60; or &#x60;other&#x60;. |
**description** | **string** | The description of the credit note. | [optional]
**currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the credit note. |
**total_amount_cents** | **int** | The total amount of the credit note, expressed in cents. |
**taxes_amount_cents** | **int** | The tax amount of the credit note, expressed in cents. |
**taxes_rate** | **float** | The tax rate associated with this specific credit note. |
**sub_total_excluding_taxes_amount_cents** | **int** | The subtotal of the credit note excluding any applicable taxes, expressed in cents. |
**balance_amount_cents** | **int** | The remaining credit note amount, expressed in cents. |
**credit_amount_cents** | **int** | The credited amount of the credit note, expressed in cents. |
**refund_amount_cents** | **int** | The refunded amount of the credit note, expressed in cents. |
**coupons_adjustment_amount_cents** | **int** | The pro-rated amount of the coupons applied to the source invoice. |
**created_at** | **\DateTime** | The date when the credit note was created. It is expressed in Coordinated Universal Time (UTC). |
**updated_at** | **\DateTime** | The date when the credit note was last updated. It is expressed in Coordinated Universal Time (UTC). |
**file_url** | **string** | The PDF file of the credit note. | [optional]
**items** | [**\Lago\LagoPhpClient\Model\CreditNoteItemObject[]**](CreditNoteItemObject.md) | Array of credit note&#39;s items. | [optional]
**applied_taxes** | [**\Lago\LagoPhpClient\Model\CreditNoteAppliedTaxObject[]**](CreditNoteAppliedTaxObject.md) |  | [optional]
**self_billed** | **bool** | Indicates if the credit note belongs to self-billed invoice. Self-billing is a process where an organization creates the invoice on behalf of the partner. | [optional]
**error_details** | [**\Lago\LagoPhpClient\Model\CreditNoteErrorDetailsObject[]**](CreditNoteErrorDetailsObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
