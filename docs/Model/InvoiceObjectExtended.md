# # InvoiceObjectExtended

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**lago_id** | **string** | Unique identifier assigned to the fee within the Lago application. This ID is exclusively created by Lago and serves as a unique identifier for the fee&#39;s record within the Lago system. |
**billing_entity_code** | **string** | The unique code of the billing entity associated with the invoice |
**sequential_id** | **int** | This ID helps in uniquely identifying and organizing the invoices associated with a specific customer. It provides a sequential numbering system specific to the customer, allowing for easy tracking and management of invoices within the customer&#39;s context. | [optional]
**number** | **string** | The unique number assigned to the invoice. This number serves as a distinct identifier for the invoice and helps in differentiating it from other invoices in the system. |
**issuing_date** | **\DateTime** | The date when the invoice was issued. It is provided in the ISO 8601 date format. |
**payment_dispute_lost_at** | **\DateTime** | The date when the payment dispute was lost. It is expressed in Coordinated Universal Time (UTC). | [optional]
**payment_due_date** | **\DateTime** | The payment due date for the invoice, specified in the ISO 8601 date format. | [optional]
**payment_overdue** | **bool** | Specifies if the payment is considered as overdue. | [optional]
**net_payment_term** | **int** | The net payment term, expressed in days, specifies the duration within which a customer is expected to remit payment after the invoice is finalized. | [optional]
**invoice_type** | **string** | The type of invoice issued. Possible values are &#x60;subscription&#x60;, &#x60;one-off&#x60;, &#x60;credit&#x60; or &#x60;progressive_billing&#x60;. |
**status** | **string** | The status of the invoice. It indicates the current state of the invoice and can have following values: - &#x60;draft&#x60;: the invoice is in the draft state, waiting for the end of the grace period to be finalized. During this period, events can still be ingested and added to the invoice. - &#x60;finalized&#x60;: the invoice has been issued and finalized. In this state, events cannot be ingested or added to the invoice anymore. - &#x60;voided&#x60;: the invoice has been issued and subsequently voided. In this state, events cannot be ingested or added to the invoice anymore. - &#x60;pending&#x60;: the invoice remains pending until the taxes are fetched from the external provider. - &#x60;failed&#x60;: during an attempt of finalization of the invoice, an error happened. This invoice will have an array of error_details, explaining, in which part of the system an error happened and how it&#39;s possible to fix it. This invoice can&#39;t be edited or updated, only retried. This action will discard current error_details and will create new ones if the finalization failed again. |
**payment_status** | **string** | The status of the payment associated with the invoice. It can have one of the following values: - &#x60;pending&#x60;: the payment is pending, waiting for payment processing in Stripe or when the invoice is emitted but users have not updated the payment status through the endpoint. - &#x60;succeeded&#x60;: the payment of the invoice has been successfully processed. - &#x60;failed&#x60;: the payment of the invoice has failed or encountered an error during processing. |
**currency** | [**\Lago\LagoPhpClient\Model\Currency**](Currency.md) | The currency of the invoice issued. |
**fees_amount_cents** | **int** | The total sum of fees amount in cents. It calculates the cumulative amount of all the fees associated with the invoice, providing a consolidated value. |
**coupons_amount_cents** | **int** | The total sum of all coupons discounted on the invoice. It calculates the cumulative discount amount applied by coupons, expressed in cents. |
**credit_notes_amount_cents** | **int** | The total sum of all credit notes discounted on the invoice. It calculates the cumulative discount amount applied by credit notes, expressed in cents. |
**sub_total_excluding_taxes_amount_cents** | **int** | Subtotal amount, excluding taxes, expressed in cents. This field depends on the version number. Here are the definitions based on the version: - Version 1: is equal to the sum of &#x60;fees_amount_cents&#x60;, minus &#x60;coupons_amount_cents&#x60;, and minus &#x60;prepaid_credit_amount_cents&#x60;. - Version 2: is equal to the &#x60;fees_amount_cents&#x60;. - Version 3 &amp; 4: is equal to the &#x60;fees_amount_cents&#x60;, minus &#x60;coupons_amount_cents&#x60; |
**taxes_amount_cents** | **int** | The sum of tax amount associated with the invoice, expressed in cents. |
**sub_total_including_taxes_amount_cents** | **int** | Subtotal amount, including taxes, expressed in cents. This field depends on the version number. Here are the definitions based on the version: - Version 1: is equal to the &#x60;total_amount_cents&#x60;. - Version 2: is equal to the sum of &#x60;fees_amount_cents&#x60; and &#x60;taxes_amount_cents&#x60;. - Version 3 &amp; 4: is equal to the sum &#x60;sub_total_excluding_taxes_amount_cents&#x60; and &#x60;taxes_amount_cents&#x60; |
**prepaid_credit_amount_cents** | **int** | The total sum of all prepaid credits discounted on the invoice. It calculates the cumulative discount amount applied by prepaid credits, expressed in cents. |
**progressive_billing_credit_amount_cents** | **int** | The usage already billed in previous invoices. Only apply to &#x60;progressive_billing&#x60; and &#x60;subscription&#x60; invoices. |
**total_amount_cents** | **int** | The sum of the amount and taxes amount on the invoice, expressed in cents. It calculates the total financial value of the invoice, including both the original amount and any applicable taxes. |
**version_number** | **int** |  |
**self_billed** | **bool** | Indicates if the invoice is self-billed. Self-billing is a process where an organization creates the invoice on behalf of the partner. This field specifies whether the invoice is self-billed or not. | [optional]
**file_url** | **string** | Contains the URL that provides direct access to the invoice PDF file. You can use this URL to download or view the PDF document of the invoice | [optional]
**created_at** | **\DateTime** | The date of the invoice creation, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). The creation_date provides a standardized and internationally recognized timestamp for when the invoice object was created |
**updated_at** | **\DateTime** | The date of the invoice update, represented in ISO 8601 datetime format and expressed in Coordinated Universal Time (UTC). The update_date provides a standardized and internationally recognized timestamp for when the invoice object was updated |
**customer** | [**\Lago\LagoPhpClient\Model\CustomerObject**](CustomerObject.md) | The customer on which the invoice applies. It refers to the customer account or entity associated with the invoice. | [optional]
**billing_periods** | [**\Lago\LagoPhpClient\Model\BillingPeriodObject[]**](BillingPeriodObject.md) |  | [optional]
**metadata** | [**\Lago\LagoPhpClient\Model\InvoiceMetadataObject[]**](InvoiceMetadataObject.md) |  | [optional]
**applied_taxes** | [**\Lago\LagoPhpClient\Model\InvoiceAppliedTaxObject[]**](InvoiceAppliedTaxObject.md) |  | [optional]
**applied_usage_thresholds** | [**\Lago\LagoPhpClient\Model\AppliedUsageThresholdObject[]**](AppliedUsageThresholdObject.md) |  | [optional]
**credits** | [**\Lago\LagoPhpClient\Model\CreditObject[]**](CreditObject.md) |  | [optional]
**fees** | [**\Lago\LagoPhpClient\Model\FeeObject[]**](FeeObject.md) |  | [optional]
**subscriptions** | [**\Lago\LagoPhpClient\Model\SubscriptionObject[]**](SubscriptionObject.md) |  | [optional]
**error_details** | [**\Lago\LagoPhpClient\Model\ErrorDetailObject[]**](ErrorDetailObject.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
