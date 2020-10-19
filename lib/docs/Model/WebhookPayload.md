# WebhookPayload

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**webhook_type** | **string** | The type of the webhook. Many different areas within SCILL GaaS trigger webhooks. Refer to the documentation for all available types. | 
**app_id** | **string** | The id of your app that is linked to this webhook. | 
**description** | **string** | A string used to store some information about the webhook. | [optional] 
**target_url** | **string** | The URL to the webservices called by SCILL backends. This must be world open, i.e. reachable from the internet. | 
**secret_key** | **string** | A secret that is sent with the webhook. Implement that secret on your side to make sure, that this is an authorized request. | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

