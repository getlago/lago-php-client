# # OrganizationObject

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the organization within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the organization&#39;s record within the Lago system |
**name** | **string** | The name of your organization. |
**created_at** | **\DateTime** | The date of creation of your organization, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). |
**webhook_url** | **string** | The URL of your newest updated webhook endpoint. This URL allows your organization to receive important messages, notifications, or data from the Lago system. By configuring your webhook endpoint to this URL, you can ensure that your organization stays informed and receives relevant information in a timely manner. | [optional]
**webhook_urls** | **string[]** | The array containing your webhooks URLs. | [optional]
**country** | [**\Lago\LagoPhpClient\Model\CountryOrNull**](CountryOrNull.md) | The country of your organization. | [optional]
**default_currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The default currency of an organization. | [optional]
**address_line1** | **string** | The first line of your organization&#39;s billing address. | [optional]
**address_line2** | **string** | The second line of your organization&#39;s billing address. | [optional]
**state** | **string** | The state of your organization&#39;s billing address. | [optional]
**zipcode** | **string** | The zipcode of your organization&#39;s billing address. | [optional]
**email** | **string** | The email address of your organization used to bill your customers. | [optional]
**city** | **string** | The city of your organization&#39;s billing address. | [optional]
**legal_name** | **string** | The legal name of your organization. | [optional]
**legal_number** | **string** | The legal number of your organization. | [optional]
**document_numbering** | **string** | This parameter configures the method of incrementing invoice numbers for your customers.  - &#x60;per_customer&#x60;: Invoice numbers are incremented individually for each customer. This means every customer will have their own unique sequence of invoice numbers, separate from other customers. It ensures that each customer&#39;s invoice numbers follow a distinct and isolated numbering pattern. - &#x60;per_organization&#x60;: Invoice number incrementation is made across your entire organization. Rather than individual sequences for each customer, all invoices within the organization follow a single, unified numbering system. This creates a continuous and organization-wide sequence for all invoice numbers. Invoices are incremented per month (dynamic value used is YYYYMM), and invoice numbers are reset at the end of each month.  The default value for &#x60;document_numbering&#x60; is set to &#x60;per_customer&#x60;, meaning that, unless changed, invoice numbers will increment uniquely for each customer. |
**document_number_prefix** | **string** | Sets the prefix for invoices and credit notes. Default is the first three letters of your organization name plus the last four digits of your organization ID. Customizable within 1-10 characters, and automatically capitalized by Lago. |
**net_payment_term** | **int** | The net payment term, expressed in days, specifies the duration within which a customer is expected to remit payment after the invoice is finalized. | [optional]
**tax_identification_number** | **string** | The tax identification number of your organization. | [optional]
**timezone** | [**\Lago\LagoPhpClient\Model\Timezone**](Timezone.md) | Your organization&#39;s timezone, used for billing purposes in your own local time. Can be overwritten by the customer&#39;s timezone. | [optional]
**billing_configuration** | [**\Lago\LagoPhpClient\Model\OrganizationBillingConfiguration**](OrganizationBillingConfiguration.md) |  |
**taxes** | [**\Lago\LagoPhpClient\Model\TaxObject[]**](TaxObject.md) | List of default organization taxes | [optional]
**finalize_zero_amount_invoice** | **bool** | Indicates whether invoices with a zero total amount should be finalized. If set to true, zero amount invoices will be finalized. If set to false, zero amount invoices will not be finalized. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
