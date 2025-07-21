# # WalletTransactionCreateInputWalletTransaction

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**wallet_id** | **string** | Unique identifier assigned to the wallet within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet&#39;s record within the Lago system. |
**paid_credits** | **string** | The number of paid credits. | [optional]
**granted_credits** | **string** | The number of free granted credits. | [optional]
**voided_credits** | **string** | The number of voided credits. | [optional]
**invoice_requires_successful_payment** | **bool** | A boolean setting that, when set to true, delays issuing an invoice for a wallet top-up until a successful payment is made; if false, the invoice is issued immediately upon wallet top-up, regardless of the payment status. Default value of false. | [optional]
**metadata** | [**\Lago\LagoPhpClient\Model\WalletRecurringTransactionRuleTransactionMetadataInner[]**](WalletRecurringTransactionRuleTransactionMetadataInner.md) | This optional field allows you to store a list of key-value pairs that hold additional information or custom attributes related to the data. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
