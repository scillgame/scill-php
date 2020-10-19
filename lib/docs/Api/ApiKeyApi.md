# SCILL\ApiKeyApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createApiKey**](ApiKeyApi.md#createapikey) | **POST** /api/v1/admin/api-key/{appId} | Create a new api key for the app
[**deleteApiKey**](ApiKeyApi.md#deleteapikey) | **DELETE** /api/v1/admin/api-key/{appId}/{apiKey} | Delete the API key.
[**getApiKeyInfo**](ApiKeyApi.md#getapikeyinfo) | **GET** /api/v1/admin/api-key/{appId}/{apiKey} | Get info about an API key
[**getApiKeys**](ApiKeyApi.md#getapikeys) | **GET** /api/v1/admin/api-key/{appId} | Get all api keys for this app
[**resetApiKey**](ApiKeyApi.md#resetapikey) | **PUT** /api/v1/admin/api-key/{appId}/{apiKey} | Reset an api key

# **createApiKey**
> \SCILL\Model\InlineResponse2001 createApiKey($app_id)

Create a new api key for the app

Create an api key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->createApiKey($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->createApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApiKey**
> \SCILL\Model\ActionResponse deleteApiKey($app_id, $api_key)

Delete the API key.

Delete the API key. All subsequent requests with this API key will be blocked.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$api_key = "api_key_example"; // string | The API key (url encoded)

try {
    $result = $apiInstance->deleteApiKey($app_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->deleteApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **api_key** | **string**| The API key (url encoded) |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiKeyInfo**
> \SCILL\Model\ApiKeyInfo getApiKeyInfo($app_id, $api_key)

Get info about an API key

Get info about your API key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$api_key = "api_key_example"; // string | The API key (url encoded)

try {
    $result = $apiInstance->getApiKeyInfo($app_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->getApiKeyInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **api_key** | **string**| The API key (url encoded) |

### Return type

[**\SCILL\Model\ApiKeyInfo**](../Model/ApiKeyInfo.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApiKeys**
> \SCILL\Model\ApiKeyInfo[] getApiKeys($app_id)

Get all api keys for this app

Every app can have multiple API keys. With this endpoint you can get all api keys issued for the provided app id.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getApiKeys($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->getApiKeys: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\ApiKeyInfo[]**](../Model/ApiKeyInfo.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **resetApiKey**
> \SCILL\Model\ActionResponse resetApiKey($app_id, $api_key)

Reset an api key

Reset the api key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\ApiKeyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$api_key = "api_key_example"; // string | The API key (url encoded)

try {
    $result = $apiInstance->resetApiKey($app_id, $api_key);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ApiKeyApi->resetApiKey: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **api_key** | **string**| The API key (url encoded) |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

