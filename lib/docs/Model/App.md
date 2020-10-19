# App

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**app_id** | **int** | The id of the app | 
**app_name** | **string** | The name of your app | 
**app_tag** | **string** | A unique identifier for your game with only alphanumeric characters, dash and underscore | 
**app_active** | **bool** | Indicates if this app is active. Use the DELETE route to deactivate an app | [optional] 
**app_image** | **string** | A string identifying the apps logo image in your own application. Can also be a URL. | 
**app_image_hd** | **string** | A string identifying the apps logo image in high quality in your own application. Can also be a URL. | 
**has_battle_passes** | **bool** | Indicates if this app has activated the battle pass system | [optional] 
**has_battle_challenges** | **bool** | Indicates if this app has activated the challenges system | [optional] 
**request_count** | **int** | Number of requests sent in the current month | [optional] 
**rate_limit** | **int** | The number of requests allowed per month | [optional] 
**event_limit** | **int** | The number of events allowed per month | [optional] 
**fusion_id** | **int** | The 4Players User Id | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

