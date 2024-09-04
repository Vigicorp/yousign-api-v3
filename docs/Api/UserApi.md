# Swagger\Client\UserApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWorkspaceWorkspaceIdUsersUserId**](UserApi.md#deleteworkspaceworkspaceidusersuserid) | **DELETE** /workspaces/{workspaceId}/users/{userId} | Remove a user from a workspace
[**getUsers**](UserApi.md#getusers) | **GET** /users | List Users
[**putWorkspacesWorkspaceIdUsers**](UserApi.md#putworkspacesworkspaceidusers) | **PUT** /workspaces/{workspaceId}/users/{userId} | Associate a user to a workspace

# **deleteWorkspaceWorkspaceIdUsersUserId**
> deleteWorkspaceWorkspaceIdUsersUserId($workspace_id, $user_id)

Remove a user from a workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = "workspace_id_example"; // string | Workspace Id
$user_id = "user_id_example"; // string | User Id

try {
    $apiInstance->deleteWorkspaceWorkspaceIdUsersUserId($workspace_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->deleteWorkspaceWorkspaceIdUsersUserId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | [**string**](../Model/.md)| Workspace Id |
 **user_id** | [**string**](../Model/.md)| User Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUsers**
> \Swagger\Client\Model\GetUsers200Response getUsers($after, $limit)

List Users

Returns the list of all the Users within your organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = "after_example"; // string | After cursor (pagination)
$limit = 100; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->getUsers($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| After cursor (pagination) | [optional]
 **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 100]

### Return type

[**\Swagger\Client\Model\GetUsers200Response**](../Model/GetUsers200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **putWorkspacesWorkspaceIdUsers**
> putWorkspacesWorkspaceIdUsers($workspace_id, $user_id)

Associate a user to a workspace

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\UserApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = "workspace_id_example"; // string | Workspace Id
$user_id = "user_id_example"; // string | User Id

try {
    $apiInstance->putWorkspacesWorkspaceIdUsers($workspace_id, $user_id);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->putWorkspacesWorkspaceIdUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | [**string**](../Model/.md)| Workspace Id |
 **user_id** | [**string**](../Model/.md)| User Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

