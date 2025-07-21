# # ChargeObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier of charge, created by Lago. |
**lago_billable_metric_id** | **string** | Unique identifier of the billable metric created by Lago. |
**billable_metric_code** | **string** | Unique code identifying a billable metric. |
**invoice_display_name** | **string** | Specifies the name that will be displayed on an invoice. If no value is set for this field, the name of the actual charge will be used as the default display name. |
**created_at** | **\DateTime** | The date and time when the charge was created. It is expressed in UTC format according to the ISO 8601 datetime standard. |
**charge_model** | **string** | Specifies the pricing model used for the calculation of the final fee. It can be &#x60;standard&#x60;, &#x60;graduated&#x60;, &#x60;graduated_percentage&#x60;, &#x60;package&#x60;, &#x60;percentage&#x60;, &#x60;volume&#x60; or &#x60;dynamic&#x60;. |
**pay_in_advance** | **bool** | This field determines the billing timing for this specific usage-based charge. When set to &#x60;true&#x60;, the charge is due and invoiced immediately. Conversely, when set to &#x60;false&#x60;, the charge is due and invoiced at the end of each billing period. |
**invoiceable** | **bool** | This field specifies whether the charge should be included in a proper invoice. If set to &#x60;false&#x60;, no invoice will be issued for this charge. You can only set it to &#x60;false&#x60; when &#x60;pay_in_advance&#x60; is &#x60;true&#x60;. |
**regroup_paid_fees** | **string** | This setting can only be configured if &#x60;pay_in_advance&#x60; is &#x60;true&#x60; and &#x60;invoiceable&#x60; is &#x60;false&#x60;. This field determines whether and when the charge fee should be included in the invoice. If &#x60;null&#x60;, no invoice will be issued for this charge fee. If &#x60;invoice&#x60;, an invoice will be generated at the end of the period, consolidating all charge fees with a succeeded payment status. |
**prorated** | **bool** | Specifies whether a charge is prorated based on the remaining number of days in the billing period or billed fully.  - If set to &#x60;true&#x60;, the charge is prorated based on the remaining days in the current billing period. - If set to &#x60;false&#x60;, the charge is billed in full. - If not defined in the request, default value is &#x60;false&#x60;. |
**min_amount_cents** | **int** | The minimum spending amount required for the charge, measured in cents and excluding any applicable taxes. It indicates the minimum amount that needs to be charged for each billing period. |
**properties** | [**\Lago\LagoPhpClient\Model\ChargeProperties**](ChargeProperties.md) | List of all thresholds utilized for calculating the charge. |
**filters** | [**\Lago\LagoPhpClient\Model\ChargeFilterObject[]**](ChargeFilterObject.md) | List of filters used to apply differentiated pricing based on additional event properties. |
**taxes** | [**\Lago\LagoPhpClient\Model\TaxObject[]**](TaxObject.md) | All taxes applied to the charge. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
