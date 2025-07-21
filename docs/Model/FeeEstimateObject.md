# # FeeEstimateObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **mixed** |  | [optional]
**lago_charge_id** | **string** | Unique identifier assigned to the charge that the fee belongs to | [optional]
**lago_charge_filter_id** | **string** | Unique identifier assigned to the charge filter that the fee belongs to | [optional]
**lago_invoice_id** | **mixed** |  | [optional]
**lago_true_up_fee_id** | **mixed** |  | [optional]
**lago_true_up_parent_fee_id** | **mixed** |  | [optional]
**lago_subscription_id** | **string** | Unique identifier assigned to the subscription, created by Lago. This field is specifically displayed when the fee type is charge or subscription. | [optional]
**lago_customer_id** | **string** | Unique identifier assigned to the customer, created by Lago. This field is specifically displayed when the fee type is charge or subscription. | [optional]
**external_customer_id** | **string** | Unique identifier assigned to the customer in your application. This field is specifically displayed when the fee type is charge or subscription. | [optional]
**external_subscription_id** | **string** | Unique identifier assigned to the subscription in your application. This field is specifically displayed when the fee type is charge or subscription. | [optional]
**amount_cents** | **int** | The cost of this specific fee, excluding any applicable taxes. |
**precise_amount** | **float** | The cost of this specific fee, excluding any applicable taxes, with precision. | [optional]
**precise_total_amount** | **float** | The cost of this specific fee, including any applicable taxes, with precision. | [optional]
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of this specific fee. It indicates the monetary unit in which the fee&#39;s cost is expressed. |
**taxes_amount_cents** | **int** | The cost of the tax associated with this specific fee. |
**taxes_precise_amount** | **float** | The cost of the tax associated with this specific fee, with precision. | [optional]
**taxes_rate** | **float** | The tax rate associated with this specific fee. |
**units** | **string** | The number of units used to charge the customer. This field indicates the quantity or count of units consumed or utilized in the context of the charge. It helps in determining the basis for calculating the fee or cost associated with the usage of the service or product provided to the customer. |
**description** | **mixed** |  | [optional]
**precise_unit_amount** | **float** | The unit amount of the fee per unit, with precision. |
**precise_coupons_amount_cents** | **string** | The coupon amount applied to the estimated instant fee. It will always returns 0 | [optional]
**total_amount_cents** | **int** | The cost of this specific fee, including any applicable taxes. |
**total_amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of this specific fee, including any applicable taxes. |
**events_count** | **int** | The number of events that have been sent and used to charge the customer. This field indicates the count or quantity of events that have been processed and considered in the charging process. | [optional]
**pay_in_advance** | **bool** | Flag that indicates whether the fee was paid in advance. It serves as a boolean value, where &#x60;true&#x60; represents that the fee was paid in advance (straightaway), and &#x60;false&#x60; indicates that the fee was not paid in arrears (at the end of the period). |
**invoiceable** | **bool** | Flag that indicates whether the fee was included on the invoice. It serves as a boolean value, where &#x60;true&#x60; represents that the fee was included on the invoice, and &#x60;false&#x60; indicates that the fee was not included on the invoice. |
**payment_status** | **string** | Indicates the payment status of the fee. It represents the current status of the payment associated with the fee. The value will always &#x60;pending&#x60;. |
**created_at** | **mixed** |  | [optional]
**succeeded_at** | **mixed** |  | [optional]
**failed_at** | **mixed** |  | [optional]
**refunded_at** | **mixed** |  | [optional]
**event_transaction_id** | **string** | Unique identifier assigned to the transaction. This field is specifically displayed when the fee type is &#x60;charge&#x60; and the payment for the fee is made in advance (&#x60;pay_in_advance&#x60; is set to &#x60;true&#x60;). | [optional]
**amount_details** | **mixed** |  | [optional]
**item** | [**\Lago\LagoPhpClient\Model\FeeEstimateObjectItem**](FeeEstimateObjectItem.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
