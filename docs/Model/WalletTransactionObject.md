# # WalletTransactionObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the wallet transaction within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet transaction&#39;s record within the Lago system. |
**lago_wallet_id** | **string** | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. |
**status** | **string** | The status of the wallet transaction. Possible values are &#x60;pending&#x60;, &#x60;settled&#x60; or &#x60;failed&#x60;. |
**source** | **string** | The source field represents the origin or trigger of the wallet transaction. Possible values are &#x60;manual&#x60;, &#x60;interval&#x60;, &#x60;threshold&#x60; |
**transaction_status** | **string** | The transaction status of the wallet transaction. Possible values are &#x60;purchased&#x60; (with pending or settled status), &#x60;granted&#x60; (without invoice_id), &#x60;voided&#x60; or &#x60;invoiced&#x60;. |
**transaction_type** | **string** | The type of transaction. Possible values are &#x60;inbound&#x60; (increasing the balance) or &#x60;outbound&#x60; (decreasing the balance). |
**amount** | **string** | The amount of credits based on the rate and the currency. |
**credit_amount** | **string** | The number of credits used in the wallet transaction. |
**invoice_requires_successful_payment** | **bool** | A boolean setting that, when set to true, delays issuing an invoice for a wallet top-up until a successful payment is made; if false, the invoice is issued immediately upon wallet top-up, regardless of the payment status. Default value of false. | [optional]
**metadata** | [**\Lago\LagoPhpClient\Model\WalletRecurringTransactionRuleTransactionMetadataInner[]**](WalletRecurringTransactionRuleTransactionMetadataInner.md) | This field allows you to store a list of key-value pairs that hold additional information or custom attributes related to the data. | [optional]
**settled_at** | **\DateTime** | The date when wallet transaction is settled, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). | [optional]
**failed_at** | **\DateTime** | The date when the wallet transaction failed, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). | [optional]
**created_at** | **\DateTime** | The date of the wallet transaction creation, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
