# Swagger\Client\ProductApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**productDelete**](ProductApi.md#productDelete) | **DELETE** /v4/product/{productID} | Delete product
[**productGetAll**](ProductApi.md#productGetAll) | **GET** /v4/product | Get all products
[**productGetByCountry**](ProductApi.md#productGetByCountry) | **GET** /v4/product/country/{countryCode} | Get products of a country
[**productGetById**](ProductApi.md#productGetById) | **GET** /v4/product/{productID} | Get product by ID
[**productGetCreatedProducts**](ProductApi.md#productGetCreatedProducts) | **GET** /v4/product/created | Get created products by date
[**productGetCreatedProductsByCountry**](ProductApi.md#productGetCreatedProductsByCountry) | **GET** /v4/product/created/country/{countrycode} | Get created products by date and country code
[**productGetDeletedProducts**](ProductApi.md#productGetDeletedProducts) | **GET** /v4/product/deleted | Get deleted products by date
[**productGetDeletedProductsByCountry**](ProductApi.md#productGetDeletedProductsByCountry) | **GET** /v4/product/deleted/country/{countrycode} | Get deleted products by date and country code
[**productGetUpdatedProducts**](ProductApi.md#productGetUpdatedProducts) | **GET** /v4/product/updated | Get updated products by date
[**productGetUpdatedProductsByCountry**](ProductApi.md#productGetUpdatedProductsByCountry) | **GET** /v4/product/updated/country/{countrycode} | Get updated products by date and country code
[**productGetWithAvailablePeriodsByCountry**](ProductApi.md#productGetWithAvailablePeriodsByCountry) | **GET** /v4/product/available/country/{countryCode}/{dateTo} | Get products with available periods of a country
[**productSave**](ProductApi.md#productSave) | **POST** /v4/product | Create or update product


# **productDelete**
> productDelete($product_id)

Delete product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The product's ID

try {
    $apiInstance->productDelete($product_id);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product&#39;s ID |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetAll**
> \Swagger\Client\Model\ModelProduct[] productGetAll($date_from)

Get all products

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->productGetAll($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetByCountry**
> \Swagger\Client\Model\ModelProduct[] productGetByCountry($country_code, $date_from)

Get products of a country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Two letter country code
$date_from = "date_from_example"; // string | Update date to search from

try {
    $result = $apiInstance->productGetByCountry($country_code, $date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Two letter country code |
 **date_from** | **string**| Update date to search from | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetById**
> \Swagger\Client\Model\ModelProduct productGetById($product_id)

Get product by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product_id = 56; // int | The product's numeric ID

try {
    $result = $apiInstance->productGetById($product_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product_id** | **int**| The product&#39;s numeric ID |

### Return type

[**\Swagger\Client\Model\ModelProduct**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetCreatedProducts**
> \Swagger\Client\Model\ModelProduct[] productGetCreatedProducts($datefrom, $dateto)

Get created products by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Start date of a date period
$dateto = "dateto_example"; // string | Last date of a date period

try {
    $result = $apiInstance->productGetCreatedProducts($datefrom, $dateto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetCreatedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datefrom** | **\DateTime**| Start date of a date period |
 **dateto** | **string**| Last date of a date period | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetCreatedProductsByCountry**
> \Swagger\Client\Model\ModelProduct[] productGetCreatedProductsByCountry($countrycode, $datefrom, $dateto)

Get created products by date and country code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countrycode = "countrycode_example"; // string | The country code
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of a date period
$dateto = "dateto_example"; // string | The last date of a date period

try {
    $result = $apiInstance->productGetCreatedProductsByCountry($countrycode, $datefrom, $dateto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetCreatedProductsByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countrycode** | **string**| The country code |
 **datefrom** | **\DateTime**| The start date of a date period |
 **dateto** | **string**| The last date of a date period | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetDeletedProducts**
> \Swagger\Client\Model\ModelProduct[] productGetDeletedProducts($datefrom, $dateto)

Get deleted products by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of a date period
$dateto = "dateto_example"; // string | The last date of a date period

try {
    $result = $apiInstance->productGetDeletedProducts($datefrom, $dateto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetDeletedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datefrom** | **\DateTime**| The start date of a date period |
 **dateto** | **string**| The last date of a date period | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetDeletedProductsByCountry**
> \Swagger\Client\Model\ModelProduct[] productGetDeletedProductsByCountry($countrycode, $datefrom, $dateto)

Get deleted products by date and country code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countrycode = "countrycode_example"; // string | The country code
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of a date period
$dateto = "dateto_example"; // string | The last date of a date period

try {
    $result = $apiInstance->productGetDeletedProductsByCountry($countrycode, $datefrom, $dateto);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetDeletedProductsByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countrycode** | **string**| The country code |
 **datefrom** | **\DateTime**| The start date of a date period |
 **dateto** | **string**| The last date of a date period | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetUpdatedProducts**
> \Swagger\Client\Model\ModelProduct[] productGetUpdatedProducts($datefrom, $dateto, $item)

Get updated products by date

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of a date period
$dateto = "dateto_example"; // string | The last date of a date period
$item = "item_example"; // string | The item to be fetched

try {
    $result = $apiInstance->productGetUpdatedProducts($datefrom, $dateto, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetUpdatedProducts: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **datefrom** | **\DateTime**| The start date of a date period |
 **dateto** | **string**| The last date of a date period | [optional]
 **item** | **string**| The item to be fetched | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetUpdatedProductsByCountry**
> \Swagger\Client\Model\ModelProduct[] productGetUpdatedProductsByCountry($countrycode, $datefrom, $dateto, $item)

Get updated products by date and country code

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$countrycode = "countrycode_example"; // string | The country code
$datefrom = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date of a date period
$dateto = "dateto_example"; // string | The last date of a date period
$item = "item_example"; // string | The item to be fetched

try {
    $result = $apiInstance->productGetUpdatedProductsByCountry($countrycode, $datefrom, $dateto, $item);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetUpdatedProductsByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **countrycode** | **string**| The country code |
 **datefrom** | **\DateTime**| The start date of a date period |
 **dateto** | **string**| The last date of a date period | [optional]
 **item** | **string**| The item to be fetched | [optional]

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productGetWithAvailablePeriodsByCountry**
> \Swagger\Client\Model\ModelProduct[] productGetWithAvailablePeriodsByCountry($country_code, $date_to)

Get products with available periods of a country

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$country_code = "country_code_example"; // string | Two letter country code
$date_to = "date_to_example"; // string | Update date to search to

try {
    $result = $apiInstance->productGetWithAvailablePeriodsByCountry($country_code, $date_to);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productGetWithAvailablePeriodsByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **country_code** | **string**| Two letter country code |
 **date_to** | **string**| Update date to search to |

### Return type

[**\Swagger\Client\Model\ModelProduct[]**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **productSave**
> \Swagger\Client\Model\ModelProduct productSave($product)

Create or update product

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ProductApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$product = new \Swagger\Client\Model\ModelProduct(); // \Swagger\Client\Model\ModelProduct | A new or existing product

try {
    $result = $apiInstance->productSave($product);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProductApi->productSave: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **product** | [**\Swagger\Client\Model\ModelProduct**](../Model/ModelProduct.md)| A new or existing product |

### Return type

[**\Swagger\Client\Model\ModelProduct**](../Model/ModelProduct.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

