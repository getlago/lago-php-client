# # PlanUpdateInputPlan

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | The name of the plan. | [optional]
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the plan will be used as the default display name. | [optional]
**code** | **string** | The code of the plan. It serves as a unique identifier associated with a particular plan. The code is typically used for internal or system-level identification purposes, like assigning a subscription, for instance. | [optional]
**interval** | **string** | The interval used for recurring billing. It represents the frequency at which subscription billing occurs. The interval can be one of the following values: &#x60;yearly&#x60;, &#x60;quarterly&#x60;, &#x60;monthly&#x60;, or &#x60;weekly&#x60;. | [optional]
**description** | **string** | The description on the plan. | [optional]
**amount_cents** | **int** | The base cost of the plan, excluding any applicable taxes, that is billed on a recurring basis. This value is defined at 0 if your plan is a pay-as-you-go plan. | [optional]
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the plan. It indicates the monetary unit in which the plan&#39;s cost, including taxes and usage-based charges, is expressed. | [optional]
**trial_period** | **float** | The duration in days during which the base cost of the plan is offered for free. | [optional]
**pay_in_advance** | **bool** | This field determines the billing timing for the plan. When set to &#x60;true&#x60;, the base cost of the plan is due at the beginning of each billing period. Conversely, when set to &#x60;false&#x60;, the base cost of the plan is due at the end of each billing period. | [optional]
**bill_charges_monthly** | **bool** | This field, when set to &#x60;true&#x60;, enables to invoice usage-based charges on monthly basis, even if the cadence of the plan is yearly. This allows customers to pay charges overage on a monthly basis. This can be set to true only if the plan&#39;s interval is &#x60;yearly&#x60;. | [optional]
**tax_codes** | **string[]** | List of unique code used to identify the taxes. | [optional]
**minimum_commitment** | [**\Lago\LagoPhpClient\Model\MinimumCommitmentInput**](MinimumCommitmentInput.md) |  | [optional]
**charges** | [**\Lago\LagoPhpClient\Model\PlanUpdateInputPlanChargesInner[]**](PlanUpdateInputPlanChargesInner.md) | Additional usage-based charges for this plan. | [optional]
**usage_thresholds** | [**\Lago\LagoPhpClient\Model\UsageThresholdInput[]**](UsageThresholdInput.md) | List of usage thresholds to apply to the plan. | [optional]
**cascade_updates** | **bool** | This field determines whether the changes made to the plan should be cascaded to the children plans. When set to &#x60;true&#x60;, the changes will be cascaded into children. Conversely, when set to &#x60;false&#x60;, the changes will only be applied to the plan itself. If not defined in the request, default value is &#x60;false&#x60;. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
