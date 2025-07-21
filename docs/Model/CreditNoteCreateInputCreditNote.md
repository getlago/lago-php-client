# # CreditNoteCreateInputCreditNote

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**invoice_id** | **string** | The invoice unique identifier, created by Lago. |
**reason** | **string** | The reason of the credit note creation. Possible values are &#x60;duplicated_charge&#x60;, &#x60;product_unsatisfactory&#x60;, &#x60;order_change&#x60;, &#x60;order_cancellation&#x60;, &#x60;fraudulent_charge&#x60; or &#x60;other&#x60;. | [optional]
**description** | **string** | The description of the credit note. | [optional]
**credit_amount_cents** | **int** | The total amount to be credited on the customer balance. | [optional]
**refund_amount_cents** | **int** | The total amount to be refunded to the customer. | [optional]
**items** | [**\Lago\LagoPhpClient\Model\CreditNoteCreateInputCreditNoteItemsInner[]**](CreditNoteCreateInputCreditNoteItemsInner.md) | The list of credit note&#39;s items. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
