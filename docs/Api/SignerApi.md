# Swagger\Client\SignerApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestIdSignersSignerId**](SignerApi.md#deletesignaturerequestssignaturerequestidsignerssignerid) | **DELETE** /signature_requests/{signatureRequestId}/signers/{signerId} | Delete a Signer
[**getSignatureRequestsSignatureRequestIdSigners**](SignerApi.md#getsignaturerequestssignaturerequestidsigners) | **GET** /signature_requests/{signatureRequestId}/signers | List Signature Request&#x27;s Signers
[**getSignersSignersId**](SignerApi.md#getsignerssignersid) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId} | Get a Signer
[**patchSignatureRequestsSignatureRequestIdSignersSignerId**](SignerApi.md#patchsignaturerequestssignaturerequestidsignerssignerid) | **PATCH** /signature_requests/{signatureRequestId}/signers/{signerId} | Update a Signer
[**postSignatureRequestsSignatureRequestIdSigners**](SignerApi.md#postsignaturerequestssignaturerequestidsigners) | **POST** /signature_requests/{signatureRequestId}/signers | Create a new Signer
[**postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp**](SignerApi.md#postsignaturerequestssignaturerequestidsignerssigneridsendotp) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/send_otp | Send a One-Time Password (OTP) to a Signer
[**postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder**](SignerApi.md#postsignaturerequestssignaturerequestidsignerssigneridsendreminder) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/send_reminder | Send manual reminder to a Signer
[**postSignatureRequestsSignatureRequestIdSignersSignerIdSign**](SignerApi.md#postsignaturerequestssignaturerequestidsignerssigneridsign) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/sign | Sign a Signature Request

# **deleteSignatureRequestsSignatureRequestIdSignersSignerId**
> deleteSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id)

Delete a Signer

Deletes a given Signer from a Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->deleteSignatureRequestsSignatureRequestIdSignersSignerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdSigners**
> \Swagger\Client\Model\Signer[] getSignatureRequestsSignatureRequestIdSigners($signature_request_id)

List Signature Request's Signers

Returns a list of Signers for a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdSigners($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->getSignatureRequestsSignatureRequestIdSigners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |

### Return type

[**\Swagger\Client\Model\Signer[]**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignersSignersId**
> \Swagger\Client\Model\Signer getSignersSignersId($signature_request_id, $signer_id)

Get a Signer

Retrieves a given Signer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $result = $apiInstance->getSignersSignersId($signature_request_id, $signer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->getSignersSignersId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

[**\Swagger\Client\Model\Signer**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSignatureRequestsSignatureRequestIdSignersSignerId**
> \Swagger\Client\Model\Signer patchSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id, $body)

Update a Signer

Updates a given Signer. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id
$body = new \Swagger\Client\Model\UpdateSigner(); // \Swagger\Client\Model\UpdateSigner | 

try {
    $result = $apiInstance->patchSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->patchSignatureRequestsSignatureRequestIdSignersSignerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |
 **body** | [**\Swagger\Client\Model\UpdateSigner**](../Model/UpdateSigner.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Signer**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdSigners**
> \Swagger\Client\Model\Signer postSignatureRequestsSignatureRequestIdSigners($signature_request_id, $body)

Create a new Signer

Adds a Signer to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Swagger\Client\Model\CreateSigner(); // \Swagger\Client\Model\CreateSigner | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdSigners($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSigners: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Swagger\Client\Model\CreateSigner**](../Model/CreateSigner.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Signer**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp**
> postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp($signature_request_id, $signer_id)

Send a One-Time Password (OTP) to a Signer

Send a One-Time Password (OTP) to a given Signer. Use this endpoint only if you use your own signing flow.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder**
> postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder($signature_request_id, $signer_id)

Send manual reminder to a Signer

Sends a reminder to a given signer to complete their Signature Request. Only possible when the Signature Request status is `ongoing` and the Signer status is `notified`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdSignersSignerIdSign**
> postSignatureRequestsSignatureRequestIdSignersSignerIdSign($signature_request_id, $signer_id, $body)

Sign a Signature Request

Sign a Signature Request on behalf of a given Signer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id
$body = new \Swagger\Client\Model\SignerSign(); // \Swagger\Client\Model\SignerSign | 

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSign($signature_request_id, $signer_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |
 **body** | [**\Swagger\Client\Model\SignerSign**](../Model/SignerSign.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdSignersSignerIdSign**
> postSignatureRequestsSignatureRequestIdSignersSignerIdSign($signature_request_id, $signer_id, $otp, $ip_address, $consent_given_at, $signature_image)

Sign a Signature Request

Sign a Signature Request on behalf of a given Signer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id
$otp = "otp_example"; // string | 
$ip_address = new \Swagger\Client\Model\SignerSIPAddress(); // \Swagger\Client\Model\SignerSIPAddress | 
$consent_given_at = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$signature_image = "signature_image_example"; // string | 

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSign($signature_request_id, $signer_id, $otp, $ip_address, $consent_given_at, $signature_image);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSign: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |
 **otp** | **string**|  | [optional]
 **ip_address** | [**\Swagger\Client\Model\SignerSIPAddress**](../Model/.md)|  | [optional]
 **consent_given_at** | **\DateTime**|  | [optional]
 **signature_image** | **string****string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json, multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

