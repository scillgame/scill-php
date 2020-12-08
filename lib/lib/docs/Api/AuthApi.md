# SCILL\AuthApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**generateAccessToken**](AuthApi.md#generateaccesstoken) | **POST** /api/v1/auth/access-token | Get an access token for any user identifier signed with the API-Key
[**getUserBattlePassNotificationTopic**](AuthApi.md#getuserbattlepassnotificationtopic) | **GET** /api/v1/auth/user-battle-pass-topic-link | Get a topic to be used with an MQTT client to receive real time updates whenever a battle pass or challenges and levels within the battle pass change
[**getUserChallengeNotificationTopic**](AuthApi.md#getuserchallengenotificationtopic) | **GET** /api/v1/auth/user-challenge-topic-link | Get a topic to be used with an MQTT client to receive real time updates whenever the specified challenge changes.
[**getUserChallengesNotificationTopic**](AuthApi.md#getuserchallengesnotificationtopic) | **GET** /api/v1/auth/user-challenges-topic-link | Get a topic to be used with an MQTT client to receive real time updates whenever challenges for the user provided by the access token changes.

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

# **getUserBattlePassNotificationTopic**
> \SCILL\Model\NotificationTopic getUserBattlePassNotificationTopic($battle_pass_id)

Get a topic to be used with an MQTT client to receive real time updates whenever a battle pass or challenges and levels within the battle pass change

Get a topic to be used with an MQTT client to receive real time updates whenever a battle pass changes.

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
$battle_pass_id = "battle_pass_id_example"; // string | The battle pass you want to get notified

try {
    $result = $apiInstance->getUserBattlePassNotificationTopic($battle_pass_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getUserBattlePassNotificationTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **battle_pass_id** | **string**| The battle pass you want to get notified |

### Return type

[**\SCILL\Model\NotificationTopic**](../Model/NotificationTopic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserChallengeNotificationTopic**
> \SCILL\Model\NotificationTopic getUserChallengeNotificationTopic($challenge_id)

Get a topic to be used with an MQTT client to receive real time updates whenever the specified challenge changes.

Get a topic to be used with an MQTT client to receive real time updates whenever the challenge changes.

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
$challenge_id = "challenge_id_example"; // string | The challenge id you want to get notified

try {
    $result = $apiInstance->getUserChallengeNotificationTopic($challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getUserChallengeNotificationTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **challenge_id** | **string**| The challenge id you want to get notified |

### Return type

[**\SCILL\Model\NotificationTopic**](../Model/NotificationTopic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserChallengesNotificationTopic**
> \SCILL\Model\NotificationTopic getUserChallengesNotificationTopic()

Get a topic to be used with an MQTT client to receive real time updates whenever challenges for the user provided by the access token changes.

Get a topic to be used with an MQTT client to receive real time updates whenever challenges for the user provided by the access token change.

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

try {
    $result = $apiInstance->getUserChallengesNotificationTopic();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->getUserChallengesNotificationTopic: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SCILL\Model\NotificationTopic**](../Model/NotificationTopic.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

