# SCILL\AuthApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateAccessToken**](AuthApi.md#generateaccesstoken) | **POST** /api/v1/auth/access-token | Get an access token for any user identifier signed with the API-Key

# **generateAccessToken**
> \SCILL\Model\AccessToken generateAccessToken($body)

Get an access token for any user identifier signed with the API-Key

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \SCILL\Model\ForeignUserIdentifier(); // \SCILL\Model\ForeignUserIdentifier | Foreign user identifier.

try {
    $result = $apiInstance->generateAccessToken($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->generateAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\ForeignUserIdentifier**](../Model/ForeignUserIdentifier.md)| Foreign user identifier. |

### Return type

[**\SCILL\Model\AccessToken**](../Model/AccessToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

