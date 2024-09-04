# Swagger\Client\AuditTrailApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSignatureRequestsSignatureRequestIdAuditTrailsDownload**](AuditTrailApi.md#getsignaturerequestssignaturerequestidaudittrailsdownload) | **GET** /signature_requests/{signatureRequestId}/audit_trails/download | Download Signature Request Audit Trails
[**getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails**](AuditTrailApi.md#getsignaturerequestssignaturerequestidsignerssigneridaudittrails) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/audit_trails | Get Signer Audit Trail
[**getSignersSignerIdAuditTrailsDownload**](AuditTrailApi.md#getsignerssigneridaudittrailsdownload) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId}/audit_trails/download | Download Audit Trail PDF

# **getSignatureRequestsSignatureRequestIdAuditTrailsDownload**
> string getSignatureRequestsSignatureRequestIdAuditTrailsDownload($signature_request_id, $merge)

Download Signature Request Audit Trails

Download the PDF version of all the Audit Trails attached to a given Signature Request. Each Audit Trail is bound to a different Signer. Only possible when the Signature Request status is `done`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AuditTrailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$merge = false; // bool | Download all Audit Trails merged as a single PDF file

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdAuditTrailsDownload($signature_request_id, $merge);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailApi->getSignatureRequestsSignatureRequestIdAuditTrailsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **merge** | **bool**| Download all Audit Trails merged as a single PDF file | [optional] [default to false]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/zip, application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails**
> \Swagger\Client\Model\SignerAuditTrail getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails($signature_request_id, $signer_id)

Get Signer Audit Trail

Retrieves the JSON version of the Audit Trail attached to a given Signer. Only possible when Signer status is `signed`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AuditTrailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails($signature_request_id, $signer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailApi->getSignatureRequestsSignatureRequestIdSignersSignerIdAuditTrails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

[**\Swagger\Client\Model\SignerAuditTrail**](../Model/SignerAuditTrail.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignersSignerIdAuditTrailsDownload**
> string getSignersSignerIdAuditTrailsDownload($signature_request_id, $signer_id)

Download Audit Trail PDF

Download the PDF version of the Audit Trail attached to a given Signer. Only possible when Signer status is `signed`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AuditTrailApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$signer_id = "signer_id_example"; // string | Signer Id

try {
    $result = $apiInstance->getSignersSignerIdAuditTrailsDownload($signature_request_id, $signer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuditTrailApi->getSignersSignerIdAuditTrailsDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **signer_id** | [**string**](../Model/.md)| Signer Id |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

