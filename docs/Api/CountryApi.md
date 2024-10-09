# Swagger\Client\CountryApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countryGetAll**](CountryApi.md#countryGetAll) | **GET** /v4/country | Get all countries
[**countryGetById**](CountryApi.md#countryGetById) | **GET** /v4/country/{countryID} | Get country by ID
[**countryGetByUnit**](CountryApi.md#countryGetByUnit) | **GET** /v4/country/unit/{unitID} | Get countries of a unit
[**countryGetDisabled**](CountryApi.md#countryGetDisabled) | **GET** /v4/country/disabled | Get disabled countries
[**countryGetEnabled**](CountryApi.md#countryGetEnabled) | **GET** /v4/country/enabled | Get enabled countries


# **countryGetAll**
> \Swagger\Client\Model\ModelCountry[] countryGetAll($date_from)

Get all countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countryGetAll($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountry[]**](../Model/ModelCountry.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetById**
> \Swagger\Client\Model\ModelCountry countryGetById($country_id)

Get country by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_id = 56; // int | The country's numeric ID

try {
    $result = $apiInstance->countryGetById($country_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_id** | **int**| The country&#39;s numeric ID |

### Return type

[**\Swagger\Client\Model\ModelCountry**](../Model/ModelCountry.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetByUnit**
> \Swagger\Client\Model\ModelCountry[] countryGetByUnit($unit_id)

Get countries of a unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unit_id = 56; // int | The numeric ID of the unit

try {
    $result = $apiInstance->countryGetByUnit($unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetByUnit: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **int**| The numeric ID of the unit |

### Return type

[**\Swagger\Client\Model\ModelCountry[]**](../Model/ModelCountry.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetDisabled**
> \Swagger\Client\Model\ModelCountry countryGetDisabled($date_from)

Get disabled countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countryGetDisabled($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetDisabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountry**](../Model/ModelCountry.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryGetEnabled**
> \Swagger\Client\Model\ModelCountry countryGetEnabled($date_from)

Get enabled countries

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countryGetEnabled($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryApi->countryGetEnabled: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountry**](../Model/ModelCountry.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

