# Yousign\Client\FieldApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId**](FieldApi.md#deletesignaturerequestssignaturerequestiddocumentsdocumentidfieldsfieldid) | **DELETE** /signature_requests/{signatureRequestId}/documents/{documentId}/fields/{fieldId} | Delete a Field
[**getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields**](FieldApi.md#getsignaturerequestssignaturerequestiddocumentsdocumentidfields) | **GET** /signature_requests/{signatureRequestId}/documents/{documentId}/fields | Lists the Fields of a Signature Request Document.
[**postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields**](FieldApi.md#postsignaturerequestssignaturerequestiddocumentsdocumentidfields) | **POST** /signature_requests/{signatureRequestId}/documents/{documentId}/fields | Create a new Field on a Document
[**updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId**](FieldApi.md#updatesignaturerequestssignaturerequestiddocumentsdocumentidfieldsfieldid) | **PATCH** /signature_requests/{signatureRequestId}/documents/{documentId}/fields/{fieldId} | Update a Field

# **deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId**
> deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId($signature_request_id, $document_id, $field_id)

Delete a Field

Deletes a given Field from a Document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id
$field_id = "field_id_example"; // string | Field Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId($signature_request_id, $document_id, $field_id);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->deleteSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |
 **field_id** | [**string**](../Model/.md)| Field Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields**
> \Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200Response getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields($signature_request_id, $document_id, $types, $after, $limit)

Lists the Fields of a Signature Request Document.

Returns a list of Fields for a given Document. You can limit the number of items returned by using filters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document ID
$types = array(new \Yousign\Client\Model\null[]()); // null[] | Filter by Field type.
$after = "after_example"; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields($signature_request_id, $document_id, $types, $after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->getSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document ID |
 **types** | [**null[]**](../Model/.md)| Filter by Field type. | [optional]
 **after** | **string**| After cursor (pagination) | [optional]
 **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100]

### Return type

[**\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200Response**](../Model/GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields**
> \Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields($signature_request_id, $document_id, $body)

Create a new Field on a Document

Adds a Field to a given Document.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document ID
$body = new \Yousign\Client\Model\CreateField(); // \Yousign\Client\Model\CreateField | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields($signature_request_id, $document_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->postSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document ID |
 **body** | [**\Yousign\Client\Model\CreateField**](../Model/CreateField.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner**](../Model/GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId**
> \Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId($signature_request_id, $document_id, $field_id, $body)

Update a Field

Updates a given Field. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\FieldApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$document_id = "document_id_example"; // string | Document Id
$field_id = "field_id_example"; // string | Field Id
$body = new \Yousign\Client\Model\UpdateField(); // \Yousign\Client\Model\UpdateField | 

try {
    $result = $apiInstance->updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId($signature_request_id, $document_id, $field_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FieldApi->updateSignatureRequestsSignatureRequestIdDocumentsDocumentIdFieldsFieldId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **document_id** | [**string**](../Model/.md)| Document Id |
 **field_id** | [**string**](../Model/.md)| Field Id |
 **body** | [**\Yousign\Client\Model\UpdateField**](../Model/UpdateField.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner**](../Model/GetSignatureRequestsSignatureRequestIdDocumentsDocumentIdFields200ResponseDataInner.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
