# # WalletCreateInputWalletRecurringTransactionRulesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**paid_credits** | **string** | The number of paid credits used for recurring top-up. | [optional]
**granted_credits** | **string** | The number of free granted credits used for recurring top-up. | [optional]
**method** | **string** | The method used for recurring top-up. Possible values are &#x60;fixed&#x60; or &#x60;target&#x60;. | [optional]
**trigger** | **string** | The trigger. Possible values are &#x60;interval&#x60; or &#x60;threshold&#x60;. |
**interval** | **string** | The interval used for recurring top-up. It represents the frequency at which automatic top-up occurs. The interval can be one of the following values: &#x60;weekly&#x60;, &#x60;monthly&#x60;, &#x60;quarterly&#x60; or &#x60;yearly&#x60;. Required only when trigger is &#x60;interval&#x60;. | [optional]
**started_at** | **\DateTime** | The effective start date for recurring top-ups. This date should be provided in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). | [optional]
**expiration_at** | **\DateTime** | The expiration date and time for this specific recurring transaction rule. It follows the ISO 8601 datetime format and is expressed in Coordinated Universal Time (UTC). | [optional]
**threshold_credits** | **string** | The threshold for recurring top-ups is the value at which an automatic top-up is triggered. For example, if this threshold is set at 10 credits, an automatic top-up will occur whenever the wallet balance falls to or below 10 credits. Required only when trigger is set to &#x60;threshold&#x60;. | [optional]
**target_ongoing_balance** | **string** | The target ongoing balance is the value set for the ongoing balance to be reached by the automatic top-up. Required only when trigger is set to &#x60;target&#x60;. | [optional]
**invoice_requires_successful_payment** | **bool** | A boolean setting that, when set to true, delays issuing an invoice for a wallet top-up until a successful payment is made; if false, the invoice is issued immediately upon wallet top-up, regardless of the payment status. Default value of false. | [optional]
**transaction_metadata** | [**\Lago\LagoPhpClient\Model\WalletRecurringTransactionRuleTransactionMetadataInner[]**](WalletRecurringTransactionRuleTransactionMetadataInner.md) | This optional field allows you to store a list of key-value pairs containing additional information or custom attributes. These key-value pairs will populate the metadata of the wallet transactions triggered by this rule. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
