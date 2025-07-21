# # WalletUpdateInputWallet

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the wallet. | [optional]
**expiration_at** | **\DateTime** | The date and time that determines when the wallet will expire. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC). | [optional]
**invoice_requires_successful_payment** | **bool** | A boolean setting that, when set to true, delays issuing an invoice for a wallet top-up until a successful payment is made; if false, the invoice is issued immediately upon wallet top-up, regardless of the payment status. Default value of false. | [optional]
**recurring_transaction_rules** | [**\Lago\LagoPhpClient\Model\WalletUpdateInputWalletRecurringTransactionRulesInner[]**](WalletUpdateInputWalletRecurringTransactionRulesInner.md) | List of recurring transaction rules. Currently, we only allow one recurring rule per wallet. | [optional]
**applies_to** | [**\Lago\LagoPhpClient\Model\WalletCreateInputWalletAppliesTo**](WalletCreateInputWalletAppliesTo.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
