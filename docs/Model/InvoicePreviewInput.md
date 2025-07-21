# # InvoicePreviewInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**customer** | [**\Lago\LagoPhpClient\Model\InvoicePreviewInputCustomer**](InvoicePreviewInputCustomer.md) |  |
**plan_code** | **string** | The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance. | [optional]
**subscription_at** | **\DateTime** | The anniversary date and time of the initial subscription. This date serves as the basis for billing subscriptions with &#x60;anniversary&#x60; billing time. The &#x60;anniversary_date&#x60; should be provided in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). | [optional]
**billing_time** | **string** | The billing time for the subscription, which can be set as either &#x60;anniversary&#x60; or &#x60;calendar&#x60;. If not explicitly provided, it will default to &#x60;calendar&#x60;. The billing time determines the timing of recurring billing cycles for the subscription. By specifying &#x60;anniversary&#x60;, the billing cycle will be based on the specific date the subscription started (billed fully), while &#x60;calendar&#x60; sets the billing cycle at the first day of the week/month/year (billed with proration). | [optional]
**coupons** | [**\Lago\LagoPhpClient\Model\InvoicePreviewInputCouponsInner[]**](InvoicePreviewInputCouponsInner.md) |  | [optional]
**subscriptions** | [**\Lago\LagoPhpClient\Model\InvoicePreviewInputSubscriptions**](InvoicePreviewInputSubscriptions.md) |  | [optional]
**billing_entity_code** | **string** | The code of the billing entity to which will be associated a customer if the external_id is not provided. If billing_entity_code is not provided, default billing_entity of organization will be used. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
