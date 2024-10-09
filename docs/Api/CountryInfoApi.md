# Swagger\Client\CountryInfoApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**countryInfoGetCountryInfoTexts**](CountryInfoApi.md#countryInfoGetCountryInfoTexts) | **GET** /v4/countryinfo/country/{countryCode} | Get translated country info texts for one country.
[**countryInfoGetTranslatedCountryInfoTextsByType**](CountryInfoApi.md#countryInfoGetTranslatedCountryInfoTextsByType) | **GET** /v4/countryinfo/country/{countryCode}/type/{type} | Get the translated country info text for one country of requested info text type.
[**countryInfoReplaceCountryInfoTexts**](CountryInfoApi.md#countryInfoReplaceCountryInfoTexts) | **POST** /v4/countryinfo/country/{countryCode} | Replace  country info texts (title, ordering, deleted, text).
[**countryInfoSaveCountryInfoText**](CountryInfoApi.md#countryInfoSaveCountryInfoText) | **POST** /v4/countryinfo | Update or save a single country info text by country and type (only text), leaving other types of same country untouched.


# **countryInfoGetCountryInfoTexts**
> \Swagger\Client\Model\ModelCountryMemberInfoText[] countryInfoGetCountryInfoTexts($country_code, $date_from)

Get translated country info texts for one country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI).
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countryInfoGetCountryInfoTexts($country_code, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoApi->countryInfoGetCountryInfoTexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI). |
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountryMemberInfoText[]**](../Model/ModelCountryMemberInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryInfoGetTranslatedCountryInfoTextsByType**
> \Swagger\Client\Model\ModelCountryMemberInfoText countryInfoGetTranslatedCountryInfoTextsByType($country_code, $type, $date_from)

Get the translated country info text for one country of requested info text type.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI).
$type = 56; // int | The country info text type ID.
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->countryInfoGetTranslatedCountryInfoTextsByType($country_code, $type, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoApi->countryInfoGetTranslatedCountryInfoTextsByType: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The 2-digit country code (i.e. the country chosen by the user in OnlineIDD GUI). |
 **type** | **int**| The country info text type ID. |
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelCountryMemberInfoText**](../Model/ModelCountryMemberInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryInfoReplaceCountryInfoTexts**
> \Swagger\Client\Model\ModelCountryMemberInfoText[] countryInfoReplaceCountryInfoTexts($country_code, $info_texts)

Replace  country info texts (title, ordering, deleted, text).

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | The country code of the country of which the info texts are going to be replaced.
$info_texts = array(new \Swagger\Client\Model\ModelCountryMemberInfoText()); // \Swagger\Client\Model\ModelCountryMemberInfoText[] | A list of translated country info texts. An empty list will cause all info texts of that country to be deleted.

try {
    $result = $apiInstance->countryInfoReplaceCountryInfoTexts($country_code, $info_texts);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoApi->countryInfoReplaceCountryInfoTexts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| The country code of the country of which the info texts are going to be replaced. |
 **info_texts** | [**\Swagger\Client\Model\ModelCountryMemberInfoText[]**](../Model/ModelCountryMemberInfoText.md)| A list of translated country info texts. An empty list will cause all info texts of that country to be deleted. |

### Return type

[**\Swagger\Client\Model\ModelCountryMemberInfoText[]**](../Model/ModelCountryMemberInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **countryInfoSaveCountryInfoText**
> \Swagger\Client\Model\ModelCountryInfoText countryInfoSaveCountryInfoText($info_text)

Update or save a single country info text by country and type (only text), leaving other types of same country untouched.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\CountryInfoApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$info_text = new \Swagger\Client\Model\ModelCountryInfoText(); // \Swagger\Client\Model\ModelCountryInfoText | A translated country info text.

try {
    $result = $apiInstance->countryInfoSaveCountryInfoText($info_text);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CountryInfoApi->countryInfoSaveCountryInfoText: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **info_text** | [**\Swagger\Client\Model\ModelCountryInfoText**](../Model/ModelCountryInfoText.md)| A translated country info text. |

### Return type

[**\Swagger\Client\Model\ModelCountryInfoText**](../Model/ModelCountryInfoText.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

