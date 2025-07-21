# # PaymentRequestObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the payment request, created by Lago. |
**email** | **string** | The customer&#39;s email address used for sending dunning notifications |
**amount_cents** | **int** | The sum of the total amounts of all the invoices included in the payment request, expressed in cents. |
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the payment request. |
**payment_status** | **string** | The status of the payment associated with the payment request. It can have one of the following values: - &#x60;pending&#x60;: the payment is pending, waiting for payment processing in the payment provider or when the invoice is emitted but users have not updated the payment status through the endpoint. - &#x60;succeeded&#x60;: the payment of the payment request has been successfully processed. - &#x60;failed&#x60;: the payment of the payment request has failed or encountered an error during processing. |
**created_at** | **\DateTime** | The date and time when the payment request was created. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the payment request was initially created. |
**customer** | [**\Lago\LagoPhpClient\Model\CustomerBaseObject**](CustomerBaseObject.md) | The customer on which the payment request applies. It refers to the customer account or entity associated with the payment request. |
**invoices** | [**\Lago\LagoPhpClient\Model\InvoiceBaseObject[]**](InvoiceBaseObject.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
