# Swagger\Client\RegionApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**regionDelete**](RegionApi.md#regionDelete) | **DELETE** /v4/region/{regionID} | Delete region
[**regionGetAll**](RegionApi.md#regionGetAll) | **GET** /v4/region | Get all regions
[**regionGetByCountry**](RegionApi.md#regionGetByCountry) | **GET** /v4/region/country/{countryCode} | Get regions of a country
[**regionGetById**](RegionApi.md#regionGetById) | **GET** /v4/region/{regionID} | Get region by ID
[**regionSave**](RegionApi.md#regionSave) | **POST** /v4/region | Create or update region


# **regionDelete**
> regionDelete($region_id)

Delete region

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | The region's ID

try {
    $apiInstance->regionDelete($region_id);
} catch (Exception $e) {
    echo 'Exception when calling RegionApi->regionDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region_id** | **int**| The region&#39;s ID |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionGetAll**
> \Swagger\Client\Model\ModelRegion[] regionGetAll($date_from)

Get all regions

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | 

try {
    $result = $apiInstance->regionGetAll($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionApi->regionGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ModelRegion[]**](../Model/ModelRegion.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionGetByCountry**
> \Swagger\Client\Model\ModelRegion[] regionGetByCountry($country_code, $date_from)

Get regions of a country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Two letter country code
$date_from = "date_from_example"; // string | 

try {
    $result = $apiInstance->regionGetByCountry($country_code, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionApi->regionGetByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Two letter country code |
 **date_from** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ModelRegion[]**](../Model/ModelRegion.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionGetById**
> \Swagger\Client\Model\ModelRegion regionGetById($region_id)

Get region by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region_id = 56; // int | Region ID

try {
    $result = $apiInstance->regionGetById($region_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionApi->regionGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region_id** | **int**| Region ID |

### Return type

[**\Swagger\Client\Model\ModelRegion**](../Model/ModelRegion.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **regionSave**
> \Swagger\Client\Model\ModelProvince regionSave($region)

Create or update region

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\RegionApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$region = new \Swagger\Client\Model\ModelRegion(); // \Swagger\Client\Model\ModelRegion | A new or existing region

try {
    $result = $apiInstance->regionSave($region);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling RegionApi->regionSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **region** | [**\Swagger\Client\Model\ModelRegion**](../Model/ModelRegion.md)| A new or existing region |

### Return type

[**\Swagger\Client\Model\ModelProvince**](../Model/ModelProvince.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

