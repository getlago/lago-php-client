# # InvoicePreviewInputCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**address_line1** | **string** | The first line of the billing address | [optional]
**address_line2** | **string** | The second line of the billing address | [optional]
**city** | **string** | The city of the customer&#39;s billing address | [optional]
**country** | [**\Lago\LagoPhpClient\Model\Country**](Country.md) | Country code of the customer&#39;s billing address. Format must be ISO 3166 (alpha-2) | [optional]
**external_id** | **string** | Unique identifier assigned to the customer in your application. | [optional]
**integration_customers** | [**\Lago\LagoPhpClient\Model\InvoicePreviewInputCustomerIntegrationCustomersInner[]**](InvoicePreviewInputCustomerIntegrationCustomersInner.md) |  | [optional]
**name** | **string** | The full name of the customer | [optional]
**currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the invoice. | [optional]
**shipping_address** | [**\Lago\LagoPhpClient\Model\Address**](Address.md) |  | [optional]
**state** | **string** | The state of the customer&#39;s billing address | [optional]
**tax_identification_number** | **string** | The tax identification number of the customer | [optional]
**timezone** | [**\Lago\LagoPhpClient\Model\Timezone**](Timezone.md) | The customer&#39;s timezone, used for billing purposes in their local time. Overrides the organization&#39;s timezone | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
