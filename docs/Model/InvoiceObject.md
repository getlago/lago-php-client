# # InvoiceObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** |  | [optional]
**sequential_id** | **int** |  | [optional]
**number** | **string** |  | [optional]
**issuing_date** | **string** |  | [optional]
**invoice_type** | **string** |  | [optional]
**status** | **string** |  | [optional]
**payment_status** | **string** |  | [optional]
**amount_cents** | **int** |  | [optional]
**amount_currency** | **string** |  | [optional]
**vat_amount_cents** | **int** |  | [optional]
**vat_amount_currency** | **string** |  | [optional]
**credit_amount_cents** | **int** |  | [optional]
**credit_amount_currency** | **string** |  | [optional]
**total_amount_cents** | **int** |  | [optional]
**total_amount_currency** | **string** |  | [optional]
**legacy** | **bool** |  | [optional]
**file_url** | **string** |  | [optional]
**customer** | [**\OpenAPI\Client\Model\CustomerObject**](CustomerObject.md) |  | [optional]
**subscriptions** | [**\OpenAPI\Client\Model\SubscriptionObject[]**](SubscriptionObject.md) |  | [optional]
**fees** | [**\OpenAPI\Client\Model\FeeObject[]**](FeeObject.md) |  | [optional]
**credits** | [**\OpenAPI\Client\Model\CreditObject[]**](CreditObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
