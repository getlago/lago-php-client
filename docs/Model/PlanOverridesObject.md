# # PlanOverridesObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**amount_cents** | **int** | The base cost of the plan, excluding any applicable taxes, that is billed on a recurring basis. This value is defined at 0 if your plan is a pay-as-you-go plan. | [optional]
**amount_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the plan. It indicates the monetary unit in which the plan&#39;s cost, including taxes and usage-based charges, is expressed. | [optional]
**description** | **string** | The description on the plan. | [optional]
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the plan will be used as the default display name. | [optional]
**name** | **string** | The name of the plan. | [optional]
**tax_codes** | **string[]** | List of unique code used to identify the taxes. | [optional]
**trial_period** | **float** | The duration in days during which the base cost of the plan is offered for free. | [optional]
**minimum_commitment** | [**\Lago\LagoPhpClient\Model\MinimumCommitmentObject**](MinimumCommitmentObject.md) |  | [optional]
**charges** | [**\Lago\LagoPhpClient\Model\PlanOverridesObjectChargesInner[]**](PlanOverridesObjectChargesInner.md) | Additional usage-based charges for this plan. | [optional]
**usage_thresholds** | [**\Lago\LagoPhpClient\Model\UsageThresholdObject[]**](UsageThresholdObject.md) | List of usage thresholds applied to the subscription. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
