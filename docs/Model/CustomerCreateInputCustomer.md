# # CustomerCreateInputCustomer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**external_id** | **string** | The customer external unique identifier (provided by your own application) |
**billing_entity_code** | **string** | The unique code of the billing entity to associate with the customer. If not provided, the default billing entity will be used. | [optional]
**address_line1** | **string** | The first line of the billing address | [optional]
**address_line2** | **string** | The second line of the billing address | [optional]
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
**account_type** | **string** | The type of the account. It can have one of the following values: - &#x60;customer&#x60;: the account is a customer, default value. - &#x60;partner&#x60;: the account is a partner. | [optional]
**customer_type** | **string** | The type of the customer. It can have one of the following values: - &#x60;company&#x60;: the customer is a company. - &#x60;individual&#x60;: the customer is an individual. | [optional]
**phone** | **string** | The phone number of the customer | [optional]
**state** | **string** | The state of the customer&#39;s billing address | [optional]
**tax_codes** | **string[]** | List of unique code used to identify the taxes. | [optional]
**tax_identification_number** | **string** | The tax identification number of the customer | [optional]
**timezone** | [**\Lago\LagoPhpClient\Model\TimezoneOrNull**](TimezoneOrNull.md) | The customer&#39;s timezone, used for billing purposes in their local time. Overrides the organization&#39;s timezone | [optional]
**url** | **string** | The custom website URL of the customer | [optional]
**zipcode** | **string** | The zipcode of the customer&#39;s billing address | [optional]
**net_payment_term** | **int** | The net payment term, expressed in days, specifies the duration within which a customer is expected to remit payment after the invoice is finalized. | [optional]
**finalize_zero_amount_invoice** | **string** | Specifies how invoices with a zero total amount should be handled: - &#x60;inherit&#x60;: (Default) Follows the organization-level configuration. - &#x60;finalize&#x60;: Invoices are issued and finalized even if the total amount is zero. - &#x60;skip&#x60;: Invoices with a total amount of zero are not finalized. | [optional]
**billing_configuration** | [**\Lago\LagoPhpClient\Model\CustomerBillingConfiguration**](CustomerBillingConfiguration.md) |  | [optional]
**shipping_address** | [**\Lago\LagoPhpClient\Model\Address**](Address.md) |  | [optional]
**integration_customers** | [**\Lago\LagoPhpClient\Model\CustomerCreateInputCustomerIntegrationCustomersInner[]**](CustomerCreateInputCustomerIntegrationCustomersInner.md) |  | [optional]
**metadata** | [**\Lago\LagoPhpClient\Model\CustomerCreateInputCustomerMetadataInner[]**](CustomerCreateInputCustomerMetadataInner.md) | Set of key-value pairs that you can attach to a customer. This can be useful for storing additional information about the customer in a structured format | [optional]
**skip_invoice_custom_sections** | **bool** | Set to &#x60;true&#x60; to exclude all invoice custom sections from PDF generation for this customer only. False by default | [optional]
**invoice_custom_section_codes** | **string[]** | List of unique codes identifying the invoice custom sections. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
