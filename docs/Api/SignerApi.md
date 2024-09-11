# Yousign\Client\SignerApi

All URIs are relative to https://api-sandbox.yousign.app/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteSignatureRequestsSignatureRequestIdSignersSignerId()**](SignerApi.md#deleteSignatureRequestsSignatureRequestIdSignersSignerId) | **DELETE** /signature_requests/{signatureRequestId}/signers/{signerId} | Delete a Signer |
| [**getSignatureRequestsSignatureRequestIdSigners()**](SignerApi.md#getSignatureRequestsSignatureRequestIdSigners) | **GET** /signature_requests/{signatureRequestId}/signers | List Signature Request&#39;s Signers |
| [**getSignersSignersId()**](SignerApi.md#getSignersSignersId) | **GET** /signature_requests/{signatureRequestId}/signers/{signerId} | Get a Signer |
| [**patchSignatureRequestsSignatureRequestIdSignersSignerId()**](SignerApi.md#patchSignatureRequestsSignatureRequestIdSignersSignerId) | **PATCH** /signature_requests/{signatureRequestId}/signers/{signerId} | Update a Signer |
| [**postSignatureRequestsSignatureRequestIdSigners()**](SignerApi.md#postSignatureRequestsSignatureRequestIdSigners) | **POST** /signature_requests/{signatureRequestId}/signers | Create a new Signer |
| [**postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp()**](SignerApi.md#postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/send_otp | Send a One-Time Password (OTP) to a Signer |
| [**postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder()**](SignerApi.md#postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/send_reminder | Send manual reminder to a Signer |
| [**postSignatureRequestsSignatureRequestIdSignersSignerIdSign()**](SignerApi.md#postSignatureRequestsSignatureRequestIdSignersSignerIdSign) | **POST** /signature_requests/{signatureRequestId}/signers/{signerId}/sign | Sign a Signature Request |


## `deleteSignatureRequestsSignatureRequestIdSignersSignerId()`

```php
deleteSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id)
```

Delete a Signer

Deletes a given Signer from a Signature Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$signer_id = 'signer_id_example'; // string | Signer Id

try {
    $apiInstance->deleteSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->deleteSignatureRequestsSignatureRequestIdSignersSignerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **signer_id** | **string**| Signer Id | |

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

## `getSignatureRequestsSignatureRequestIdSigners()`

```php
getSignatureRequestsSignatureRequestIdSigners($signature_request_id): \Yousign\Client\Model\Signer[]
```

List Signature Request's Signers

Returns a list of Signers for a given Signature Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id

try {
    $result = $apiInstance->getSignatureRequestsSignatureRequestIdSigners($signature_request_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->getSignatureRequestsSignatureRequestIdSigners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |

### Return type

[**\Yousign\Client\Model\Signer[]**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getSignersSignersId()`

```php
getSignersSignersId($signature_request_id, $signer_id): \Yousign\Client\Model\Signer
```

Get a Signer

Retrieves a given Signer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$signer_id = 'signer_id_example'; // string | Signer Id

try {
    $result = $apiInstance->getSignersSignersId($signature_request_id, $signer_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->getSignersSignersId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **signer_id** | **string**| Signer Id | |

### Return type

[**\Yousign\Client\Model\Signer**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchSignatureRequestsSignatureRequestIdSignersSignerId()`

```php
patchSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id, $update_signer): \Yousign\Client\Model\Signer
```

Update a Signer

Updates a given Signer. Any parameters not provided are left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$signer_id = 'signer_id_example'; // string | Signer Id
$update_signer = new \Yousign\Client\Model\UpdateSigner(); // \Yousign\Client\Model\UpdateSigner

try {
    $result = $apiInstance->patchSignatureRequestsSignatureRequestIdSignersSignerId($signature_request_id, $signer_id, $update_signer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->patchSignatureRequestsSignatureRequestIdSignersSignerId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **signer_id** | **string**| Signer Id | |
| **update_signer** | [**\Yousign\Client\Model\UpdateSigner**](../Model/UpdateSigner.md)|  | [optional] |

### Return type

[**\Yousign\Client\Model\Signer**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSignatureRequestsSignatureRequestIdSigners()`

```php
postSignatureRequestsSignatureRequestIdSigners($signature_request_id, $create_signer): \Yousign\Client\Model\Signer
```

Create a new Signer

Adds a Signer to a given Signature Request.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$create_signer = new \Yousign\Client\Model\CreateSigner(); // \Yousign\Client\Model\CreateSigner

try {
    $result = $apiInstance->postSignatureRequestsSignatureRequestIdSigners($signature_request_id, $create_signer);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSigners: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **create_signer** | [**\Yousign\Client\Model\CreateSigner**](../Model/CreateSigner.md)|  | [optional] |

### Return type

[**\Yousign\Client\Model\Signer**](../Model/Signer.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp()`

```php
postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp($signature_request_id, $signer_id)
```

Send a One-Time Password (OTP) to a Signer

Send a One-Time Password (OTP) to a given Signer. Use this endpoint only if you use your own signing flow.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$signer_id = 'signer_id_example'; // string | Signer Id

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSendOtp: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **signer_id** | **string**| Signer Id | |

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

## `postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder()`

```php
postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder($signature_request_id, $signer_id)
```

Send manual reminder to a Signer

Sends a reminder to a given signer to complete their Signature Request. Only possible when the Signature Request status is `ongoing` and the Signer status is `notified`.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$signer_id = 'signer_id_example'; // string | Signer Id

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder($signature_request_id, $signer_id);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSendReminder: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **signer_id** | **string**| Signer Id | |

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

## `postSignatureRequestsSignatureRequestIdSignersSignerIdSign()`

```php
postSignatureRequestsSignatureRequestIdSignersSignerIdSign($signature_request_id, $signer_id, $signer_sign)
```

Sign a Signature Request

Sign a Signature Request on behalf of a given Signer.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\SignerApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$signature_request_id = 'signature_request_id_example'; // string | Signature Request Id
$signer_id = 'signer_id_example'; // string | Signer Id
$signer_sign = new \Yousign\Client\Model\SignerSign(); // \Yousign\Client\Model\SignerSign

try {
    $apiInstance->postSignatureRequestsSignatureRequestIdSignersSignerIdSign($signature_request_id, $signer_id, $signer_sign);
} catch (Exception $e) {
    echo 'Exception when calling SignerApi->postSignatureRequestsSignatureRequestIdSignersSignerIdSign: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **signature_request_id** | **string**| Signature Request Id | |
| **signer_id** | **string**| Signer Id | |
| **signer_sign** | [**\Yousign\Client\Model\SignerSign**](../Model/SignerSign.md)|  | [optional] |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`, `multipart/form-data`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
