# Yousign\Client\ElectronicSealApi

All URIs are relative to https://api-sandbox.yousign.app/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteElectronicSealImage()**](ElectronicSealApi.md#deleteElectronicSealImage) | **DELETE** /electronic_seal_images/{electronicSealImageId} | Delete an Electronic Seal Image |
| [**downloadElectronicSealAuditTrail()**](ElectronicSealApi.md#downloadElectronicSealAuditTrail) | **GET** /electronic_seals/{electronicSealId}/audit_trails/download | Download an Electronic Seal Audit Trail |
| [**downloadElectronicSealDocument()**](ElectronicSealApi.md#downloadElectronicSealDocument) | **GET** /electronic_seal_documents/{electronicSealDocumentId}/download | Download an Electronic Seal Document |
| [**downloadElectronicSealImage()**](ElectronicSealApi.md#downloadElectronicSealImage) | **GET** /electronic_seal_images/{electronicSealImageId}/download | Download an Electronic Seal Image |
| [**getElectronicSeal()**](ElectronicSealApi.md#getElectronicSeal) | **GET** /electronic_seals/{electronicSealId} | Get an Electronic Seal |
| [**getElectronicSealAuditTrail()**](ElectronicSealApi.md#getElectronicSealAuditTrail) | **GET** /electronic_seals/{electronicSealId}/audit_trails | Get an Electronic Seal Audit Trail |
| [**listElectronicSealImages()**](ElectronicSealApi.md#listElectronicSealImages) | **GET** /electronic_seal_images | List Electronic Seal Images |
| [**postElectronicSeals()**](ElectronicSealApi.md#postElectronicSeals) | **POST** /electronic_seals | Create an Electronic Seal |
| [**uploadElectronicSealDocument()**](ElectronicSealApi.md#uploadElectronicSealDocument) | **POST** /electronic_seal_documents | Upload an Electronic Seal Document |
| [**uploadElectronicSealImage()**](ElectronicSealApi.md#uploadElectronicSealImage) | **POST** /electronic_seal_images | Upload an Electronic Seal Image |


## `deleteElectronicSealImage()`

```php
deleteElectronicSealImage($electronic_seal_image_id)
```

Delete an Electronic Seal Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_image_id = 'electronic_seal_image_id_example'; // string

try {
    $apiInstance->deleteElectronicSealImage($electronic_seal_image_id);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->deleteElectronicSealImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **electronic_seal_image_id** | **string**|  | |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadElectronicSealAuditTrail()`

```php
downloadElectronicSealAuditTrail($electronic_seal_id): \SplFileObject
```

Download an Electronic Seal Audit Trail

Electronic Seal Audit Trail is only available when the Electronic Seal is \"done\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_id = 'electronic_seal_id_example'; // string

try {
    $result = $apiInstance->downloadElectronicSealAuditTrail($electronic_seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->downloadElectronicSealAuditTrail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **electronic_seal_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadElectronicSealDocument()`

```php
downloadElectronicSealDocument($electronic_seal_document_id): \SplFileObject
```

Download an Electronic Seal Document

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_document_id = 'electronic_seal_document_id_example'; // string

try {
    $result = $apiInstance->downloadElectronicSealDocument($electronic_seal_document_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->downloadElectronicSealDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **electronic_seal_document_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/pdf`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `downloadElectronicSealImage()`

```php
downloadElectronicSealImage($electronic_seal_image_id): \SplFileObject
```

Download an Electronic Seal Image

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_image_id = 'electronic_seal_image_id_example'; // string

try {
    $result = $apiInstance->downloadElectronicSealImage($electronic_seal_image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->downloadElectronicSealImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **electronic_seal_image_id** | **string**|  | |

### Return type

**\SplFileObject**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `image/png`, `image/jpg`, `image/gif`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElectronicSeal()`

```php
getElectronicSeal($electronic_seal_id): \Yousign\Client\Model\ElectronicSeal
```

Get an Electronic Seal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_id = 'electronic_seal_id_example'; // string

try {
    $result = $apiInstance->getElectronicSeal($electronic_seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->getElectronicSeal: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **electronic_seal_id** | **string**|  | |

### Return type

[**\Yousign\Client\Model\ElectronicSeal**](../Model/ElectronicSeal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getElectronicSealAuditTrail()`

```php
getElectronicSealAuditTrail($electronic_seal_id): \Yousign\Client\Model\ElectronicSealAuditTrail
```

Get an Electronic Seal Audit Trail

Electronic Seal Audit Trail is only available when the Electronic Seal is \"done\".

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$electronic_seal_id = 'electronic_seal_id_example'; // string

try {
    $result = $apiInstance->getElectronicSealAuditTrail($electronic_seal_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->getElectronicSealAuditTrail: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **electronic_seal_id** | **string**|  | |

### Return type

[**\Yousign\Client\Model\ElectronicSealAuditTrail**](../Model/ElectronicSealAuditTrail.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `listElectronicSealImages()`

```php
listElectronicSealImages($after, $limit): \Yousign\Client\Model\ListElectronicSealImages200Response
```

List Electronic Seal Images

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = 'after_example'; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->listElectronicSealImages($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->listElectronicSealImages: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **after** | **string**| After cursor (pagination) | [optional] |
| **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100] |

### Return type

[**\Yousign\Client\Model\ListElectronicSealImages200Response**](../Model/ListElectronicSealImages200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postElectronicSeals()`

```php
postElectronicSeals($create_electronic_seal_payload): \Yousign\Client\Model\ElectronicSeal
```

Create an Electronic Seal

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_electronic_seal_payload = new \Yousign\Client\Model\CreateElectronicSealPayload(); // \Yousign\Client\Model\CreateElectronicSealPayload

try {
    $result = $apiInstance->postElectronicSeals($create_electronic_seal_payload);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->postElectronicSeals: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_electronic_seal_payload** | [**\Yousign\Client\Model\CreateElectronicSealPayload**](../Model/CreateElectronicSealPayload.md)|  | [optional] |

### Return type

[**\Yousign\Client\Model\ElectronicSeal**](../Model/ElectronicSeal.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadElectronicSealDocument()`

```php
uploadElectronicSealDocument($file, $password): \Yousign\Client\Model\ElectronicSealDocument
```

Upload an Electronic Seal Document

Upload an Electronic Seal Document to use for creating an Electronic Seal (can be used for only one Electronic Seal).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | PDF file
$password = 'password_example'; // string

try {
    $result = $apiInstance->uploadElectronicSealDocument($file, $password);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->uploadElectronicSealDocument: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| PDF file | |
| **password** | **string**|  | [optional] |

### Return type

[**\Yousign\Client\Model\ElectronicSealDocument**](../Model/ElectronicSealDocument.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `uploadElectronicSealImage()`

```php
uploadElectronicSealImage($file, $name): \Yousign\Client\Model\ElectronicSealImage
```

Upload an Electronic Seal Image

Upload an Electronic Seal Image to use for creating an Electronic Seal (can be used for several Electronic Seals).

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ElectronicSealApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "/path/to/file.txt"; // \SplFileObject | Seal image
$name = 'name_example'; // string

try {
    $result = $apiInstance->uploadElectronicSealImage($file, $name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ElectronicSealApi->uploadElectronicSealImage: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **file** | **\SplFileObject****\SplFileObject**| Seal image | |
| **name** | **string**|  | |

### Return type

[**\Yousign\Client\Model\ElectronicSealImage**](../Model/ElectronicSealImage.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
