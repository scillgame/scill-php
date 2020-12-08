# SCILL\ChallengesApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activatePersonalChallenge**](ChallengesApi.md#activatepersonalchallenge) | **PUT** /api/v1/challenges/personal/activate/{appId}/{challengeId} | Activate a personal challenges
[**cancelPersonalChallenge**](ChallengesApi.md#cancelpersonalchallenge) | **PUT** /api/v1/challenges/personal/cancel/{appId}/{challengeId} | Cancel an active personal challenges
[**claimPersonalChallengeReward**](ChallengesApi.md#claimpersonalchallengereward) | **PUT** /api/v1/challenges/personal/claim/{appId}/{challengeId} | Claim the reward of a finished personal challenge
[**generateWebsocketAccessToken**](ChallengesApi.md#generatewebsocketaccesstoken) | **GET** /api/v1/challenges/web-socket/generate-token | Get an access token for the Websockets server notifying of updates in real time
[**getActivePersonalChallenges**](ChallengesApi.md#getactivepersonalchallenges) | **GET** /api/v1/challenges/personal/get-in-progress-challenges/{appId} | Get active personal challenges
[**getPersonalChallengeById**](ChallengesApi.md#getpersonalchallengebyid) | **GET** /api/v1/challenges/personal/get/{appId}/{challengeId} | Get personal challenge by id
[**getPersonalChallenges**](ChallengesApi.md#getpersonalchallenges) | **GET** /api/v1/challenges/personal/get/{appId} | Get personal challenges
[**unlockPersonalChallenge**](ChallengesApi.md#unlockpersonalchallenge) | **POST** /api/v1/challenges/personal/unlock/{appId}/{challengeId} | Unlock a personal challenges

# **activatePersonalChallenge**
> \SCILL\Model\ActionResponse activatePersonalChallenge($app_id, $challenge_id)

Activate a personal challenges

Activate a personal challenge by product id and user challenge id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$challenge_id = "challenge_id_example"; // string | The challenge id (see challenge_id of Challenge object)

try {
    $result = $apiInstance->activatePersonalChallenge($app_id, $challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->activatePersonalChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **challenge_id** | **string**| The challenge id (see challenge_id of Challenge object) |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **cancelPersonalChallenge**
> \SCILL\Model\ActionResponse cancelPersonalChallenge($app_id, $challenge_id)

Cancel an active personal challenges

Cancel an active personal challenge by product id and user challenge id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$challenge_id = "challenge_id_example"; // string | The challenge id (see challenge_id of Challenge object)

try {
    $result = $apiInstance->cancelPersonalChallenge($app_id, $challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->cancelPersonalChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **challenge_id** | **string**| The challenge id (see challenge_id of Challenge object) |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **claimPersonalChallengeReward**
> \SCILL\Model\ActionResponse claimPersonalChallengeReward($app_id, $challenge_id)

Claim the reward of a finished personal challenge

Claim the reward of a finished personal challenge by product id and user challenge id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$challenge_id = "challenge_id_example"; // string | The challenge id (see challenge_id of Challenge object)

try {
    $result = $apiInstance->claimPersonalChallengeReward($app_id, $challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->claimPersonalChallengeReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **challenge_id** | **string**| The challenge id (see challenge_id of Challenge object) |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **generateWebsocketAccessToken**
> \SCILL\Model\SocketToken generateWebsocketAccessToken()

Get an access token for the Websockets server notifying of updates in real time

Get an access token for the Websockets server notifying of updates in real time

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);

try {
    $result = $apiInstance->generateWebsocketAccessToken();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->generateWebsocketAccessToken: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\SCILL\Model\SocketToken**](../Model/SocketToken.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActivePersonalChallenges**
> \SCILL\Model\ChallengeCategory[] getActivePersonalChallenges($app_id)

Get active personal challenges

Get active personal challenges organized in categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getActivePersonalChallenges($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->getActivePersonalChallenges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\ChallengeCategory[]**](../Model/ChallengeCategory.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonalChallengeById**
> \SCILL\Model\Challenge getPersonalChallengeById($app_id, $challenge_id)

Get personal challenge by id

Get personal challenges organized in categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$challenge_id = "challenge_id_example"; // string | The challenge id (see challenge_id of Challenge object)

try {
    $result = $apiInstance->getPersonalChallengeById($app_id, $challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->getPersonalChallengeById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **challenge_id** | **string**| The challenge id (see challenge_id of Challenge object) |

### Return type

[**\SCILL\Model\Challenge**](../Model/Challenge.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getPersonalChallenges**
> \SCILL\Model\ChallengeCategory[] getPersonalChallenges($app_id)

Get personal challenges

Get personal challenges organized in categories

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getPersonalChallenges($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->getPersonalChallenges: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\ChallengeCategory[]**](../Model/ChallengeCategory.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlockPersonalChallenge**
> \SCILL\Model\ActionResponse unlockPersonalChallenge($app_id, $challenge_id)

Unlock a personal challenges

Unlock a personal challenge by product id and challenge id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\ChallengesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$challenge_id = "challenge_id_example"; // string | The challenge id (see challenge_id of Challenge object)

try {
    $result = $apiInstance->unlockPersonalChallenge($app_id, $challenge_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ChallengesApi->unlockPersonalChallenge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **challenge_id** | **string**| The challenge id (see challenge_id of Challenge object) |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

