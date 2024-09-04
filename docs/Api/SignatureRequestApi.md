# Yousign\Client\SignatureRequestApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteSignatureRequestsSignatureRequestId**](SignatureRequestApi.md#deletesignaturerequestssignaturerequestid) | **DELETE** /signature_requests/{signatureRequestId} | Delete a Signature Request
[**getSignatureRequests**](SignatureRequestApi.md#getsignaturerequests) | **GET** /signature_requests | List Signature Requests
[**getSignatureRequestsSignatureRequestId**](SignatureRequestApi.md#getsignaturerequestssignaturerequestid) | **GET** /signature_requests/{signatureRequestId} | Fetch a Signature Request
[**patchSignatureRequestsSignatureRequestId**](SignatureRequestApi.md#patchsignaturerequestssignaturerequestid) | **PATCH** /signature_requests/{signatureRequestId} | Update a Signature Request
[**postSignatureRequests**](SignatureRequestApi.md#postsignaturerequests) | **POST** /signature_requests | Initiate a new Signature Request
[**postSignatureRequestsSignatureRequestIdActivate**](SignatureRequestApi.md#postsignaturerequestssignaturerequestidactivate) | **POST** /signature_requests/{signatureRequestId}/activate | Activate a Signature Request
[**postSignatureRequestsSignatureRequestIdCancel**](SignatureRequestApi.md#postsignaturerequestssignaturerequestidcancel) | **POST** /signature_requests/{signatureRequestId}/cancel | Cancel a Signature Request
[**postSignatureRequestsSignatureRequestIdReactivate**](SignatureRequestApi.md#postsignaturerequestssignaturerequestidreactivate) | **POST** /signature_requests/{signatureRequestId}/reactivate | Reactivate an expired Signature Request

# **deleteSignatureRequestsSignatureRequestId**
> deleteSignatureRequestsSignatureRequestId($signature_request_id, $permanent_delete)

Delete a Signature Request

Deletes a given Signature Request, not possible if the Signature Request is in `approval` and `ongoing` status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$permanent_delete = false; // bool | If true it will permanently delete the Signature Request. It will no longer be retrievable.

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestId($signature_request_id, $permanent_delete);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->deleteSignatureRequestsSignatureRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **permanent_delete** | **bool**| If true it will permanently delete the Signature Request. It will no longer be retrievable. | [optional] [default to false]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequests**
> \Yousign\Client\Model\GetSignatureRequests200Response getSignatureRequests($status, $after, $limit, $external_id, $source, $q)

List Signature Requests

Returns the list of all Signatures Requests in your organization. You can limit the number of items returned by using filters and pagination.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$status = "status_example"; // string | Filter by status
$after = "after_example"; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.
$external_id = "external_id_example"; // string | Filter by external_id
$source = array("source_example"); // string[] | Filter by source
$q = "q_example"; // string | Search on name

try {
    $result = $apiInstance->getSignatureRequests($status, $after, $limit, $external_id, $source, $q);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->getSignatureRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **status** | **string**| Filter by status | [optional]
 **after** | **string**| After cursor (pagination) | [optional]
 **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100]
 **external_id** | **string**| Filter by external_id | [optional]
 **source** | [**string[]**](../Model/string.md)| Filter by source | [optional]
 **q** | **string**| Search on name | [optional]

### Return type

[**\Yousign\Client\Model\GetSignatureRequests200Response**](../Model/GetSignatureRequests200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getSignatureRequestsSignatureRequestId**
> \Yousign\Client\Model\SignatureRequest getSignatureRequestsSignatureRequestId($signature_request_id)

Fetch a Signature Request

Retrieves a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestId($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->getSignatureRequestsSignatureRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |

### Return type

[**\Yousign\Client\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchSignatureRequestsSignatureRequestId**
> \Yousign\Client\Model\SignatureRequest patchSignatureRequestsSignatureRequestId($signature_request_id, $body)

Update a Signature Request

Updates a given Signature Request. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Yousign\Client\Model\UpdateSignatureRequest(); // \Yousign\Client\Model\UpdateSignatureRequest | 

try {
    $result = $apiInstance->patchSignatureRequestsSignatureRequestId($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->patchSignatureRequestsSignatureRequestId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Yousign\Client\Model\UpdateSignatureRequest**](../Model/UpdateSignatureRequest.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequests**
> \Yousign\Client\Model\SignatureRequest postSignatureRequests($body)

Initiate a new Signature Request

Creates a new Signature Request resource.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yousign\Client\Model\CreateSignatureRequest(); // \Yousign\Client\Model\CreateSignatureRequest | 

try {
    $result = $apiInstance->postSignatureRequests($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->postSignatureRequests: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yousign\Client\Model\CreateSignatureRequest**](../Model/CreateSignatureRequest.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdActivate**
> \Yousign\Client\Model\SignatureRequestActivated postSignatureRequestsSignatureRequestIdActivate($signature_request_id)

Activate a Signature Request

Activates a Signature request, so it is not in `draft` status anymore. If the `delivery_mode` is not `null`, activating the Signature Request will trigger the notifications to Approvers/Followers/Signers.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdActivate($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->postSignatureRequestsSignatureRequestIdActivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |

### Return type

[**\Yousign\Client\Model\SignatureRequestActivated**](../Model/SignatureRequestActivated.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdCancel**
> \Yousign\Client\Model\SignatureRequest postSignatureRequestsSignatureRequestIdCancel($signature_request_id, $body)

Cancel a Signature Request

Cancels a Signature Request when it is in `approval` or `ongoing` status. A canceled Signature Request cannot be reactivated.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdCancelRequest(); // \Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdCancelRequest | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdCancel($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->postSignatureRequestsSignatureRequestIdCancel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdCancelRequest**](../Model/PostSignatureRequestsSignatureRequestIdCancelRequest.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdReactivate**
> \Yousign\Client\Model\SignatureRequest postSignatureRequestsSignatureRequestIdReactivate($signature_request_id, $body)

Reactivate an expired Signature Request

Reactivates a Signature Request when it is in `expired` status.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignatureRequestApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = new \Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdReactivateRequest(); // \Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdReactivateRequest | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdReactivate($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignatureRequestApi->postSignatureRequestsSignatureRequestIdReactivate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Yousign\Client\Model\PostSignatureRequestsSignatureRequestIdReactivateRequest**](../Model/PostSignatureRequestsSignatureRequestIdReactivateRequest.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\SignatureRequest**](../Model/SignatureRequest.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
