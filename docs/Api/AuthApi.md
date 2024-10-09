# Swagger\Client\AuthApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**tokenPost**](AuthApi.md#tokenPost) | **POST** /token | 


# **tokenPost**
> tokenPost($grant_type, $username, $password)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\AuthApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$grant_type = "grant_type_example"; // string | 
$username = "username_example"; // string | 
$password = "password_example"; // string | 

try {
    $apiInstance->tokenPost($grant_type, $username, $password);
} catch (Exception $e) {
    echo 'Exception when calling AuthApi->tokenPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **grant_type** | **string**|  |
 **username** | **string**|  | [optional]
 **password** | **string**|  | [optional]

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/x-www-form-urlencoded
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

