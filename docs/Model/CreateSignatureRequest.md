# # CreateSignatureRequest

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | Name of the signature request |
**delivery_mode** | **string** | Delivery mode to notify signers. |
**ordered_signers** | **bool** | Enable an ordered workflow, each signer will be requested to sign in a sequential order | [optional]
**reminder_settings** | [**\Yousign\Client\Model\CreateSignatureRequestReminderSettings**](CreateSignatureRequestReminderSettings.md) |  | [optional]
**timezone** | **string** | tz database format | [optional]
**email_custom_note** | **string** | A custom note added to emails sent to signers. | [optional]
**expiration_date** | **\DateTime** | Due date of the signature request (yyyy-mm-dd). Default to 6 month after the activation. | [optional]
**template_id** | **string** | Create a signature request from an existing template. | [optional]
**external_id** | **string** | Store a custom id that will be added to webhooks &amp; appended to redirect urls. | [optional]
**branding_id** | **string** | Use a specific branding to customize the signature experience. | [optional]
**custom_experience_id** | **string** | Use a specific Custom Experience to customize the signature experience. | [optional]
**documents** | **string[]** | You can directly attach orphan documents to the signature request. | [optional]
**signers** | [**\Yousign\Client\Model\CreateSignatureRequestSignersInner[]**](CreateSignatureRequestSignersInner.md) | Can only be used if you add documents at the same time. | [optional]
**workspace_id** | **string** | Scope the signature request to a specific workspace. If template_id is filled and Template is already linked to a Workspace, keep this field to null ; the created Signature Request will be scoped to Template&#39;s Workspace. | [optional]
**audit_trail_locale** | [**\Yousign\Client\Model\AuditTrailLocale**](AuditTrailLocale.md) | Define the locale for the generated audit trail. | [optional]
**signers_allowed_to_decline** | **bool** | Allowing signers to decline to sign. | [optional] [default to false]
**email_notification** | [**\Yousign\Client\Model\SignatureRequestEmailNotification**](SignatureRequestEmailNotification.md) |  | [optional]
**template_placeholders** | [**\Yousign\Client\Model\CreateSignatureRequestTemplatePlaceholders**](CreateSignatureRequestTemplatePlaceholders.md) |  | [optional]
**archiving** | [**\Yousign\Client\Model\Archiving**](Archiving.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
