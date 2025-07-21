# # PlanUpdateInputPlanChargesInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | Unique identifier of the charge created by Lago. | [optional]
**billable_metric_id** | **string** | Unique identifier of the billable metric created by Lago. | [optional]
**charge_model** | **string** | Specifies the pricing model used for the calculation of the final fee. It can be &#x60;standard&#x60;, &#x60;graduated&#x60;, &#x60;graduated_percentage&#x60;, &#x60;package&#x60;, &#x60;percentage&#x60;, &#x60;volume&#x60; or &#x60;dynamic&#x60;. | [optional]
**pay_in_advance** | **bool** | This field determines the billing timing for this specific usage-based charge. When set to &#x60;true&#x60;, the charge is due and invoiced immediately. Conversely, when set to false, the charge is due and invoiced at the end of each billing period. | [optional]
**invoiceable** | **bool** | This field specifies whether the charge should be included in a proper invoice. If set to false, no invoice will be issued for this charge. You can only set it to &#x60;false&#x60; when &#x60;pay_in_advance&#x60; is &#x60;true&#x60;. | [optional]
**regroup_paid_fees** | **string** | This setting can only be configured if &#x60;pay_in_advance&#x60; is &#x60;true&#x60; and &#x60;invoiceable&#x60; is &#x60;false&#x60;. This field determines whether and when the charge fee should be included in the invoice. If &#x60;null&#x60;, no invoice will be issued for this charge fee. If &#x60;invoice&#x60;, an invoice will be generated at the end of the period, consolidating all charge fees with a succeeded payment status. | [optional]
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. | [optional]
**prorated** | **bool** | Specifies whether a charge is prorated based on the remaining number of days in the billing period or billed fully.  - If set to &#x60;true&#x60;, the charge is prorated based on the remaining days in the current billing period. - If set to &#x60;false&#x60;, the charge is billed in full. - If not defined in the request, default value is &#x60;false&#x60;. | [optional]
**min_amount_cents** | **int** | The minimum spending amount required for the charge, measured in cents and excluding any applicable taxes. It indicates the minimum amount that needs to be charged for each billing period. | [optional]
**properties** | [**\Lago\LagoPhpClient\Model\ChargeProperties**](ChargeProperties.md) | List of all thresholds utilized for calculating the charge. | [optional]
**filters** | [**\Lago\LagoPhpClient\Model\ChargeFilterInput[]**](ChargeFilterInput.md) | List of filters used to apply differentiated pricing based on additional event properties. | [optional]
**tax_codes** | **string[]** | List of unique code used to identify the taxes. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
