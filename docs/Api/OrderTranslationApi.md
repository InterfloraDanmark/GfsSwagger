# Swagger\Client\OrderTranslationApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**orderTranslationGetByOrderId**](OrderTranslationApi.md#orderTranslationGetByOrderId) | **GET** /v4/ordertranslation/{orderid} | Get Order Translation by OrderId
[**orderTranslationSave**](OrderTranslationApi.md#orderTranslationSave) | **POST** /v4/ordertranslation/postOrderTranslation | Post Order Translation
[**orderTranslationSave_0**](OrderTranslationApi.md#orderTranslationSave_0) | **POST** /v4/ordertranslation/postOrderTranslationRecipient | Post Order Translation Recipient


# **orderTranslationGetByOrderId**
> \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation orderTranslationGetByOrderId($orderid)

Get Order Translation by OrderId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$orderid = 56; // int | 

try {
    $result = $apiInstance->orderTranslationGetByOrderId($orderid);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTranslationApi->orderTranslationGetByOrderId: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **orderid** | **int**|  |

### Return type

[**\Swagger\Client\Model\APIEntitiesMessagesOrderTranslation**](../Model/APIEntitiesMessagesOrderTranslation.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderTranslationSave**
> \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation orderTranslationSave($order_translation)

Post Order Translation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_translation = new \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation(); // \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation | 

try {
    $result = $apiInstance->orderTranslationSave($order_translation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTranslationApi->orderTranslationSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_translation** | [**\Swagger\Client\Model\APIEntitiesMessagesOrderTranslation**](../Model/APIEntitiesMessagesOrderTranslation.md)|  |

### Return type

[**\Swagger\Client\Model\APIEntitiesMessagesOrderTranslation**](../Model/APIEntitiesMessagesOrderTranslation.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **orderTranslationSave_0**
> \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation orderTranslationSave_0($order_translation)

Post Order Translation Recipient

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\OrderTranslationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$order_translation = new \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation(); // \Swagger\Client\Model\APIEntitiesMessagesOrderTranslation | 

try {
    $result = $apiInstance->orderTranslationSave_0($order_translation);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling OrderTranslationApi->orderTranslationSave_0: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **order_translation** | [**\Swagger\Client\Model\APIEntitiesMessagesOrderTranslation**](../Model/APIEntitiesMessagesOrderTranslation.md)|  |

### Return type

[**\Swagger\Client\Model\APIEntitiesMessagesOrderTranslation**](../Model/APIEntitiesMessagesOrderTranslation.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

