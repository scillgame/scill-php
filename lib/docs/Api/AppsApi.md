# SCILL\AppsApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**appInfo**](AppsApi.md#appinfo) | **GET** /api/v1/admin/app/{appId} | Get app info
[**createApp**](AppsApi.md#createapp) | **POST** /api/v1/admin/app | Create a new app
[**deleteApp**](AppsApi.md#deleteapp) | **DELETE** /api/v1/admin/app/{appId} | Delete app
[**getApps**](AppsApi.md#getapps) | **GET** /api/v1/admin/app | Get all apps
[**setAppInfo**](AppsApi.md#setappinfo) | **PUT** /api/v1/admin/app/{appId} | Update infos of an app

# **appInfo**
> \SCILL\Model\App appInfo($app_id)

Get app info

Get basic information about the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->appInfo($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->appInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\App**](../Model/App.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createApp**
> \SCILL\Model\InlineResponse200 createApp($body)

Create a new app

Use this endpoint to create a new app linked to your account

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SCILL\Model\AppPayload(); // \SCILL\Model\AppPayload | Payload for creating an app

try {
    $result = $apiInstance->createApp($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->createApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\AppPayload**](../Model/AppPayload.md)| Payload for creating an app |

### Return type

[**\SCILL\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteApp**
> \SCILL\Model\ActionResponse deleteApp($app_id)

Delete app

The app will be set to inactive mode.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->deleteApp($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->deleteApp: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getApps**
> \SCILL\Model\App[] getApps()

Get all apps

Get all apps linked to the account provided in the Auth Bearer

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->getApps();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->getApps: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SCILL\Model\App[]**](../Model/App.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setAppInfo**
> \SCILL\Model\ActionResponse setAppInfo($body, $app_id)

Update infos of an app

Update basic app info

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new SCILL\Api\AppsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SCILL\Model\AppPayload(); // \SCILL\Model\AppPayload | Payload for updating an app
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->setAppInfo($body, $app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AppsApi->setAppInfo: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\AppPayload**](../Model/AppPayload.md)| Payload for updating an app |
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

