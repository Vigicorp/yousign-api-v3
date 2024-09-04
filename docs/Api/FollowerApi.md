# Swagger\Client\FollowerApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getSignatureRequestsSignatureRequestIdFollowers**](FollowerApi.md#getsignaturerequestssignaturerequestidfollowers) | **GET** /signature_requests/{signatureRequestId}/followers | List the Signature Request&#x27;s Followers
[**postSignatureRequestsSignatureRequestIdFollowers**](FollowerApi.md#postsignaturerequestssignaturerequestidfollowers) | **POST** /signature_requests/{signatureRequestId}/followers | Create new Followers

# **getSignatureRequestsSignatureRequestIdFollowers**
> \Swagger\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response getSignatureRequestsSignatureRequestIdFollowers($signature_request_id)

List the Signature Request's Followers

Returns a list of Followers for a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\FollowerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdFollowers($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowerApi->getSignatureRequestsSignatureRequestIdFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |

### Return type

[**\Swagger\Client\Model\GetSignatureRequestsSignatureRequestIdFollowers200Response**](../Model/GetSignatureRequestsSignatureRequestIdFollowers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postSignatureRequestsSignatureRequestIdFollowers**
> \Swagger\Client\Model\Follower[] postSignatureRequestsSignatureRequestIdFollowers($signature_request_id, $body)

Create new Followers

Adds a Follower to a given Signature Request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\FollowerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = "signature_request_id_example"; // string | Signature Request Id
$body = array(new \Swagger\Client\Model\CreateFollowersInner()); // \Swagger\Client\Model\CreateFollowersInner[] | 

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdFollowers($signature_request_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FollowerApi->postSignatureRequestsSignatureRequestIdFollowers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **signature_request_id** | [**string**](../Model/.md)| Signature Request Id |
 **body** | [**\Swagger\Client\Model\CreateFollowersInner[]**](../Model/CreateFollowersInner.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Follower[]**](../Model/Follower.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

