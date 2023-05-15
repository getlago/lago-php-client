# # InvoiceObjectExtended

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** |  |
**sequential_id** | **int** |  |
**number** | **string** |  |
**issuing_date** | **\DateTime** |  |
**invoice_type** | **string** |  |
**status** | **string** |  |
**payment_status** | **string** |  |
**currency** | **string** |  |
**fees_amount_cents** | **int** |  |
**coupons_amount_cents** | **int** |  |
**credit_notes_amount_cents** | **int** |  |
**sub_total_vat_excluded_amount_cents** | **int** |  |
**vat_amount_cents** | **int** |  |
**sub_total_vat_included_amount_cents** | **int** |  |
**prepaid_credit_amount_cents** | **int** |  |
**total_amount_cents** | **int** |  |
**version_number** | **int** |  |
**amount_cents** | **int** |  |
**amount_currency** | **string** |  |
**vat_amount_currency** | **string** |  |
**credit_amount_cents** | **int** |  |
**credit_amount_currency** | **string** |  |
**total_amount_currency** | **string** |  |
**legacy** | **bool** |  |
**file_url** | **string** |  | [optional]
**customer** | [**\OpenAPI\Client\Model\CustomerObject**](CustomerObject.md) |  |
**metadata** | [**\OpenAPI\Client\Model\InvoiceMetadataObject[]**](InvoiceMetadataObject.md) |  | [optional]
**credits** | [**\OpenAPI\Client\Model\CreditObject[]**](CreditObject.md) |  |
**fees** | [**\OpenAPI\Client\Model\FeeObject[]**](FeeObject.md) |  |
**subscriptions** | [**\OpenAPI\Client\Model\SubscriptionObject[]**](SubscriptionObject.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
