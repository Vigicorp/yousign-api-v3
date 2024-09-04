# SignatureRequestInList

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**status** | [**\Swagger\Client\Model\SignatureRequestStatus**](SignatureRequestStatus.md) |  | 
**name** | **string** |  | 
**delivery_mode** | **string** |  | 
**created_at** | [**\DateTime**](\DateTime.md) |  | 
**ordered_signers** | **bool** | Enable an ordered workflow, each signer will be requested to sign in a sequential order | 
**reminder_settings** | [**\Swagger\Client\Model\SignatureRequestInListReminderSettings**](SignatureRequestInListReminderSettings.md) |  | 
**timezone** | **string** |  | 
**email_custom_note** | **string** |  | 
**expiration_date** | [**\DateTime**](\DateTime.md) |  | 
**source** | **string** |  | 
**signers** | [**\Swagger\Client\Model\SignatureRequestInListSignersInner[]**](SignatureRequestInListSignersInner.md) |  | 
**approvers** | [**\Swagger\Client\Model\SignatureRequestInListApproversInner[]**](SignatureRequestInListApproversInner.md) |  | [optional] 
**documents** | [**\Swagger\Client\Model\SignatureRequestInListDocumentsInner[]**](SignatureRequestInListDocumentsInner.md) |  | 
**sender** | [**\Swagger\Client\Model\SignatureRequestInListSender**](SignatureRequestInListSender.md) |  | 
**external_id** | **string** |  | 
**branding_id** | **string** |  | 
**custom_experience_id** | **string** |  | 
**signers_allowed_to_decline** | **bool** |  | 
**workspace_id** | **string** |  | [optional] 
**audit_trail_locale** | [**\Swagger\Client\Model\AuditTrailLocale**](AuditTrailLocale.md) |  | 
**bulk_send_batch_id** | **string** |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

