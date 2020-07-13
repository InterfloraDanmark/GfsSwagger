# Swagger\Client\HolidayApi

All URIs are relative to *https://www.floristgate.com/swan*

Method | HTTP request | Description
------------- | ------------- | -------------
[**holidayDelete**](HolidayApi.md#holidayDelete) | **DELETE** /v1/holiday/{holidayID} | Delete holiday
[**holidayGetByCountry**](HolidayApi.md#holidayGetByCountry) | **GET** /v1/holiday/country/{countryCode} | Get holidays by country
[**holidayGetById**](HolidayApi.md#holidayGetById) | **GET** /v1/holiday/{id} | Get holiday by ID
[**holidaySave**](HolidayApi.md#holidaySave) | **POST** /v1/holiday | Save holiday


# **holidayDelete**
> holidayDelete($holiday_id)

Delete holiday

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday_id = 56; // int | The holiday id to be deleted.

try {
    $apiInstance->holidayDelete($holiday_id);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday_id** | **int**| The holiday id to be deleted. |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayGetByCountry**
> \Swagger\Client\Model\Holiday[] holidayGetByCountry($country_code)

Get holidays by country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2-letter country code.

try {
    $result = $apiInstance->holidayGetByCountry($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayGetByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2-letter country code. |

### Return type

[**\Swagger\Client\Model\Holiday[]**](../Model/Holiday.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidayGetById**
> \Swagger\Client\Model\Holiday holidayGetById($id)

Get holiday by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$id = 56; // int | The holiday id.

try {
    $result = $apiInstance->holidayGetById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidayGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| The holiday id. |

### Return type

[**\Swagger\Client\Model\Holiday**](../Model/Holiday.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **holidaySave**
> \Swagger\Client\Model\Holiday holidaySave($holiday)

Save holiday

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\HolidayApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$holiday = new \Swagger\Client\Model\Holiday(); // \Swagger\Client\Model\Holiday | The holiday object to be created or updated.

try {
    $result = $apiInstance->holidaySave($holiday);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling HolidayApi->holidaySave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **holiday** | [**\Swagger\Client\Model\Holiday**](../Model/Holiday.md)| The holiday object to be created or updated. |

### Return type

[**\Swagger\Client\Model\Holiday**](../Model/Holiday.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

