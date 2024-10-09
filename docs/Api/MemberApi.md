# Swagger\Client\MemberApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**memberDelete**](MemberApi.md#memberDelete) | **DELETE** /v4/member/{memberID} | Delete member
[**memberGetByCountry**](MemberApi.md#memberGetByCountry) | **GET** /v4/member/country/{countryCode} | Get all members of a country
[**memberGetById**](MemberApi.md#memberGetById) | **GET** /v4/member/{memberID} | Get member by ID
[**memberSave**](MemberApi.md#memberSave) | **POST** /v4/member | Create or update member


# **memberDelete**
> memberDelete($member_id)

Delete member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 56; // int | The member's ID

try {
    $apiInstance->memberDelete($member_id);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **int**| The member&#39;s ID |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberGetByCountry**
> \Swagger\Client\Model\ModelMember[] memberGetByCountry($country_code, $date_from)

Get all members of a country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Two-letter country code
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->memberGetByCountry($country_code, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberGetByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Two-letter country code |
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelMember[]**](../Model/ModelMember.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberGetById**
> \Swagger\Client\Model\ModelMember memberGetById($member_id)

Get member by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member_id = 56; // int | The member's ID

try {
    $result = $apiInstance->memberGetById($member_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member_id** | **int**| The member&#39;s ID |

### Return type

[**\Swagger\Client\Model\ModelMember**](../Model/ModelMember.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **memberSave**
> \Swagger\Client\Model\ModelMember memberSave($member)

Create or update member

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MemberApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$member = new \Swagger\Client\Model\ModelMember(); // \Swagger\Client\Model\ModelMember | A new or existing member

try {
    $result = $apiInstance->memberSave($member);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MemberApi->memberSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **member** | [**\Swagger\Client\Model\ModelMember**](../Model/ModelMember.md)| A new or existing member |

### Return type

[**\Swagger\Client\Model\ModelMember**](../Model/ModelMember.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

