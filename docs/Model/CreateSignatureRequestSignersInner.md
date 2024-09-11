# # CreateSignatureRequestSignersInner

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**info** | [**\Yousign\Client\Model\SignatureRequestSignerFromInfoInputInfo**](SignatureRequestSignerFromInfoInputInfo.md) |  |
**fields** | [**\Yousign\Client\Model\FieldsInput[]**](FieldsInput.md) |  | [optional]
**signature_level** | **string** |  | [default to 'electronic_signature']
**signature_authentication_mode** | **string** |  | [optional]
**redirect_urls** | [**\Yousign\Client\Model\SignatureRequestSignerFromInfoInputRedirectUrls**](SignatureRequestSignerFromInfoInputRedirectUrls.md) |  | [optional]
**custom_text** | [**\Yousign\Client\Model\FromScratch1CustomText**](FromScratch1CustomText.md) |  | [optional]
**user_id** | **string** | Create signer from an existing user |
**contact_id** | **string** | Create signer from an existing contact |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
