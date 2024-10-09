# Swagger\Client\CountrySpecialDateApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countrySpecialDateGetAll**](CountrySpecialDateApi.md#countrySpecialDateGetAll) | **GET** /v4/countryspecialdate | Get All Countries Special Dates
[**countrySpecialDateGetByCountry**](CountrySpecialDateApi.md#countrySpecialDateGetByCountry) | **GET** /v4/countryspecialdate/country/{countryCode} | Get Country Special Dates by Country


# **countrySpecialDateGetAll**
> \Swagger\Client\Model\ModelCountrySpecialDate[] countrySpecialDateGetAll($date_from)

Get All Countries Special Dates

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountrySpecialDateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countrySpecialDateGetAll($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountrySpecialDateApi->countrySpecialDateGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountrySpecialDate[]**](../Model/ModelCountrySpecialDate.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countrySpecialDateGetByCountry**
> \Swagger\Client\Model\ModelCountrySpecialDate[] countrySpecialDateGetByCountry($country_code, $date_from)

Get Country Special Dates by Country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountrySpecialDateApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2-letter country code.
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countrySpecialDateGetByCountry($country_code, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountrySpecialDateApi->countrySpecialDateGetByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2-letter country code. |
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountrySpecialDate[]**](../Model/ModelCountrySpecialDate.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

