# # SubscriptionUpdateInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**status** | **string** | If the field is not defined and multiple &#x60;active&#x60; and &#x60;pending&#x60; subscriptions exists, Lago will update the &#x60;active&#x60; subscription. However, if you wish to update a &#x60;pending&#x60; subscription, please ensure that you include the &#x60;status&#x60; attribute with the &#x60;pending&#x60; value in your request body. | [optional]
**subscription** | [**\Lago\LagoPhpClient\Model\SubscriptionUpdateInputSubscription**](SubscriptionUpdateInputSubscription.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
