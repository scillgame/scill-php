# SCILL\EventsApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**sendEvent**](EventsApi.md#sendevent) | **POST** /api/v1/events | Post an event

# **sendEvent**
> \SCILL\Model\ActionResponse sendEvent($body)

Post an event

Post an event to the SCILL backend

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
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

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

