# Swagger\Client\WebhookApi

All URIs are relative to *https://api-sandbox.yousign.app/v3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**deleteWebhooksWebhookId**](WebhookApi.md#deletewebhookswebhookid) | **DELETE** /webhooks/{webhookId} | Delete a Webhook subscription
[**getWebhooks**](WebhookApi.md#getwebhooks) | **GET** /webhooks | List Webhook subscriptions
[**getWebhooksWebhookId**](WebhookApi.md#getwebhookswebhookid) | **GET** /webhooks/{webhookId} | Get a Webhook subscription
[**patchWebhooksWebhookId**](WebhookApi.md#patchwebhookswebhookid) | **PATCH** /webhooks/{webhookId} | Update a Webhook subscription
[**postWebhooksSubscriptions**](WebhookApi.md#postwebhookssubscriptions) | **POST** /webhooks | Create a Webhook subscription

# **deleteWebhooksWebhookId**
> deleteWebhooksWebhookId($webhook_id)

Delete a Webhook subscription

Deletes a given Webhook subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = "webhook_id_example"; // string | Webhook Id

try {
    $apiInstance->deleteWebhooksWebhookId($webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->deleteWebhooksWebhookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/.md)| Webhook Id |

### Return type

void (empty response body)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \Swagger\Client\Model\WebhookSubscription[] getWebhooks()

List Webhook subscriptions

Returns the list of all Webhook subscriptions in your Organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getWebhooks();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\WebhookSubscription[]**](../Model/WebhookSubscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooksWebhookId**
> \Swagger\Client\Model\WebhookSubscription getWebhooksWebhookId($webhook_id)

Get a Webhook subscription

Retrieves a given Webhook subscription.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = "webhook_id_example"; // string | Webhook Id

try {
    $result = $apiInstance->getWebhooksWebhookId($webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->getWebhooksWebhookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/.md)| Webhook Id |

### Return type

[**\Swagger\Client\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **patchWebhooksWebhookId**
> \Swagger\Client\Model\WebhookSubscription patchWebhooksWebhookId($webhook_id, $body)

Update a Webhook subscription

Updates a given Webhook subscription. Any parameters not provided are left unchanged.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$webhook_id = "webhook_id_example"; // string | Webhook Id
$body = new \Swagger\Client\Model\UpdateWebhookSubscription(); // \Swagger\Client\Model\UpdateWebhookSubscription | 

try {
    $result = $apiInstance->patchWebhooksWebhookId($webhook_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->patchWebhooksWebhookId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **webhook_id** | [**string**](../Model/.md)| Webhook Id |
 **body** | [**\Swagger\Client\Model\UpdateWebhookSubscription**](../Model/UpdateWebhookSubscription.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **postWebhooksSubscriptions**
> \Swagger\Client\Model\WebhookSubscription postWebhooksSubscriptions($body)

Create a Webhook subscription

Creates a new Webhook subscription in your organization.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerAuth
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\WebhookApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\CreateWebhookSubscription(); // \Swagger\Client\Model\CreateWebhookSubscription | 

try {
    $result = $apiInstance->postWebhooksSubscriptions($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhookApi->postWebhooksSubscriptions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\CreateWebhookSubscription**](../Model/CreateWebhookSubscription.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\WebhookSubscription**](../Model/WebhookSubscription.md)

### Authorization

[bearerAuth](../../README.md#bearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

