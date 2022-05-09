# Swagger\Client\MediaApi

All URIs are relative to *https://www.floristgate.com/swan*

Method | HTTP request | Description
------------- | ------------- | -------------
[**mediaDelete**](MediaApi.md#mediaDelete) | **DELETE** /v3/media/{mediaID} | Delete one image
[**mediaGetById**](MediaApi.md#mediaGetById) | **GET** /v3/media/{mediaID} | Get media by ID
[**mediaUpload**](MediaApi.md#mediaUpload) | **POST** /v3/media | Upload one or more images


# **mediaDelete**
> mediaDelete($media_id)

Delete one image

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 56; // int | The media ID

try {
    $apiInstance->mediaDelete($media_id);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_id** | **int**| The media ID |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaGetById**
> \Swagger\Client\Model\Media mediaGetById($media_id)

Get media by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$media_id = 56; // int | The media ID

try {
    $result = $apiInstance->mediaGetById($media_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **media_id** | **int**| The media ID |

### Return type

[**\Swagger\Client\Model\Media**](../Model/Media.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **mediaUpload**
> \Swagger\Client\Model\Media[] mediaUpload($request)

Upload one or more images

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MediaApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$request = array('key' => "request_example"); // map[string,string] | A multipart HTTP request

try {
    $result = $apiInstance->mediaUpload($request);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MediaApi->mediaUpload: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **request** | [**map[string,string]**](../Model/string.md)| A multipart HTTP request |

### Return type

[**\Swagger\Client\Model\Media[]**](../Model/Media.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

