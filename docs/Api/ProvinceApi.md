# Swagger\Client\ProvinceApi

All URIs are relative to *https://www.floristgate.com/swan*

Method | HTTP request | Description
------------- | ------------- | -------------
[**provinceDelete**](ProvinceApi.md#provinceDelete) | **DELETE** /v4/province/{provinceID} | Delete province
[**provinceGetByCountry**](ProvinceApi.md#provinceGetByCountry) | **GET** /v4/province/country/{countryCode} | Get provinces of a country
[**provinceGetById**](ProvinceApi.md#provinceGetById) | **GET** /v4/province/{provinceID} | Get province by ID
[**provinceSave**](ProvinceApi.md#provinceSave) | **POST** /v4/province | Create or update province


# **provinceDelete**
> provinceDelete($province_id)

Delete province

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProvinceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$province_id = 56; // int | The province's ID

try {
    $apiInstance->provinceDelete($province_id);
} catch (Exception $e) {
    echo 'Exception when calling ProvinceApi->provinceDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **province_id** | **int**| The province&#39;s ID |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provinceGetByCountry**
> \Swagger\Client\Model\Province[] provinceGetByCountry($country_code)

Get provinces of a country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProvinceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Two letter country code

try {
    $result = $apiInstance->provinceGetByCountry($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvinceApi->provinceGetByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Two letter country code |

### Return type

[**\Swagger\Client\Model\Province[]**](../Model/Province.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provinceGetById**
> \Swagger\Client\Model\Province provinceGetById($province_id)

Get province by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProvinceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$province_id = 56; // int | Province ID

try {
    $result = $apiInstance->provinceGetById($province_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvinceApi->provinceGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **province_id** | **int**| Province ID |

### Return type

[**\Swagger\Client\Model\Province**](../Model/Province.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **provinceSave**
> \Swagger\Client\Model\Province provinceSave($province)

Create or update province

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProvinceApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$province = new \Swagger\Client\Model\Province(); // \Swagger\Client\Model\Province | A new or existing province

try {
    $result = $apiInstance->provinceSave($province);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProvinceApi->provinceSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **province** | [**\Swagger\Client\Model\Province**](../Model/Province.md)| A new or existing province |

### Return type

[**\Swagger\Client\Model\Province**](../Model/Province.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

