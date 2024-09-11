# # SignatureRequestActivated

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**status** | **string** |  |
**name** | **string** |  |
**delivery_mode** | **string** |  |
**created_at** | **\DateTime** |  |
**ordered_signers** | **bool** | Enable an ordered workflow, each signer will be requested to sign in a sequential order |
**reminder_settings** | [**\Yousign\Client\Model\SignatureRequestInListReminderSettings**](SignatureRequestInListReminderSettings.md) |  |
**timezone** | **string** |  |
**email_custom_note** | **string** |  |
**expiration_date** | **\DateTime** |  |
**signers** | [**\Yousign\Client\Model\EmbeddedSignerWithSignatureLink[]**](EmbeddedSignerWithSignatureLink.md) |  |
**approvers** | [**\Yousign\Client\Model\ApproverToNotify[]**](ApproverToNotify.md) |  | [optional]
**documents** | [**\Yousign\Client\Model\SignatureRequestActivatedDocumentsInner[]**](SignatureRequestActivatedDocumentsInner.md) |  |
**external_id** | **string** |  |
**branding_id** | **string** |  |
**custom_experience_id** | **string** |  |
**audit_trail_locale** | [**\Yousign\Client\Model\AuditTrailLocale**](AuditTrailLocale.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
