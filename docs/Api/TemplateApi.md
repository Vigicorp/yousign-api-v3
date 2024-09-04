# Yousign\Client\TemplateApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getTemplates**](TemplateApi.md#gettemplates) | **GET** /templates | List Templates

# **getTemplates**
> \Yousign\Client\Model\GetTemplates200Response getTemplates($after, $limit)

List Templates

Returns the list of all Templates within your Organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\TemplateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = "after_example"; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->getTemplates($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling TemplateApi->getTemplates: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| After cursor (pagination) | [optional]
 **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100]

### Return type

[**\Yousign\Client\Model\GetTemplates200Response**](../Model/GetTemplates200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
