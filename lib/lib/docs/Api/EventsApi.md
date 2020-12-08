# SCILL\EventsApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAvailableEvents**](EventsApi.md#getavailableevents) | **GET** /api/v1/public/documentation | Get all available events and required and optional properties
[**sendEvent**](EventsApi.md#sendevent) | **POST** /api/v1/events | Post an event

# **getAvailableEvents**
> \SCILL\Model\EventDescription[] getAvailableEvents()

Get all available events and required and optional properties

Get all available events and required and optional properties

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new SCILL\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);

try {
    $result = $apiInstance->getAvailableEvents();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->getAvailableEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SCILL\Model\EventDescription[]**](../Model/EventDescription.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sendEvent**
> \SCILL\Model\ActionResponse sendEvent($body)

Post an event

Post an event to the SCILL backend

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
// Configure API key authorization: ApiKeyType
$config = SCILL\Configuration::getDefaultConfiguration()->setApiKey('auth', 'YOUR_API_KEY');
// Uncomment below to setup prefix (e.g. Bearer) for API key, if needed
// $config = SCILL\Configuration::getDefaultConfiguration()->setApiKeyPrefix('auth', 'Bearer');    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\EventsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SCILL\Model\EventPayload(); // \SCILL\Model\EventPayload | Event payload

try {
    $result = $apiInstance->sendEvent($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling EventsApi->sendEvent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\EventPayload**](../Model/EventPayload.md)| Event payload |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[ApiKeyType](../../README.md#ApiKeyType), [BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

