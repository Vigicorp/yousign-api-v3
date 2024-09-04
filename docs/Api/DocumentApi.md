# Yousign\Client\DocumentApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId**](DocumentApi.md#deletesignaturerequestssignaturerequestiddocumentsdocumentid) | **DELETE** /signature_requests/{signatureRequestId}/documents/{documentId} | Delete a Document
[**getSignatureRequestsSignatureRequestIdDocuments**](DocumentApi.md#getsignaturerequestssignaturerequestiddocuments) | **GET** /signature_requests/{signatureRequestId}/documents | List Signature Request&#x27;s Documents
[**getSignatureRequestsSignatureRequestIdDocumentsDocumentId**](DocumentApi.md#getsignaturerequestssignaturerequestiddocumentsdocumentid) | **GET** /signature_requests/{signatureRequestId}/documents/{documentId} | Get a Document
[**getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload**](DocumentApi.md#getsignaturerequestssignaturerequestiddocumentsdocumentsiddownload) | **GET** /signature_requests/{signatureRequestId}/documents/{documentId}/download | Download a single Signature Request&#x27;s Document
[**getSignatureRequestsSignatureRequestIdDocumentsDownload**](DocumentApi.md#getsignaturerequestssignaturerequestiddocumentsdownload) | **GET** /signature_requests/{signatureRequestId}/documents/download | Download Signature Request&#x27;s Documents
[**patchSignatureRequestsSignatureRequestIdDocumentsDocumentId**](DocumentApi.md#patchsignaturerequestssignaturerequestiddocumentsdocumentid) | **PATCH** /signature_requests/{signatureRequestId}/documents/{documentId} | Update a Document
[**postDocuments**](DocumentApi.md#postdocuments) | **POST** /documents | [DEPRECATED] Upload a Document
[**postSignatureRequestsSignatureRequestIdDocuments**](DocumentApi.md#postsignaturerequestssignaturerequestiddocuments) | **POST** /signature_requests/{signatureRequestId}/documents | Add Document to a Signature Request
[**postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace**](DocumentApi.md#postsignaturerequestssignaturerequestiddocumentsdocumentidreplace) | **POST** /signature_requests/{signatureRequestId}/documents/{documentId}/replace | Replace a Document in a Signature Request

# **deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId**
> deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId($signature_request_id, $document_id)

Delete a Document

Deletes a given Document from a Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId($signature_request_id, $document_id);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->deleteSignatureRequestsSignatureRequestIdDocumentsDocumentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdDocuments**
> \Yousign\Client\Model\Document[] getSignatureRequestsSignatureRequestIdDocuments($signature_request_id, $nature)

List Signature Request's Documents

Returns a list of Documents for a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$nature = "nature_example"; // string | Filter by nature

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdDocuments($signature_request_id, $nature);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getSignatureRequestsSignatureRequestIdDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **nature** | **string**| Filter by nature | [optional]

### Return type

[**\Yousign\Client\Model\Document[]**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdDocumentsDocumentId**
> \Yousign\Client\Model\Document getSignatureRequestsSignatureRequestIdDocumentsDocumentId($signature_request_id, $document_id)

Get a Document

Retrieves a given Document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdDocumentsDocumentId($signature_request_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getSignatureRequestsSignatureRequestIdDocumentsDocumentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |

### Return type

[**\Yousign\Client\Model\Document**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload**
> string getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload($signature_request_id, $document_id)

Download a single Signature Request's Document

Downloads the PDF version of a given Document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload($signature_request_id, $document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getSignatureRequestsSignatureRequestIdDocumentsDocumentsIdDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdDocumentsDownload**
> string getSignatureRequestsSignatureRequestIdDocumentsDownload($signature_request_id, $version, $archive)

Download Signature Request's Documents

Downloads the PDF version of all Documents attached to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$version = "version_example"; // string | Specify Documents version to download, `completed` is only available when the Signature Request status is `done`.
$archive = true; // bool | Force zip archive download

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdDocumentsDownload($signature_request_id, $version, $archive);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->getSignatureRequestsSignatureRequestIdDocumentsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **version** | **string**| Specify Documents version to download, &#x60;completed&#x60; is only available when the Signature Request status is &#x60;done&#x60;. | [optional]
 **archive** | **bool**| Force zip archive download | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSignatureRequestsSignatureRequestIdDocumentsDocumentId**
> \Yousign\Client\Model\Document patchSignatureRequestsSignatureRequestIdDocumentsDocumentId($signature_request_id, $document_id, $body)

Update a Document

Updates a given Document. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id
$body = new \Yousign\Client\Model\UpdateDocument(); // \Yousign\Client\Model\UpdateDocument | 

try {
    $result = $apiInstance->patchSignatureRequestsSignatureRequestIdDocumentsDocumentId($signature_request_id, $document_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->patchSignatureRequestsSignatureRequestIdDocumentsDocumentId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |
 **body** | [**\Yousign\Client\Model\UpdateDocument**](../Model/UpdateDocument.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\Document**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postDocuments**
> \Yousign\Client\Model\Document postDocuments($file, $nature, $insert_after_id, $password, $initials, $parse_anchors)

[DEPRECATED] Upload a Document

Deprecated endpoint, do not use.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$nature = "nature_example"; // string | 
$insert_after_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$password = "password_example"; // string | 
$initials = new \Yousign\Client\Model\InitialsArea(); // \Yousign\Client\Model\InitialsArea | 
$parse_anchors = true; // bool | 

try {
    $result = $apiInstance->postDocuments($file, $nature, $insert_after_id, $password, $initials, $parse_anchors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->postDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **nature** | **string**|  | [optional]
 **insert_after_id** | [**string**](../Model/.md)|  | [optional]
 **password** | **string**|  | [optional]
 **initials** | [**\Yousign\Client\Model\InitialsArea**](../Model/.md)|  | [optional]
 **parse_anchors** | **bool**|  | [optional]

### Return type

[**\Yousign\Client\Model\Document**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdDocuments**
> \Yousign\Client\Model\Document postSignatureRequestsSignatureRequestIdDocuments($signature_request_id, $file, $nature, $insert_after_id, $password, $initials, $parse_anchors)

Add Document to a Signature Request

Adds a Document to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$file = "file_example"; // string | 
$nature = "nature_example"; // string | 
$insert_after_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$password = "password_example"; // string | 
$initials = new \Yousign\Client\Model\InitialsArea(); // \Yousign\Client\Model\InitialsArea | 
$parse_anchors = true; // bool | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdDocuments($signature_request_id, $file, $nature, $insert_after_id, $password, $initials, $parse_anchors);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->postSignatureRequestsSignatureRequestIdDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **file** | **string****string**|  | [optional]
 **nature** | **string**|  | [optional]
 **insert_after_id** | [**string**](../Model/.md)|  | [optional]
 **password** | **string**|  | [optional]
 **initials** | [**\Yousign\Client\Model\InitialsArea**](../Model/.md)|  | [optional]
 **parse_anchors** | **bool**|  | [optional]

### Return type

[**\Yousign\Client\Model\Document**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace**
> \Yousign\Client\Model\Document postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace($signature_request_id, $document_id, $file)

Replace a Document in a Signature Request

Replace the file of a given Document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\DocumentApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id
$file = "file_example"; // string | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace($signature_request_id, $document_id, $file);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DocumentApi->postSignatureRequestsSignatureRequestIdDocumentsDocumentIdReplace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |
 **file** | **string****string**|  | [optional]

### Return type

[**\Yousign\Client\Model\Document**](../Model/Document.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
