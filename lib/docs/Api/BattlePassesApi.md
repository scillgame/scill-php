# SCILL\BattlePassesApi

All URIs are relative to *https://virtserver.swaggerhub.com/4Players-GmbH/scill-gaas/1.0.0*

Method | HTTP request | Description
------------- | ------------- | -------------
[**claimBattlePassLevelReward**](BattlePassesApi.md#claimbattlepasslevelreward) | **POST** /api/v1/battle-passes/{appId}/{bpid}/claim-level | Claim the reward of a finished personal challenge
[**getBattlePass**](BattlePassesApi.md#getbattlepass) | **GET** /api/v1/battle-passes/{appId}/{bpid} | Get battle passe by id
[**getBattlePasses**](BattlePassesApi.md#getbattlepasses) | **GET** /api/v1/battle-passes/{appId} | Get battle passes
[**unlockBattlePassLevel**](BattlePassesApi.md#unlockbattlepasslevel) | **POST** /api/v1/battle-passes/{appId}/{bpid}/unlock | Unlock the level of a battle pass

# **claimBattlePassLevelReward**
> \SCILL\Model\ActionResponse claimBattlePassLevelReward($body, $app_id, $bpid)

Claim the reward of a finished personal challenge

Claim the reward of a battle pass level

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
$body = new \SCILL\Model\BattlePassLevelId(); // \SCILL\Model\BattlePassLevelId | Provide the battle pass level id in this payload.
$app_id = "app_id_example"; // string | The app id
$bpid = "bpid_example"; // string | The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product).

try {
    $result = $apiInstance->claimBattlePassLevelReward($body, $app_id, $bpid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->claimBattlePassLevelReward: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\BattlePassLevelId**](../Model/BattlePassLevelId.md)| Provide the battle pass level id in this payload. |
 **app_id** | **string**| The app id |
 **bpid** | **string**| The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product). |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getBattlePass**
> \SCILL\Model\BattlePass getBattlePass($app_id, $bpid)

Get battle passe by id

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
$bpid = "bpid_example"; // string | The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product).

try {
    $result = $apiInstance->getBattlePass($app_id, $bpid);
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
 **bpid** | **string**| The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product). |

### Return type

[**\SCILL\Model\BattlePass**](../Model/BattlePass.md)

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

# **unlockBattlePassLevel**
> \SCILL\Model\ActionResponse unlockBattlePassLevel($body, $app_id, $bpid)

Unlock the level of a battle pass

Unlock a battle pass level

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
$body = new \SCILL\Model\BattlePassLevelId(); // \SCILL\Model\BattlePassLevelId | Provide the battle pass level id in this payload
$app_id = "app_id_example"; // string | The app id
$bpid = "bpid_example"; // string | The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product).

try {
    $result = $apiInstance->unlockBattlePassLevel($body, $app_id, $bpid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling BattlePassesApi->unlockBattlePassLevel: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\SCILL\Model\BattlePassLevelId**](../Model/BattlePassLevelId.md)| Provide the battle pass level id in this payload |
 **app_id** | **string**| The app id |
 **bpid** | **string**| The id of the battle pass. It’s the same as in battle_pass_id you received in earlier requests (i.e. getting all active battle passes for a product). |

### Return type

[**\SCILL\Model\ActionResponse**](../Model/ActionResponse.md)

### Authorization

[BearerAuth](../../README.md#BearerAuth), [oAuthNoScopes](../../README.md#oAuthNoScopes)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

