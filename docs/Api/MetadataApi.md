# Swagger\Client\MetadataApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestIdMetadata**](MetadataApi.md#deletesignaturerequestssignaturerequestidmetadata) | **DELETE** /signature_requests/{signatureRequestId}/metadata | Delete the Signature Request Metadata
[**getSignatureRequestsSignatureRequestIdMetadata**](MetadataApi.md#getsignaturerequestssignaturerequestidmetadata) | **GET** /signature_requests/{signatureRequestId}/metadata | Get the Signature Request Metadata
[**postSignatureRequestsSignatureRequestIdMetadata**](MetadataApi.md#postsignaturerequestssignaturerequestidmetadata) | **POST** /signature_requests/{signatureRequestId}/metadata | Attach Metadata to a Signature Request
[**putSignatureRequestsSignatureRequestIdMetadata**](MetadataApi.md#putsignaturerequestssignaturerequestidmetadata) | **PUT** /signature_requests/{signatureRequestId}/metadata | Update Metadata of a Signature Request

# **deleteSignatureRequestsSignatureRequestIdMetadata**
> deleteSignatureRequestsSignatureRequestIdMetadata($signature_request_id)

Delete the Signature Request Metadata

Deletes the Metadata of a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdMetadata($signature_request_id);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->deleteSignatureRequestsSignatureRequestIdMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdMetadata**
> \Swagger\Client\Model\Metadata getSignatureRequestsSignatureRequestIdMetadata($signature_request_id)

Get the Signature Request Metadata

Retrieves the Metadata of a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdMetadata($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->getSignatureRequestsSignatureRequestIdMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |

### Return type

[**\Swagger\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdMetadata**
> \Swagger\Client\Model\Metadata postSignatureRequestsSignatureRequestIdMetadata($signature_request_id, $body)

Attach Metadata to a Signature Request

Add Metadata to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Swagger\Client\Model\CreateSignatureRequestMetadata(); // \Swagger\Client\Model\CreateSignatureRequestMetadata | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdMetadata($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->postSignatureRequestsSignatureRequestIdMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Swagger\Client\Model\CreateSignatureRequestMetadata**](../Model/CreateSignatureRequestMetadata.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putSignatureRequestsSignatureRequestIdMetadata**
> \Swagger\Client\Model\Metadata putSignatureRequestsSignatureRequestIdMetadata($signature_request_id, $body)

Update Metadata of a Signature Request

Updates the Metadata of a given Signature Request. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MetadataApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Swagger\Client\Model\UpdateSignatureRequestMetadata(); // \Swagger\Client\Model\UpdateSignatureRequestMetadata | 

try {
    $result = $apiInstance->putSignatureRequestsSignatureRequestIdMetadata($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MetadataApi->putSignatureRequestsSignatureRequestIdMetadata: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Swagger\Client\Model\UpdateSignatureRequestMetadata**](../Model/UpdateSignatureRequestMetadata.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Metadata**](../Model/Metadata.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

