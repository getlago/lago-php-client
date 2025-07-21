# # WalletTransactionPaymentFailureObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_wallet_transaction_id** | **string** | Unique identifier assigned to the wallet transaction within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the wallet transaction&#39;s record within the Lago system. |
**lago_customer_id** | **string** | Unique identifier assigned to the customer within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the customer&#39;s record within the Lago system. |
**external_customer_id** | **string** | The customer external unique identifier (provided by your own application) |
**provider_customer_id** | **string** | Unique identifier of the customer within the payment provider | [optional]
**payment_provider** | **string** | The type of payment provider code |
**payment_provider_code** | **string** | Code of the payment provider | [optional]
**provider_error** | [**\Lago\LagoPhpClient\Model\CustomerIntegratrionErrorObjectProviderError**](CustomerIntegratrionErrorObjectProviderError.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
