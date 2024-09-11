# Yousign\Client\UserApi

All URIs are relative to https://api-sandbox.yousign.app/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**deleteWorkspaceWorkspaceIdUsersUserId()**](UserApi.md#deleteWorkspaceWorkspaceIdUsersUserId) | **DELETE** /workspaces/{workspaceId}/users/{userId} | Remove a user from a workspace |
| [**getUsers()**](UserApi.md#getUsers) | **GET** /users | List Users |
| [**putWorkspacesWorkspaceIdUsers()**](UserApi.md#putWorkspacesWorkspaceIdUsers) | **PUT** /workspaces/{workspaceId}/users/{userId} | Associate a user to a workspace |


## `deleteWorkspaceWorkspaceIdUsersUserId()`

```php
deleteWorkspaceWorkspaceIdUsersUserId($workspace_id, $user_id)
```

Remove a user from a workspace

Removes a User from a given Workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace Id
$user_id = 'user_id_example'; // string | User Id

try {
    $apiInstance->deleteWorkspaceWorkspaceIdUsersUserId($workspace_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteWorkspaceWorkspaceIdUsersUserId: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace Id | |
| **user_id** | **string**| User Id | |

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

## `getUsers()`

```php
getUsers($after, $limit): \Yousign\Client\Model\GetUsers200Response
```

List Users

Returns the list of all the Users within your organization.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = 'after_example'; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->getUsers($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **after** | **string**| After cursor (pagination) | [optional] |
| **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100] |

### Return type

[**\Yousign\Client\Model\GetUsers200Response**](../Model/GetUsers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `putWorkspacesWorkspaceIdUsers()`

```php
putWorkspacesWorkspaceIdUsers($workspace_id, $user_id)
```

Associate a user to a workspace

Associates a User with a given Workspace.

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = 'workspace_id_example'; // string | Workspace Id
$user_id = 'user_id_example'; // string | User Id

try {
    $apiInstance->putWorkspacesWorkspaceIdUsers($workspace_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putWorkspacesWorkspaceIdUsers: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **workspace_id** | **string**| Workspace Id | |
| **user_id** | **string**| User Id | |

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
