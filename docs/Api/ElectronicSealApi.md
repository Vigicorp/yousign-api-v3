# Yousign\Client\ElectronicSealApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteElectronicSealImage**](ElectronicSealApi.md#deleteelectronicsealimage) | **DELETE** /electronic_seal_images/{electronicSealImageId} | Delete an Electronic Seal Image
[**downloadElectronicSealAuditTrail**](ElectronicSealApi.md#downloadelectronicsealaudittrail) | **GET** /electronic_seals/{electronicSealId}/audit_trails/download | Download an Electronic Seal Audit Trail
[**downloadElectronicSealDocument**](ElectronicSealApi.md#downloadelectronicsealdocument) | **GET** /electronic_seal_documents/{electronicSealDocumentId}/download | Download an Electronic Seal Document
[**downloadElectronicSealImage**](ElectronicSealApi.md#downloadelectronicsealimage) | **GET** /electronic_seal_images/{electronicSealImageId}/download | Download an Electronic Seal Image
[**getElectronicSeal**](ElectronicSealApi.md#getelectronicseal) | **GET** /electronic_seals/{electronicSealId} | Get an Electronic Seal
[**getElectronicSealAuditTrail**](ElectronicSealApi.md#getelectronicsealaudittrail) | **GET** /electronic_seals/{electronicSealId}/audit_trails | Get an Electronic Seal Audit Trail
[**listElectronicSealImages**](ElectronicSealApi.md#listelectronicsealimages) | **GET** /electronic_seal_images | List Electronic Seal Images
[**postElectronicSeals**](ElectronicSealApi.md#postelectronicseals) | **POST** /electronic_seals | Create an Electronic Seal
[**uploadElectronicSealDocument**](ElectronicSealApi.md#uploadelectronicsealdocument) | **POST** /electronic_seal_documents | Upload an Electronic Seal Document
[**uploadElectronicSealImage**](ElectronicSealApi.md#uploadelectronicsealimage) | **POST** /electronic_seal_images | Upload an Electronic Seal Image

# **deleteElectronicSealImage**
> deleteElectronicSealImage($electronic_seal_image_id)

Delete an Electronic Seal Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_image_id = "electronic_seal_image_id_example"; // string | 

try {
    $apiInstance->deleteElectronicSealImage($electronic_seal_image_id);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->deleteElectronicSealImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electronic_seal_image_id** | [**string**](../Model/.md)|  |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadElectronicSealAuditTrail**
> string downloadElectronicSealAuditTrail($electronic_seal_id)

Download an Electronic Seal Audit Trail

Electronic Seal Audit Trail is only available when the Electronic Seal is \"done\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_id = "electronic_seal_id_example"; // string | 

try {
    $result = $apiInstance->downloadElectronicSealAuditTrail($electronic_seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->downloadElectronicSealAuditTrail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electronic_seal_id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadElectronicSealDocument**
> string downloadElectronicSealDocument($electronic_seal_document_id)

Download an Electronic Seal Document

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_document_id = "electronic_seal_document_id_example"; // string | 

try {
    $result = $apiInstance->downloadElectronicSealDocument($electronic_seal_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->downloadElectronicSealDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electronic_seal_document_id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/pdf, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **downloadElectronicSealImage**
> string downloadElectronicSealImage($electronic_seal_image_id)

Download an Electronic Seal Image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_image_id = "electronic_seal_image_id_example"; // string | 

try {
    $result = $apiInstance->downloadElectronicSealImage($electronic_seal_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->downloadElectronicSealImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electronic_seal_image_id** | [**string**](../Model/.md)|  |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: image/png, image/jpg, image/gif, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getElectronicSeal**
> \Yousign\Client\Model\ElectronicSeal getElectronicSeal($electronic_seal_id)

Get an Electronic Seal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_id = "electronic_seal_id_example"; // string | 

try {
    $result = $apiInstance->getElectronicSeal($electronic_seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->getElectronicSeal: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electronic_seal_id** | [**string**](../Model/.md)|  |

### Return type

[**\Yousign\Client\Model\ElectronicSeal**](../Model/ElectronicSeal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getElectronicSealAuditTrail**
> \Yousign\Client\Model\ElectronicSealAuditTrail getElectronicSealAuditTrail($electronic_seal_id)

Get an Electronic Seal Audit Trail

Electronic Seal Audit Trail is only available when the Electronic Seal is \"done\".

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_id = "electronic_seal_id_example"; // string | 

try {
    $result = $apiInstance->getElectronicSealAuditTrail($electronic_seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->getElectronicSealAuditTrail: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **electronic_seal_id** | [**string**](../Model/.md)|  |

### Return type

[**\Yousign\Client\Model\ElectronicSealAuditTrail**](../Model/ElectronicSealAuditTrail.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listElectronicSealImages**
> \Yousign\Client\Model\ListElectronicSealImages200Response listElectronicSealImages($after, $limit)

List Electronic Seal Images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = "after_example"; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->listElectronicSealImages($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->listElectronicSealImages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| After cursor (pagination) | [optional]
 **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100]

### Return type

[**\Yousign\Client\Model\ListElectronicSealImages200Response**](../Model/ListElectronicSealImages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postElectronicSeals**
> \Yousign\Client\Model\ElectronicSeal postElectronicSeals($body)

Create an Electronic Seal

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Yousign\Client\Model\CreateElectronicSealPayload(); // \Yousign\Client\Model\CreateElectronicSealPayload | 

try {
    $result = $apiInstance->postElectronicSeals($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->postElectronicSeals: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Yousign\Client\Model\CreateElectronicSealPayload**](../Model/CreateElectronicSealPayload.md)|  | [optional]

### Return type

[**\Yousign\Client\Model\ElectronicSeal**](../Model/ElectronicSeal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadElectronicSealDocument**
> \Yousign\Client\Model\ElectronicSealDocument uploadElectronicSealDocument($file, $password)

Upload an Electronic Seal Document

Upload an Electronic Seal Document to use for creating an Electronic Seal (can be used for only one Electronic Seal).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$password = "password_example"; // string | 

try {
    $result = $apiInstance->uploadElectronicSealDocument($file, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->uploadElectronicSealDocument: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

[**\Yousign\Client\Model\ElectronicSealDocument**](../Model/ElectronicSealDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **uploadElectronicSealImage**
> \Yousign\Client\Model\ElectronicSealImage uploadElectronicSealImage($file, $name)

Upload an Electronic Seal Image

Upload an Electronic Seal Image to use for creating an Electronic Seal (can be used for several Electronic Seals).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$name = "name_example"; // string | 

try {
    $result = $apiInstance->uploadElectronicSealImage($file, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->uploadElectronicSealImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **name** | **string**|  | [optional]

### Return type

[**\Yousign\Client\Model\ElectronicSealImage**](../Model/ElectronicSealImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
