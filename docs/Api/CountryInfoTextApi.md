# Swagger\Client\CountryInfoTextApi

All URIs are relative to *https://www.floristgate.com/swan*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countryInfoTextGetTranslatedCountryInfoTexts**](CountryInfoTextApi.md#countryInfoTextGetTranslatedCountryInfoTexts) | **GET** /v3/countryinfo/country/{countryCode} | Get translated country info texts for one country.
[**countryInfoTextGetTranslatedCountryInfoTextsByType**](CountryInfoTextApi.md#countryInfoTextGetTranslatedCountryInfoTextsByType) | **GET** /v3/countryinfo/country/{countryCode}/type/{type} | Get the translated country info text for one country of requested info text type.
[**countryInfoTextReplaceCountryInfoTexts**](CountryInfoTextApi.md#countryInfoTextReplaceCountryInfoTexts) | **POST** /v3/countryinfo/country/{countryCode} | Replace translated country info texts.
[**countryInfoTextSaveCountryInfoText**](CountryInfoTextApi.md#countryInfoTextSaveCountryInfoText) | **POST** /v3/countryinfo | Update or save a single translated country info text by country and type, leaving other types of same country untouched.


# **countryInfoTextGetTranslatedCountryInfoTexts**
> \Swagger\Client\Model\CountryInfoText[] countryInfoTextGetTranslatedCountryInfoTexts($country_code)

Get translated country info texts for one country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI).

try {
    $result = $apiInstance->countryInfoTextGetTranslatedCountryInfoTexts($country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoTextApi->countryInfoTextGetTranslatedCountryInfoTexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI). |

### Return type

[**\Swagger\Client\Model\CountryInfoText[]**](../Model/CountryInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryInfoTextGetTranslatedCountryInfoTextsByType**
> \Swagger\Client\Model\CountryInfoText countryInfoTextGetTranslatedCountryInfoTextsByType($country_code, $type)

Get the translated country info text for one country of requested info text type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI).
$type = 56; // int | The country info text type ID.

try {
    $result = $apiInstance->countryInfoTextGetTranslatedCountryInfoTextsByType($country_code, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoTextApi->countryInfoTextGetTranslatedCountryInfoTextsByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI). |
 **type** | **int**| The country info text type ID. |

### Return type

[**\Swagger\Client\Model\CountryInfoText**](../Model/CountryInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryInfoTextReplaceCountryInfoTexts**
> \Swagger\Client\Model\CountryInfoText[] countryInfoTextReplaceCountryInfoTexts($country_code, $info_texts)

Replace translated country info texts.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The country code of the country of which the info texts are going to be replaced.
$info_texts = array(new \Swagger\Client\Model\CountryInfoText()); // \Swagger\Client\Model\CountryInfoText[] | A list of translated country info texts. An empty list will cause all info texts of that country to be deleted.

try {
    $result = $apiInstance->countryInfoTextReplaceCountryInfoTexts($country_code, $info_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoTextApi->countryInfoTextReplaceCountryInfoTexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code of the country of which the info texts are going to be replaced. |
 **info_texts** | [**\Swagger\Client\Model\CountryInfoText[]**](../Model/CountryInfoText.md)| A list of translated country info texts. An empty list will cause all info texts of that country to be deleted. |

### Return type

[**\Swagger\Client\Model\CountryInfoText[]**](../Model/CountryInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryInfoTextSaveCountryInfoText**
> \Swagger\Client\Model\CountryInfoText countryInfoTextSaveCountryInfoText($info_text)

Update or save a single translated country info text by country and type, leaving other types of same country untouched.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoTextApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$info_text = new \Swagger\Client\Model\CountryInfoText(); // \Swagger\Client\Model\CountryInfoText | A translated country info text.

try {
    $result = $apiInstance->countryInfoTextSaveCountryInfoText($info_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoTextApi->countryInfoTextSaveCountryInfoText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **info_text** | [**\Swagger\Client\Model\CountryInfoText**](../Model/CountryInfoText.md)| A translated country info text. |

### Return type

[**\Swagger\Client\Model\CountryInfoText**](../Model/CountryInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

