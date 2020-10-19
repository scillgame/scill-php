# SCILL\WebhooksApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createWebhook**](WebhooksApi.md#createwebhook) | **POST** /api/v1/admin/webhooks | Create a new webhook
[**deleteWebhook**](WebhooksApi.md#deletewebhook) | **DELETE** /api/v1/admin/webhooks/{appId}/{webhookId} | Delete the specified webhook
[**getWebhookInfo**](WebhooksApi.md#getwebhookinfo) | **GET** /api/v1/admin/webhooks/{appId}/{webhookId} | Returns info about the specified webhook id
[**getWebhooks**](WebhooksApi.md#getwebhooks) | **GET** /api/v1/admin/webhooks/{appId} | Get an array with Webhook objects
[**updateWebhook**](WebhooksApi.md#updatewebhook) | **PUT** /api/v1/admin/webhooks/{appId}/{webhookId} | Update the specified webhook with new data

# **createWebhook**
> \SCILL\Model\Webhook createWebhook($body)

Create a new webhook

Creates a new webhook for a specified game and type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SCILL\Model\WebhookPayload(); // \SCILL\Model\WebhookPayload | Payload to create a Webhook

try {
    $result = $apiInstance->createWebhook($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->createWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\WebhookPayload**](../Model/WebhookPayload.md)| Payload to create a Webhook |

### Return type

[**\SCILL\Model\Webhook**](../Model/Webhook.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteWebhook**
> \SCILL\Model\ActionResponse deleteWebhook($app_id, $webhook_id)

Delete the specified webhook

The webhook will be deleted

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$webhook_id = "webhook_id_example"; // string | The id of the webhook

try {
    $result = $apiInstance->deleteWebhook($app_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->deleteWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **webhook_id** | **string**| The id of the webhook |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhookInfo**
> getWebhookInfo($app_id, $webhook_id)

Returns info about the specified webhook id

Get a Webhook object for the specified webhook id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$webhook_id = "webhook_id_example"; // string | The id of the webhook

try {
    $apiInstance->getWebhookInfo($app_id, $webhook_id);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhookInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **webhook_id** | **string**| The id of the webhook |

### Return type

void (empty response body)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getWebhooks**
> \SCILL\Model\Webhook[] getWebhooks($app_id)

Get an array with Webhook objects

Get a list of Webhook objects for the specified app id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getWebhooks($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->getWebhooks: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\Webhook[]**](../Model/Webhook.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateWebhook**
> \SCILL\Model\ActionResponse updateWebhook($body, $app_id, $webhook_id)

Update the specified webhook with new data

Update a webhook data like the target_url or the type

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\WebhooksApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SCILL\Model\WebhookPayload(); // \SCILL\Model\WebhookPayload | Payload to update a Webhook
$app_id = "app_id_example"; // string | The app id
$webhook_id = "webhook_id_example"; // string | The id of the webhook

try {
    $result = $apiInstance->updateWebhook($body, $app_id, $webhook_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling WebhooksApi->updateWebhook: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\WebhookPayload**](../Model/WebhookPayload.md)| Payload to update a Webhook |
 **app_id** | **string**| The app id |
 **webhook_id** | **string**| The id of the webhook |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

