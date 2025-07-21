# # ChargeProperties

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**grouped_by** | **string[]** | The list of event properties that are used to group the events on the invoice for a &#x60;standard&#x60; charge model. **DEPRECATED** Replaced by &#x60;pricing_group_keys&#x60;. | [optional]
**pricing_group_keys** | **string[]** | The list of event properties that are used to group the events on the invoice. | [optional]
**graduated_ranges** | [**\Lago\LagoPhpClient\Model\ChargePropertiesGraduatedRangesInner[]**](ChargePropertiesGraduatedRangesInner.md) | Graduated ranges, sorted from bottom to top tiers, used for a &#x60;graduated&#x60; charge model. | [optional]
**graduated_percentage_ranges** | [**\Lago\LagoPhpClient\Model\ChargePropertiesGraduatedPercentageRangesInner[]**](ChargePropertiesGraduatedPercentageRangesInner.md) | Graduated percentage ranges, sorted from bottom to top tiers, used for a &#x60;graduated_percentage&#x60; charge model. | [optional]
**amount** | **string** | - The unit price, excluding tax, for a &#x60;standard&#x60; charge model. It is expressed as a decimal value. - The amount, excluding tax, for a complete set of units in a &#x60;package&#x60; charge model. It is expressed as a decimal value. | [optional]
**free_units** | **int** | The quantity of units that are provided free of charge for each billing period in a &#x60;package&#x60; charge model. This field specifies the number of units that customers can use without incurring any additional cost during each billing cycle. | [optional]
**package_size** | **int** | The quantity of units included in each pack or set for a &#x60;package&#x60; charge model. It indicates the number of units that are bundled together as a single package or set within the pricing structure. | [optional]
**rate** | **string** | The percentage rate that is applied to the amount of each transaction for a &#x60;percentage&#x60; charge model. It is expressed as a decimal value. | [optional]
**fixed_amount** | **string** | The fixed fee that is applied to each transaction for a &#x60;percentage&#x60; charge model. It is expressed as a decimal value. | [optional]
**free_units_per_events** | **int** | The count of transactions that are not impacted by the &#x60;percentage&#x60; rate and fixed fee in a percentage charge model. This field indicates the number of transactions that are exempt from the calculation of charges based on the specified percentage rate and fixed fee. | [optional]
**free_units_per_total_aggregation** | **string** | The transaction amount that is not impacted by the &#x60;percentage&#x60; rate and fixed fee in a percentage charge model. This field indicates the portion of the transaction amount that is exempt from the calculation of charges based on the specified percentage rate and fixed fee. | [optional]
**per_transaction_max_amount** | **string** | Specifies the maximum allowable spending for a single transaction. Working as a transaction cap. | [optional]
**per_transaction_min_amount** | **string** | Specifies the minimum allowable spending for a single transaction. Working as a transaction floor. | [optional]
**volume_ranges** | [**\Lago\LagoPhpClient\Model\ChargePropertiesVolumeRangesInner[]**](ChargePropertiesVolumeRangesInner.md) | Volume ranges, sorted from bottom to top tiers, used for a &#x60;volume&#x60; charge model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
