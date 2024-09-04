# UpdateSignatureRequest

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** |  | [optional] 
**delivery_mode** | **string** | Delivery mode to notify signers. | [optional] 
**ordered_signers** | **bool** | Enable an ordered workflow, each signer will be requested to sign in a sequential order | [optional] 
**reminder_settings** | [**\Swagger\Client\Model\UpdateSignatureRequestReminderSettings**](UpdateSignatureRequestReminderSettings.md) |  | [optional] 
**timezone** | **string** | tz database format | [optional] 
**email_custom_note** | **string** |  | [optional] 
**expiration_date** | [**\DateTime**](\DateTime.md) | Due date of the signature request (yyyy-mm-dd). | [optional] 
**external_id** | **string** |  | [optional] 
**branding_id** | **string** |  | [optional] 
**custom_experience_id** | **string** | Use a specific Custom Experience to customize the signature experience. | [optional] 
**signers_allowed_to_decline** | **bool** | Allowing signers to decline to sign. | [optional] [default to false]
**workspace_id** | **string** | Transfer the Signature Request into a given Workspace. | [optional] 
**audit_trail_locale** | [**AllOfUpdateSignatureRequestAuditTrailLocale**](AllOfUpdateSignatureRequestAuditTrailLocale.md) | Define the locale for the generated audit trail. | [optional] 
**email_notification** | [**\Swagger\Client\Model\SignatureRequestEmailNotification**](SignatureRequestEmailNotification.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

