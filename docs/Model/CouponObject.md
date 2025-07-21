# # CouponObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the coupon, created by Lago. |
**name** | **string** | The name of the coupon. |
**code** | **string** | Unique code used to identify the coupon. |
**description** | **string** | Description of the coupon. | [optional]
**coupon_type** | **string** | The type of the coupon. It can have two possible values: &#x60;fixed_amount&#x60; or &#x60;percentage&#x60;.  - If set to &#x60;fixed_amount&#x60;, the coupon represents a fixed amount discount. - If set to &#x60;percentage&#x60;, the coupon represents a percentage-based discount. |
**amount_cents** | **int** | The amount of the coupon in cents. This field is required only for coupon with &#x60;fixed_amount&#x60; type. | [optional]
**amount_currency** | [**\Lago\LagoPhpClient\Model\CurrencyOrNull**](CurrencyOrNull.md) | The currency of the coupon. This field is required only for coupon with &#x60;fixed_amount&#x60; type. | [optional]
**reusable** | **bool** | Indicates whether the coupon can be reused or not. If set to &#x60;true&#x60;, the coupon is reusable, meaning it can be applied multiple times to the same customer. If set to &#x60;false&#x60;, the coupon can only be used once and is not reusable. If not specified, this field is set to &#x60;true&#x60; by default. |
**limited_plans** | **bool** | The coupon is limited to specific plans. The possible values can be &#x60;true&#x60; or &#x60;false&#x60;. |
**plan_codes** | **string[]** | An array of plan codes to which the coupon is applicable. By specifying the plan codes in this field, you can restrict the coupon&#39;s usage to specific plans only. | [optional]
**limited_billable_metrics** | **bool** | The coupon is limited to specific billable metrics. The possible values can be &#x60;true&#x60; or &#x60;false&#x60;. |
**billable_metric_codes** | **string[]** | An array of billable metric codes to which the coupon is applicable. By specifying the billable metric codes in this field, you can restrict the coupon&#39;s usage to specific metrics only. | [optional]
**percentage_rate** | **string** | The percentage rate of the coupon. This field is required only for coupons with a &#x60;percentage&#x60; coupon type. | [optional]
**frequency** | **string** | The type of frequency for the coupon. It can have three possible values: &#x60;once&#x60;, &#x60;recurring&#x60;, or &#x60;forever&#x60;.  - If set to &#x60;once&#x60;, the coupon is applicable only for a single use. - If set to &#x60;recurring&#x60;, the coupon can be used multiple times for recurring billing periods. - If set to &#x60;forever&#x60;, the coupon has unlimited usage and can be applied indefinitely. |
**frequency_duration** | **int** | Specifies the number of billing periods to which the coupon applies. This field is required only for coupons with a &#x60;recurring&#x60; frequency type | [optional]
**expiration** | **string** | Specifies the type of expiration for the coupon. It can have two possible values: &#x60;time_limit&#x60; or &#x60;no_expiration&#x60;.  - If set to &#x60;time_limit&#x60;, the coupon has an expiration based on a specified time limit. - If set to &#x60;no_expiration&#x60;, the coupon does not have an expiration date and remains valid indefinitely. |
**expiration_at** | **\DateTime** | The expiration date and time of the coupon. This field is required only for coupons with &#x60;expiration&#x60; set to &#x60;time_limit&#x60;. The expiration date and time should be specified in UTC format according to the ISO 8601 datetime standard. It indicates the exact moment when the coupon will expire and is no longer valid. | [optional]
**created_at** | **\DateTime** | The date and time when the coupon was created. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the coupon was initially created. |
**terminated_at** | **\DateTime** | This field indicates if the coupon has been terminated and is no longer usable. If it&#39;s not null, it won&#39;t be removed for existing customers using it, but it prevents the coupon from being applied in the future. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
