# Swagger\Client\ConsumptionApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getConsumptions**](ConsumptionApi.md#getconsumptions) | **GET** /consumptions | Get Consumptions
[**getConsumptionsExport**](ConsumptionApi.md#getconsumptionsexport) | **GET** /consumptions/export | Export Consumption data

# **getConsumptions**
> \Swagger\Client\Model\Consumption getConsumptions($from, $to, $authentication_key)

Get Consumptions

Get signatures Consumption by source

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConsumptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \Swagger\Client\Model\DateYMD(); // \Swagger\Client\Model\DateYMD | The \"from\" date must not be more than 1 year in the past
$to = new \Swagger\Client\Model\DateYMD(); // \Swagger\Client\Model\DateYMD | The \"to\" date must be more recent than the \"from\" date
$authentication_key = "authentication_key_example"; // string | 

try {
    $result = $apiInstance->getConsumptions($from, $to, $authentication_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumptionApi->getConsumptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | [**\Swagger\Client\Model\DateYMD**](../Model/.md)| The \&quot;from\&quot; date must not be more than 1 year in the past |
 **to** | [**\Swagger\Client\Model\DateYMD**](../Model/.md)| The \&quot;to\&quot; date must be more recent than the \&quot;from\&quot; date |
 **authentication_key** | [**string**](../Model/.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\Consumption**](../Model/Consumption.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getConsumptionsExport**
> string getConsumptionsExport($from, $to, $authentication_key)

Export Consumption data

Get a binary .csv file containing all the Consumption data of the underlying signatures

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConsumptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \Swagger\Client\Model\DateYMD(); // \Swagger\Client\Model\DateYMD | The \"from\" date must not be more than 1 year in the past
$to = new \Swagger\Client\Model\DateYMD(); // \Swagger\Client\Model\DateYMD | The \"to\" date must be more recent than the \"from\" date
$authentication_key = "authentication_key_example"; // string | 

try {
    $result = $apiInstance->getConsumptionsExport($from, $to, $authentication_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumptionApi->getConsumptionsExport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **from** | [**\Swagger\Client\Model\DateYMD**](../Model/.md)| The \&quot;from\&quot; date must not be more than 1 year in the past |
 **to** | [**\Swagger\Client\Model\DateYMD**](../Model/.md)| The \&quot;to\&quot; date must be more recent than the \&quot;from\&quot; date |
 **authentication_key** | [**string**](../Model/.md)|  | [optional]

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: text/csv, application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

