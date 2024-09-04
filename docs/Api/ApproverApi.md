# Yousign\Client\ApproverApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestIdApproversApproverId**](ApproverApi.md#deletesignaturerequestssignaturerequestidapproversapproverid) | **DELETE** /signature_requests/{signatureRequestId}/approvers/{approverId} | Delete an Approver
[**getSignatureRequestsSignatureRequestIdApproversApproverId**](ApproverApi.md#getsignaturerequestssignaturerequestidapproversapproverid) | **GET** /signature_requests/{signatureRequestId}/approvers/{approverId} | Get an Approver
[**patchSignatureRequestsSignatureRequestIdApproversApproverId**](ApproverApi.md#patchsignaturerequestssignaturerequestidapproversapproverid) | **PATCH** /signature_requests/{signatureRequestId}/approvers/{approverId} | Update an Approver
[**postSignatureRequestsSignatureRequestIdApprovers**](ApproverApi.md#postsignaturerequestssignaturerequestidapprovers) | **POST** /signature_requests/{signatureRequestId}/approvers | Create a new Approver
[**postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder**](ApproverApi.md#postsignaturerequestssignaturerequestidapproversapproveridsendreminder) | **POST** /signature_requests/{signatureRequestId}/approvers/{approverId}/send_reminder | Send manual reminder to an Approver

# **deleteSignatureRequestsSignatureRequestIdApproversApproverId**
> deleteSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id)

Delete an Approver

Deletes a given Approver from a Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ApproverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$approver_id = "approver_id_example"; // string | Approver Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id);
} catch (Exception $e) {
    echo 'Exception when calling ApproverApi->deleteSignatureRequestsSignatureRequestIdApproversApproverId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **approver_id** | [**string**](../Model/.md)| Approver Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestIdApproversApproverId**
> \Yousign\Client\Model\Approver getSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id)

Get an Approver

Retrieves a given Approver.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ApproverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$approver_id = "approver_id_example"; // string | Approver Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApproverApi->getSignatureRequestsSignatureRequestIdApproversApproverId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **approver_id** | [**string**](../Model/.md)| Approver Id |

### Return type

[**\Yousign\Client\Model\Approver**](../Model/Approver.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSignatureRequestsSignatureRequestIdApproversApproverId**
> \Yousign\Client\Model\Approver patchSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id, $body)

Update an Approver

Updates a given Approver. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ApproverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$approver_id = "approver_id_example"; // string | Approver Id
$body = new \Yousign\Client\Model\PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequest(); // \Yousign\Client\Model\PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequest | 

try {
    $result = $apiInstance->patchSignatureRequestsSignatureRequestIdApproversApproverId($signature_request_id, $approver_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApproverApi->patchSignatureRequestsSignatureRequestIdApproversApproverId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **approver_id** | [**string**](../Model/.md)| Approver Id |
 **body** | [**\Yousign\Client\Model\PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequest**](../Model/PatchSignatureRequestsSignatureRequestIdApproversApproverIdRequest.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\Approver**](../Model/Approver.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdApprovers**
> \Yousign\Client\Model\Approver postSignatureRequestsSignatureRequestIdApprovers($signature_request_id, $body)

Create a new Approver

Adds an Approver to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ApproverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdApproversRequest(); // \Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdApproversRequest | An Approver object to be added to the Signature Request.

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdApprovers($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApproverApi->postSignatureRequestsSignatureRequestIdApprovers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdApproversRequest**](../Model/PostSignatureRequestsSignatureRequestIdApproversRequest.md)| An Approver object to be added to the Signature Request. | [optional]

### Return type

[**\Yousign\Client\Model\Approver**](../Model/Approver.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder**
> postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder($signature_request_id, $approver_id)

Send manual reminder to an Approver

Sends a reminder to a given Approver to review their Signature Request. Only possible when the Signature Request status is `approval` and the Approver status is `notified`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ApproverApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$approver_id = "approver_id_example"; // string | Approver Id

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder($signature_request_id, $approver_id);
} catch (Exception $e) {
    echo 'Exception when calling ApproverApi->postSignatureRequestsSignatureRequestIdApproversApproverIdSendReminder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **approver_id** | [**string**](../Model/.md)| Approver Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
