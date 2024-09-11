# Yousign\Client\ConsumptionApi

All URIs are relative to https://api-sandbox.yousign.app/v3, except if the operation defines another base path.

| Method | HTTP request | Description |
| ------------- | ------------- | ------------- |
| [**getConsumptions()**](ConsumptionApi.md#getConsumptions) | **GET** /consumptions | Get Consumptions |
| [**getConsumptionsExport()**](ConsumptionApi.md#getConsumptionsExport) | **GET** /consumptions/export | Export Consumption data |


## `getConsumptions()`

```php
getConsumptions($from, $to, $authentication_key): \Yousign\Client\Model\Consumption
```

Get Consumptions

Get signatures Consumption by source

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ConsumptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The \"from\" date must not be more than 1 year in the past
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The \"to\" date must be more recent than the \"from\" date
$authentication_key = 'authentication_key_example'; // string

try {
    $result = $apiInstance->getConsumptions($from, $to, $authentication_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumptionApi->getConsumptions: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The \&quot;from\&quot; date must not be more than 1 year in the past | |
| **to** | **\DateTime**| The \&quot;to\&quot; date must be more recent than the \&quot;from\&quot; date | |
| **authentication_key** | **string**|  | [optional] |

### Return type

[**\Yousign\Client\Model\Consumption**](../Model/Consumption.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)

## `getConsumptionsExport()`

```php
getConsumptionsExport($from, $to, $authentication_key): string
```

Export Consumption data

Get a binary .csv file containing all the Consumption data of the underlying signatures

### Example

```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');


// Configure Bearer authorization: bearerAuth
$config = Yousign\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Yousign\Client\Api\ConsumptionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The \"from\" date must not be more than 1 year in the past
$to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The \"to\" date must be more recent than the \"from\" date
$authentication_key = 'authentication_key_example'; // string

try {
    $result = $apiInstance->getConsumptionsExport($from, $to, $authentication_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumptionApi->getConsumptionsExport: ', $e->getMessage(), PHP_EOL;
}
```

### Parameters

| Name | Type | Description  | Notes |
| ------------- | ------------- | ------------- | ------------- |
| **from** | **\DateTime**| The \&quot;from\&quot; date must not be more than 1 year in the past | |
| **to** | **\DateTime**| The \&quot;to\&quot; date must be more recent than the \&quot;from\&quot; date | |
| **authentication_key** | **string**|  | [optional] |

### Return type

**string**

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

- **Content-Type**: Not defined
- **Accept**: `text/csv`, `application/json`

[[Back to top]](#) [[Back to API list]](../../README.md#endpoints)
[[Back to Model list]](../../README.md#models)
[[Back to README]](../../README.md)
