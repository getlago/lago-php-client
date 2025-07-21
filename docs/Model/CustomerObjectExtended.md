# # CustomerObjectExtended

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the customer within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the customer&#39;s record within the Lago system |
**sequential_id** | **int** | The unique identifier assigned to the customer within the organization&#39;s scope. This identifier is used to track and reference the customer&#39;s order of creation within the organization&#39;s system. It ensures that each customer has a distinct &#x60;sequential_id&#x60;&#x60; associated with them, allowing for easy identification and sorting based on the order of creation |
**slug** | **string** | A concise and unique identifier for the customer, formed by combining the Organization&#39;s &#x60;name&#x60;, &#x60;id&#x60;, and customer&#39;s &#x60;sequential_id&#x60; |
**external_id** | **string** | The customer external unique identifier (provided by your own application) |
**billing_entity_code** | **string** | The unique code of the billing entity associated with the customer. | [optional]
**address_line1** | **string** | The first line of the billing address | [optional]
**address_line2** | **string** | The second line of the billing address | [optional]
**applicable_timezone** | [**\Lago\LagoPhpClient\Model\Timezone**](Timezone.md) | The customer&#39;s applicable timezone, used for billing purposes in their local time. |
**city** | **string** | The city of the customer&#39;s billing address | [optional]
**country** | [**\Lago\LagoPhpClient\Model\CountryOrNull**](CountryOrNull.md) | Country code of the customer&#39;s billing address. Format must be ISO 3166 (alpha-2) | [optional]
**currency** | [**\Lago\LagoPhpClient\Model\CurrencyOrNull**](CurrencyOrNull.md) | Currency of the customer. Format must be ISO 4217 | [optional]
**email** | **string** | The email of the customer | [optional]
**legal_name** | **string** | The legal company name of the customer | [optional]
**legal_number** | **string** | The legal company number of the customer | [optional]
**logo_url** | **string** | The logo URL of the customer | [optional]
**name** | **string** | The full name of the customer | [optional]
**firstname** | **string** | First name of the customer | [optional]
**lastname** | **string** | Last name of the customer | [optional]
**account_type** | **string** | The type of the account. It can have one of the following values: - &#x60;customer&#x60;: the account is a customer. - &#x60;partner&#x60;: the account is a partner. | [optional]
**customer_type** | **string** | The type of the customer. It can have one of the following values: - &#x60;company&#x60;: the customer is a company. - &#x60;individual&#x60;: the customer is an individual. | [optional]
**phone** | **string** | The phone number of the customer | [optional]
**state** | **string** | The state of the customer&#39;s billing address | [optional]
**tax_identification_number** | **string** | The tax identification number of the customer | [optional]
**timezone** | [**\Lago\LagoPhpClient\Model\TimezoneOrNull**](TimezoneOrNull.md) | The customer&#39;s timezone, used for billing purposes in their local time. Overrides the organization&#39;s timezone | [optional]
**url** | **string** | The custom website URL of the customer | [optional]
**zipcode** | **string** | The zipcode of the customer&#39;s billing address | [optional]
**net_payment_term** | **int** | The net payment term, expressed in days, specifies the duration within which a customer is expected to remit payment after the invoice is finalized. | [optional]
**created_at** | **\DateTime** | The date of the customer creation, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). The creation_date provides a standardized and internationally recognized timestamp for when the customer object was created |
**updated_at** | **\DateTime** | The date of the customer update, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). The update_date provides a standardized and internationally recognized timestamp for when the customer object was updated | [optional]
**finalize_zero_amount_invoice** | **string** | Specifies how invoices with a zero total amount should be handled: - &#x60;inherit&#x60;: (Default) Follows the organization-level configuration. - &#x60;finalize&#x60;: Invoices are issued and finalized even if the total amount is zero. - &#x60;skip&#x60;: Invoices with a total amount of zero are not finalized. | [optional]
**skip_invoice_custom_sections** | **bool** | Set to true to exclude all invoice custom sections from PDF generation for this customer only. | [optional]
**billing_configuration** | [**\Lago\LagoPhpClient\Model\CustomerBillingConfiguration**](CustomerBillingConfiguration.md) |  | [optional]
**shipping_address** | [**\Lago\LagoPhpClient\Model\Address**](Address.md) |  | [optional]
**metadata** | [**\Lago\LagoPhpClient\Model\CustomerMetadata[]**](CustomerMetadata.md) |  | [optional]
**integration_customers** | [**\Lago\LagoPhpClient\Model\IntegrationCustomer[]**](IntegrationCustomer.md) |  | [optional]
**taxes** | [**\Lago\LagoPhpClient\Model\TaxObject[]**](TaxObject.md) | List of customer taxes | [optional]
**applicable_invoice_custom_sections** | [**\Lago\LagoPhpClient\Model\InvoiceCustomSectionObject[]**](InvoiceCustomSectionObject.md) | The customer’s invoice custom section used for generating invoices. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
