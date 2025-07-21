# # WalletObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. |
**lago_customer_id** | **string** | Unique identifier assigned to the customer within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the customer&#39;s record within the Lago system. |
**external_customer_id** | **string** | The customer external unique identifier (provided by your own application) |
**status** | **string** | The status of the wallet. Possible values are &#x60;active&#x60; or &#x60;terminated&#x60;. |
**currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the wallet. |
**name** | **string** | The name of the wallet. | [optional]
**rate_amount** | **string** | The rate of conversion between credits and the amount in the specified currency. It indicates the ratio or factor used to convert credits into the corresponding monetary value in the currency of the transaction. |
**credits_balance** | **string** | The current wallet balance expressed in credits. This reflects the available balance after all transactions are settled. |
**balance_cents** | **int** | The current wallet balance expressed in cents. This reflects the available balance after all transactions are settled. |
**consumed_credits** | **string** | The number of consumed credits. |
**created_at** | **\DateTime** | The date of the wallet creation, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). |
**expiration_at** | **\DateTime** | The date and time that determines when the wallet will expire. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC). | [optional]
**last_balance_sync_at** | **\DateTime** | The date and time of the last balance top-up. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC). | [optional]
**last_consumed_credit_at** | **\DateTime** | The date and time of the last credits consumption. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC). | [optional]
**terminated_at** | **\DateTime** | The date of terminaison of the wallet. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC). | [optional]
**invoice_requires_successful_payment** | **bool** | A boolean setting that, when set to true, delays issuing an invoice for a wallet top-up until a successful payment is made; if false, the invoice is issued immediately upon wallet top-up, regardless of the payment status. Default value of false. |
**applies_to** | [**\Lago\LagoPhpClient\Model\WalletObjectAppliesTo**](WalletObjectAppliesTo.md) |  | [optional]
**recurring_transaction_rules** | [**\Lago\LagoPhpClient\Model\WalletRecurringTransactionRule[]**](WalletRecurringTransactionRule.md) | List of recurring transaction rules. Currently, we only allow one recurring rule per wallet. | [optional]
**ongoing_balance_cents** | **int** | The ongoing wallet balance expressed in cents. This represents the &#x60;balance_cents&#x60; minus the &#x60;ongoing_usage_balance_cents&#x60;, showing the real time balance after accounting for current usage including taxes. |
**ongoing_usage_balance_cents** | **int** | The ongoing usage balance of the wallet, expressed in cents. This reflects all current usage and draft invoices including taxes. |
**credits_ongoing_balance** | **string** | The ongoing wallet balance expressed in credits. This represents the &#x60;credits_balance&#x60; minus the &#x60;credits_ongoing_usage_balance&#x60;, showing the real time balance after accounting for current usage including taxes. |
**credits_ongoing_usage_balance** | **string** | The ongoing usage balance of the wallet, expressed in credits. This reflects all current usage and draft invoices including taxes. |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
