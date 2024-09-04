# Swagger\Client\WorkspaceApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWorkspace**](WorkspaceApi.md#deleteworkspace) | **DELETE** /workspaces/{workspaceId} | Delete a Workspace
[**getWorkspaces**](WorkspaceApi.md#getworkspaces) | **GET** /workspaces | List Workspaces
[**getWorkspacesDefault**](WorkspaceApi.md#getworkspacesdefault) | **GET** /workspaces/default | Get the default Workspace
[**getWorkspacesWorkspaceId**](WorkspaceApi.md#getworkspacesworkspaceid) | **GET** /workspaces/{workspaceId} | Get a Workspace
[**markWorkspaceAsDefault**](WorkspaceApi.md#markworkspaceasdefault) | **POST** /workspaces/default | Mark the given Workspace as default
[**patchWorkspacesWorkspaceId**](WorkspaceApi.md#patchworkspacesworkspaceid) | **PATCH** /workspaces/{workspaceId} | Update a Workspace
[**postWorkspace**](WorkspaceApi.md#postworkspace) | **POST** /workspaces | Create a Workspace

# **deleteWorkspace**
> deleteWorkspace($workspace_id, $body)

Delete a Workspace

Deletes a given Workspace and transfers everything that is attached to this Workspace to a another specified Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = "workspace_id_example"; // string | Workspace Id
$body = new \Swagger\Client\Model\DeleteWorkspace(); // \Swagger\Client\Model\DeleteWorkspace | 

try {
    $apiInstance->deleteWorkspace($workspace_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->deleteWorkspace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | [**string**](../Model/.md)| Workspace Id |
 **body** | [**\Swagger\Client\Model\DeleteWorkspace**](../Model/DeleteWorkspace.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkspaces**
> \Swagger\Client\Model\GetWorkspaces200Response getWorkspaces($after, $limit)

List Workspaces

Returns the list of all Workspaces within your Organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$after = "after_example"; // string | After cursor (pagination)
$limit = 10; // int | The limit of items count to retrieve.

try {
    $result = $apiInstance->getWorkspaces($after, $limit);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getWorkspaces: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **after** | **string**| After cursor (pagination) | [optional]
 **limit** | **int**| The limit of items count to retrieve. | [optional] [default to 10]

### Return type

[**\Swagger\Client\Model\GetWorkspaces200Response**](../Model/GetWorkspaces200Response.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkspacesDefault**
> \Swagger\Client\Model\Workspace getWorkspacesDefault()

Get the default Workspace

Retrieves the default Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWorkspacesDefault();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getWorkspacesDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\Workspace**](../Model/Workspace.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWorkspacesWorkspaceId**
> \Swagger\Client\Model\Workspace getWorkspacesWorkspaceId($workspace_id)

Get a Workspace

Retrieves a given Workspace.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = "workspace_id_example"; // string | Workspace Id

try {
    $result = $apiInstance->getWorkspacesWorkspaceId($workspace_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->getWorkspacesWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | [**string**](../Model/.md)| Workspace Id |

### Return type

[**\Swagger\Client\Model\Workspace**](../Model/Workspace.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **markWorkspaceAsDefault**
> markWorkspaceAsDefault($body)

Mark the given Workspace as default

Marks the given Workspace as default.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\MarkWorkspaceAsDefault(); // \Swagger\Client\Model\MarkWorkspaceAsDefault | 

try {
    $apiInstance->markWorkspaceAsDefault($body);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->markWorkspaceAsDefault: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\MarkWorkspaceAsDefault**](../Model/MarkWorkspaceAsDefault.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWorkspacesWorkspaceId**
> \Swagger\Client\Model\Workspace patchWorkspacesWorkspaceId($workspace_id, $body)

Update a Workspace

Updates a given Workspace. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$workspace_id = "workspace_id_example"; // string | Workspace Id
$body = new \Swagger\Client\Model\UpdateWorkspace(); // \Swagger\Client\Model\UpdateWorkspace | 

try {
    $result = $apiInstance->patchWorkspacesWorkspaceId($workspace_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->patchWorkspacesWorkspaceId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **workspace_id** | [**string**](../Model/.md)| Workspace Id |
 **body** | [**\Swagger\Client\Model\UpdateWorkspace**](../Model/UpdateWorkspace.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workspace**](../Model/Workspace.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWorkspace**
> \Swagger\Client\Model\Workspace postWorkspace($body)

Create a Workspace

Creates a new Workspace in the organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WorkspaceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateWorkspace(); // \Swagger\Client\Model\CreateWorkspace | 

try {
    $result = $apiInstance->postWorkspace($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WorkspaceApi->postWorkspace: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateWorkspace**](../Model/CreateWorkspace.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Workspace**](../Model/Workspace.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

