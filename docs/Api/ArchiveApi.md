# Yousign\Client\ArchiveApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getArchivesArchivedFileIdDownload**](ArchiveApi.md#getarchivesarchivedfileiddownload) | **GET** /archives/{archivedFileId}/download | Download archived file
[**postArchives**](ArchiveApi.md#postarchives) | **POST** /archives | Direct upload an archived file

# **getArchivesArchivedFileIdDownload**
> string getArchivesArchivedFileIdDownload($archived_file_id)

Download archived file

Download the archived file using the ArchivedFileId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$archived_file_id = "archived_file_id_example"; // string | ArchivedFileId

try {
    $result = $apiInstance->getArchivesArchivedFileIdDownload($archived_file_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->getArchivesArchivedFileIdDownload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **archived_file_id** | [**string**](../Model/.md)| ArchivedFileId |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/octet-stream, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postArchives**
> \Yousign\Client\Model\ArchivedFile postArchives($file, $workspace_id, $archive_y, $tags, $expired_at)

Direct upload an archived file

Archive a file in a secure digital safe for 10 years

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Yousign\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ArchiveApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$file = "file_example"; // string | 
$workspace_id = "38400000-8cf0-11bd-b23e-10b96e4ef00d"; // string | 
$archive_y = "archive_y_example"; // string | 
$tags = array("tags_example"); // string[] | 
$expired_at = "expired_at_example"; // string | 

try {
    $result = $apiInstance->postArchives($file, $workspace_id, $archive_y, $tags, $expired_at);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ArchiveApi->postArchives: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **file** | **string****string**|  | [optional]
 **workspace_id** | [**string**](../Model/.md)|  | [optional]
 **archive_y** | **string**|  | [optional]
 **tags** | [**string[]**](../Model/string.md)|  | [optional]
 **expired_at** | **string**|  | [optional]

### Return type

[**\Yousign\Client\Model\ArchivedFile**](../Model/ArchivedFile.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)
