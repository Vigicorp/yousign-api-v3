# # CreateSigner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**info** | [**\Yousign\Client\Model\FromScratch1Info**](FromScratch1Info.md) |  |
**fields** | [**\Yousign\Client\Model\FieldsInput[]**](FieldsInput.md) |  | [optional]
**insert_after_id** | **string** | Insert just after the position of the specified signer id | [optional]
**signature_level** | **string** |  |
**signature_authentication_mode** | **string** |  | [optional]
**redirect_urls** | [**\Yousign\Client\Model\FromScratch1RedirectUrls**](FromScratch1RedirectUrls.md) |  | [optional]
**custom_text** | [**\Yousign\Client\Model\FromScratch1CustomText**](FromScratch1CustomText.md) |  | [optional]
**delivery_mode** | [**\Yousign\Client\Model\SignerDeliveryMode**](SignerDeliveryMode.md) |  | [optional]
**identification_attestation_id** | **string** |  | [optional]
**sms_notification** | [**\Yousign\Client\Model\SmsNotification1**](SmsNotification1.md) |  | [optional]
**user_id** | **string** | Create signer from an existing user |
**contact_id** | **string** | Create signer from an existing contact |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
