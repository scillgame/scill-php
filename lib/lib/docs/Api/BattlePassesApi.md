# SCILL\BattlePassesApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**activateBattlePassLevel**](BattlePassesApi.md#activatebattlepasslevel) | **POST** /api/v1/battle-pass-levels/{appId}/activate/{levelId} | Activate a given battle pass level by id
[**claimBattlePassLevelReward**](BattlePassesApi.md#claimbattlepasslevelreward) | **POST** /api/v1/battle-pass-levels/{appId}/claim/{levelId} | Claim the battle pass level reward. This will trigger a Webhook that you can use to unlock the reward on server side. If you don&#x27;t have a server you can also unlock in the client application after receiving a positive response.
[**getActiveBattlePasses**](BattlePassesApi.md#getactivebattlepasses) | **GET** /api/v1/battle-passes/{appId}/active | Get battle passes
[**getAllBattlePassLevels**](BattlePassesApi.md#getallbattlepasslevels) | **GET** /api/v1/battle-pass-levels/{appId} | Get battle pass levels for an app (from all battle passes)
[**getBattlePass**](BattlePassesApi.md#getbattlepass) | **GET** /api/v1/battle-passes/{appId}/single/{battlePassId} | Get battle pass by id
[**getBattlePassLevels**](BattlePassesApi.md#getbattlepasslevels) | **GET** /api/v1/battle-pass-levels/{appId}/{battlePassId} | Get battle pass levels for a battle pass
[**getBattlePasses**](BattlePassesApi.md#getbattlepasses) | **GET** /api/v1/battle-passes/{appId} | Get battle passes
[**getUnlockedBattlePasses**](BattlePassesApi.md#getunlockedbattlepasses) | **GET** /api/v1/battle-passes/{appId}/unlocked | Get battle passes unlocked by the user
[**unlockBattlePass**](BattlePassesApi.md#unlockbattlepass) | **POST** /api/v1/battle-passes/{appId}/unlock/{battlePassId} | Unlock the battle pass for the user specified in the access token

# **activateBattlePassLevel**
> \SCILL\Model\ActionResponse activateBattlePassLevel($app_id, $level_id)

Activate a given battle pass level by id

Activate a given battle pass level by id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$level_id = "level_id_example"; // string | The id of the battle pass level.

try {
    $result = $apiInstance->activateBattlePassLevel($app_id, $level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->activateBattlePassLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **level_id** | **string**| The id of the battle pass level. |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **claimBattlePassLevelReward**
> \SCILL\Model\ActionResponse claimBattlePassLevelReward($app_id, $level_id)

Claim the battle pass level reward. This will trigger a Webhook that you can use to unlock the reward on server side. If you don't have a server you can also unlock in the client application after receiving a positive response.

Claim the battle pass level id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$level_id = "level_id_example"; // string | The id of the battle pass level.

try {
    $result = $apiInstance->claimBattlePassLevelReward($app_id, $level_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->claimBattlePassLevelReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **level_id** | **string**| The id of the battle pass level. |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getActiveBattlePasses**
> \SCILL\Model\BattlePass[] getActiveBattlePasses($app_id)

Get battle passes

Get active battle passes for the app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getActiveBattlePasses($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->getActiveBattlePasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\BattlePass[]**](../Model/BattlePass.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getAllBattlePassLevels**
> \SCILL\Model\BattlePassLevel[] getAllBattlePassLevels($app_id)

Get battle pass levels for an app (from all battle passes)

Get all battle pass levels for an app

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getAllBattlePassLevels($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->getAllBattlePassLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\BattlePassLevel[]**](../Model/BattlePassLevel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBattlePass**
> \SCILL\Model\BattlePass getBattlePass($app_id, $battle_pass_id)

Get battle pass by id

Get battle pass for the product with id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$battle_pass_id = "battle_pass_id_example"; // string | The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product).

try {
    $result = $apiInstance->getBattlePass($app_id, $battle_pass_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->getBattlePass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **battle_pass_id** | **string**| The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product). |

### Return type

[**\SCILL\Model\BattlePass**](../Model/BattlePass.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBattlePassLevels**
> \SCILL\Model\BattlePassLevel[] getBattlePassLevels($app_id, $battle_pass_id)

Get battle pass levels for a battle pass

Get battle pass levels for a battle pass

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$battle_pass_id = "battle_pass_id_example"; // string | The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product).

try {
    $result = $apiInstance->getBattlePassLevels($app_id, $battle_pass_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->getBattlePassLevels: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **battle_pass_id** | **string**| The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product). |

### Return type

[**\SCILL\Model\BattlePassLevel[]**](../Model/BattlePassLevel.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBattlePasses**
> \SCILL\Model\BattlePass[] getBattlePasses($app_id)

Get battle passes

Get battle passes for the product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getBattlePasses($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->getBattlePasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\BattlePass[]**](../Model/BattlePass.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUnlockedBattlePasses**
> \SCILL\Model\BattlePass[] getUnlockedBattlePasses($app_id)

Get battle passes unlocked by the user

Get unlocked battle passes for the user encoded in the access token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id

try {
    $result = $apiInstance->getUnlockedBattlePasses($app_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->getUnlockedBattlePasses: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |

### Return type

[**\SCILL\Model\BattlePass[]**](../Model/BattlePass.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unlockBattlePass**
> \SCILL\Model\BattlePassUnlockInfo unlockBattlePass($app_id, $battle_pass_id, $body)

Unlock the battle pass for the user specified in the access token

Unlock the battle pass for a user

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: BearerAuth
    $config = SCILL\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');

// Configure OAuth2 access token for authorization: oAuthNoScopes
$config = SCILL\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new SCILL\Api\BattlePassesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$app_id = "app_id_example"; // string | The app id
$battle_pass_id = "battle_pass_id_example"; // string | The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product).
$body = new \SCILL\Model\BattlePassUnlockPayload(); // \SCILL\Model\BattlePassUnlockPayload | Provide purchase info for the battle pass

try {
    $result = $apiInstance->unlockBattlePass($app_id, $battle_pass_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->unlockBattlePass: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **app_id** | **string**| The app id |
 **battle_pass_id** | **string**| The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product). |
 **body** | [**\SCILL\Model\BattlePassUnlockPayload**](../Model/BattlePassUnlockPayload.md)| Provide purchase info for the battle pass | [optional]

### Return type

[**\SCILL\Model\BattlePassUnlockInfo**](../Model/BattlePassUnlockInfo.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

