# Swagger\Client\CurrencyApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**currencyGetTranslatedCurrencies**](CurrencyApi.md#currencyGetTranslatedCurrencies) | **GET** /v4/currency/{country}/{language} | Get translated currencies and rates, according to client IP&#39;s country and receiving country


# **currencyGetTranslatedCurrencies**
> \Swagger\Client\Model\ModelCurrency[] currencyGetTranslatedCurrencies($country, $language, $date_from)

Get translated currencies and rates, according to client IP's country and receiving country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CurrencyApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country = "country_example"; // string | The receiving country (i.e. the country chosen by the user in OnlineIDD GUI).
$language = "language_example"; // string | The desired language of translated currency names. Falls back to english if translation not available.
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->currencyGetTranslatedCurrencies($country, $language, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CurrencyApi->currencyGetTranslatedCurrencies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country** | **string**| The receiving country (i.e. the country chosen by the user in OnlineIDD GUI). |
 **language** | **string**| The desired language of translated currency names. Falls back to english if translation not available. |
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCurrency[]**](../Model/ModelCurrency.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

