# Yousign\Client\SignerDocumentRequestApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId**](SignerDocumentRequestApi.md#deletesignaturerequestssignaturerequestiddocumentrequestsdocumentrequestid) | **DELETE** /signature_requests/{signatureRequestId}/document_requests/{documentRequestId} | Delete a Signer Document Request
[**deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId**](SignerDocumentRequestApi.md#deletesignaturerequestssignaturerequestiddocumentrequestsdocumentrequestidsignerssignerid) | **DELETE** /signature_requests/{signatureRequestId}/document_requests/{documentRequestId}/signers/{signerId} | Remove a Signer to a given Signer Document Request
[**deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments**](SignerDocumentRequestApi.md#deletesignaturerequestssignaturerequestidsignerssigneriddocuments) | **DELETE** /signature_requests/{signatureRequestId}/signers/{signerId}/documents | Delete the Documents uploaded by a Signer
[**getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments**](SignerDocumentRequestApi.md#getsignaturerequestssignaturerequestidsignerssigneriddocuments) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/documents | List the Signer Documents of a Signer
[**getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId**](SignerDocumentRequestApi.md#getsignaturerequestssignaturerequestidsignerssigneriddocumentssignerdocumentid) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/documents/{signerDocumentId}/download | Download a Signer Document
[**postSignatureRequestsSignatureRequestIdDocumentRequests**](SignerDocumentRequestApi.md#postsignaturerequestssignaturerequestiddocumentrequests) | **POST** /signature_requests/{signatureRequestId}/document_requests | Add Signer Document Request to a Signature Request
[**putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId**](SignerDocumentRequestApi.md#putsignaturerequestssignaturerequestiddocumentrequestsdocumentrequestidsignerssignerid) | **PUT** /signature_requests/{signatureRequestId}/document_requests/{documentRequestId}/signers/{signerId} | Adds a Signer to a given Signer Document Request

# **deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId**
> deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId($signature_request_id, $document_request_id)

Delete a Signer Document Request

Delete a Signer Document Request from signature request. This action is only permitted when the Signature Request is a draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_request_id = "document_request_id_example"; // string | Signer Document Request Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId($signature_request_id, $document_request_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_request_id** | [**string**](../Model/.md)| Signer Document Request Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId**
> deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId($signature_request_id, $document_request_id, $signer_id)

Remove a Signer to a given Signer Document Request

Remove a Signer to a given Signer Document Request. This action is only permitted when the Signature Request is a draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_request_id = "document_request_id_example"; // string | Signer Document Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId($signature_request_id, $document_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->deleteSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_request_id** | [**string**](../Model/.md)| Signer Document Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments**
> deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signature_request_id, $signer_id)

Delete the Documents uploaded by a Signer

Deletes all documents uploaded by a given Signer for a specific Signature Request. Deletion is only possible when Signer status is `signed`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->deleteSignatureRequestsSignatureRequestIdSignersSignerIdDocuments: ', $e->getMessage(), PHP_EOL;
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

# **getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments**
> \Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments200Response getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signature_request_id, $signer_id)

List the Signer Documents of a Signer

Returns a list of Documents uploaded by a given Signer. Only possible when Signer status is `signed`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments($signature_request_id, $signer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->getSignatureRequestsSignatureRequestIdSignersSignerIdDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

[**\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments200Response**](../Model/GetSignatureRequestsSignatureRequestIdSignersSignerIdDocuments200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId**
> string getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId($signature_request_id, $signer_id, $signer_document_id)

Download a Signer Document

Downloads a Document uploaded by a given Signer. Only possible when Signer status is `signed`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id
$signer_document_id = "signer_document_id_example"; // string | Signer Document Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId($signature_request_id, $signer_id, $signer_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->getSignatureRequestsSignatureRequestIdSignersSignerIdDocumentsSignerDocumentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |
 **signer_document_id** | [**string**](../Model/.md)| Signer Document Id |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdDocumentRequests**
> \Yousign\Client\Model\SignerDocumentRequest postSignatureRequestsSignatureRequestIdDocumentRequests($signature_request_id, $body)

Add Signer Document Request to a Signature Request

Adds a Signer Document Request to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Yousign\Client\Model\CreateSignerDocumentRequest(); // \Yousign\Client\Model\CreateSignerDocumentRequest | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdDocumentRequests($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->postSignatureRequestsSignatureRequestIdDocumentRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Yousign\Client\Model\CreateSignerDocumentRequest**](../Model/CreateSignerDocumentRequest.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\SignerDocumentRequest**](../Model/SignerDocumentRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId**
> \Yousign\Client\Model\SignerDocumentRequest putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId($signature_request_id, $document_request_id, $signer_id)

Adds a Signer to a given Signer Document Request

Adds a Signer to a given Signer Document Request. This action is only permitted when the Signature Request is a draft.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerDocumentRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_request_id = "document_request_id_example"; // string | Signer Document Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $result = $apiInstance->putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId($signature_request_id, $document_request_id, $signer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerDocumentRequestApi->putSignatureRequestsSignatureRequestIdDocumentRequestsDocumentRequestIdSignersSignerId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_request_id** | [**string**](../Model/.md)| Signer Document Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

[**\Yousign\Client\Model\SignerDocumentRequest**](../Model/SignerDocumentRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
