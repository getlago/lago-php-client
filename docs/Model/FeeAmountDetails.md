# # FeeAmountDetails

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**graduated_ranges** | [**\Lago\LagoPhpClient\Model\FeeAmountDetailsGraduatedRangesInner[]**](FeeAmountDetailsGraduatedRangesInner.md) | Graduated ranges, used for a &#x60;graduated&#x60; charge model. | [optional]
**graduated_percentage_ranges** | [**\Lago\LagoPhpClient\Model\FeeAmountDetailsGraduatedPercentageRangesInner[]**](FeeAmountDetailsGraduatedPercentageRangesInner.md) | Graduated percentage ranges, used for a &#x60;graduated_percentage&#x60; charge model. | [optional]
**free_units** | **string** | The quantity of units that are provided free of charge for each billing period in a &#x60;package&#x60; charge model. | [optional]
**paid_units** | **string** | The quantity of units that are not provided free of charge for each billing period in a &#x60;package&#x60; charge model. | [optional]
**per_package_size** | **int** | The quantity of units included, defined for Package or Percentage charge model. | [optional]
**per_package_unit_amount** | **string** | Total amount to charge for received paid_units, defined for Package or Percentage charge model. | [optional]
**units** | **string** | The total units received in Lago for the Percentage charge model. | [optional]
**free_events** | **int** | Total number of free events allowed for the Percentage charge model. | [optional]
**rate** | **string** | Percentage rate applied for the Percentage charge model. | [optional]
**per_unit_total_amount** | **string** | Total amount of received units to be charged for the Percentage charge model. | [optional]
**paid_events** | **int** | Total number of paid events for the Percentage charge model. | [optional]
**fixed_fee_unit_amount** | **string** | Fixed fee unit price per received paid_event for the Percentage charge model. | [optional]
**fixed_fee_total_amount** | **string** | Total amount to charge for received paid_events for the Percentage charge model. | [optional]
**min_max_adjustment_total_amount** | **string** | Total adjustment amount linked to minimum and maximum spending per transaction for the Percentage charge model. | [optional]
**volume_ranges** | [**\Lago\LagoPhpClient\Model\FeeAmountDetailsVolumeRangesInner[]**](FeeAmountDetailsVolumeRangesInner.md) | Volume ranges, used for a &#x60;volume&#x60; charge model. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
