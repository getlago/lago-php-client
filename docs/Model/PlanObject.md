# # PlanObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of the plan created by Lago. |
**name** | **string** | The name of the plan. |
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the plan will be used as the default display name. | [optional]
**created_at** | **\DateTime** | The date and time when the plan was created. It is expressed in UTC format according to the ISO 8601 datetime standard. This field provides the timestamp for the exact moment when the plan was initially created. |
**code** | **string** | The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance. |
**interval** | **string** | The interval used for recurring billing. It represents the frequency at which subscription billing occurs. The interval can be one of the following values: &#x60;yearly&#x60;, &#x60;quarterly&#x60;, &#x60;monthly&#x60; or &#x60;weekly&#x60;. |
**description** | **string** | The description on the plan. | [optional]
**amount_cents** | **int** | The base cost of the plan, excluding any applicable taxes, that is billed on a recurring basis. This value is defined at 0 if your plan is a pay-as-you-go plan. |
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the plan. It indicates the monetary unit in which the plan&#39;s cost, including taxes and usage-based charges, is expressed. |
**trial_period** | **float** | The duration in days during which the base cost of the plan is offered for free. | [optional]
**pay_in_advance** | **bool** | This field determines the billing timing for the plan. When set to &#x60;true&#x60;, the base cost of the plan is due at the beginning of each billing period. Conversely, when set to &#x60;false&#x60;, the base cost of the plan is due at the end of each billing period. | [optional]
**bill_charges_monthly** | **bool** | This field, when set to &#x60;true&#x60;, enables to invoice usage-based charges on monthly basis, even if the cadence of the plan is yearly. This allows customers to pay charges overage on a monthly basis. This can be set to true only if the plan&#39;s interval is &#x60;yearly&#x60;. | [optional]
**minimum_commitment** | [**\Lago\LagoPhpClient\Model\MinimumCommitmentObject**](MinimumCommitmentObject.md) |  | [optional]
**charges** | [**\Lago\LagoPhpClient\Model\ChargeObject[]**](ChargeObject.md) | Additional usage-based charges for this plan. | [optional]
**taxes** | [**\Lago\LagoPhpClient\Model\TaxObject[]**](TaxObject.md) | All taxes applied to the plan. | [optional]
**usage_thresholds** | [**\Lago\LagoPhpClient\Model\UsageThresholdObject[]**](UsageThresholdObject.md) | List of usage thresholds applied to the plan. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
