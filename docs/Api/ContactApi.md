# Yousign\Client\ContactApi

All URIs are relative to https://api-sandbox.yousign.app/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteContactsContactId()**](ContactApi.md#deleteContactsContactId) | **DELETE** /contacts/{contactId} | Delete a Contact |
| [**getContacts()**](ContactApi.md#getContacts) | **GET** /contacts | List Contacts |
| [**getContactsContactId()**](ContactApi.md#getContactsContactId) | **GET** /contacts/{contactId} | Get a Contact |
| [**patchContactsContactId()**](ContactApi.md#patchContactsContactId) | **PATCH** /contacts/{contactId} | Update a Contact |
| [**postContact()**](ContactApi.md#postContact) | **POST** /contacts | Create a Contact |


## `deleteContactsContactId()`

```php
deleteContactsContactId($contact_id)
```

Delete a Contact

Deletes a given Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact Id

try {
    $apiInstance->deleteContactsContactId($contact_id);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->deleteContactsContactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact Id | |

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

## `getContacts()`

```php
getContacts($after, $limit): \Yousign\Client\Model\GetContacts200Response
```

List Contacts

Returns the list of all the Contacts within your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = 'after_example'; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->getContacts($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContacts: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **after** | **string**| After cursor (pagination) | [optional] |
| **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100] |

### Return type

[**\Yousign\Client\Model\GetContacts200Response**](../Model/GetContacts200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getContactsContactId()`

```php
getContactsContactId($contact_id): \Yousign\Client\Model\Contact
```

Get a Contact

Retrieves a given Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact Id

try {
    $result = $apiInstance->getContactsContactId($contact_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->getContactsContactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact Id | |

### Return type

[**\Yousign\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `patchContactsContactId()`

```php
patchContactsContactId($contact_id, $update_contact): \Yousign\Client\Model\Contact
```

Update a Contact

Updates a given Contact. Any parameters not provided are left unchanged.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$contact_id = 'contact_id_example'; // string | Contact Id
$update_contact = new \Yousign\Client\Model\UpdateContact(); // \Yousign\Client\Model\UpdateContact

try {
    $result = $apiInstance->patchContactsContactId($contact_id, $update_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->patchContactsContactId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **contact_id** | **string**| Contact Id | |
| **update_contact** | [**\Yousign\Client\Model\UpdateContact**](../Model/UpdateContact.md)|  | [optional] |

### Return type

[**\Yousign\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `postContact()`

```php
postContact($create_contact): \Yousign\Client\Model\Contact
```

Create a Contact

Creates a new Contact.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ContactApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$create_contact = new \Yousign\Client\Model\CreateContact(); // \Yousign\Client\Model\CreateContact

try {
    $result = $apiInstance->postContact($create_contact);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ContactApi->postContact: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **create_contact** | [**\Yousign\Client\Model\CreateContact**](../Model/CreateContact.md)|  | [optional] |

### Return type

[**\Yousign\Client\Model\Contact**](../Model/Contact.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: `application/json`
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
