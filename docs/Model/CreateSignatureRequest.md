# CreateSignatureRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the signature request | 
**delivery_mode** | **string** | Delivery mode to notify signers. | 
**ordered_signers** | **bool** | Enable an ordered workflow, each signer will be requested to sign in a sequential order | [optional] 
**reminder_settings** | [**\Swagger\Client\Model\CreateSignatureRequestReminderSettings**](CreateSignatureRequestReminderSettings.md) |  | [optional] 
**timezone** | **string** | tz database format | [optional] 
**email_custom_note** | **string** | A custom note added to emails sent to signers. | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | Due date of the signature request (yyyy-mm-dd). Default to 6 month after the activation. | [optional] 
**template_id** | **string** | Create a signature request from an existing template. | [optional] 
**external_id** | **string** | Store a custom id that will be added to webhooks &amp; appended to redirect urls. | [optional] 
**branding_id** | **string** | Use a specific branding to customize the signature experience. | [optional] 
**custom_experience_id** | **string** | Use a specific Custom Experience to customize the signature experience. | [optional] 
**documents** | **string[]** | You can directly attach orphan documents to the signature request. | [optional] 
**signers** | [**\Swagger\Client\Model\CreateSignatureRequestSignersInner[]**](CreateSignatureRequestSignersInner.md) | Can only be used if you add documents at the same time. | [optional] 
**workspace_id** | **string** | Scope the signature request to a specific workspace. If template_id is filled and Template is already linked to a Workspace, keep this field to null ; the created Signature Request will be scoped to Template&#x27;s Workspace. | [optional] 
**audit_trail_locale** | [**AllOfCreateSignatureRequestAuditTrailLocale**](AllOfCreateSignatureRequestAuditTrailLocale.md) | Define the locale for the generated audit trail. | [optional] 
**signers_allowed_to_decline** | **bool** | Allowing signers to decline to sign. | [optional] [default to false]
**email_notification** | [**\Swagger\Client\Model\SignatureRequestEmailNotification**](SignatureRequestEmailNotification.md) |  | [optional] 
**template_placeholders** | [**\Swagger\Client\Model\CreateSignatureRequestTemplatePlaceholders**](CreateSignatureRequestTemplatePlaceholders.md) |  | [optional] 
**archiving** | [**\Swagger\Client\Model\Archiving**](Archiving.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

