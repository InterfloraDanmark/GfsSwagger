# Swagger\Client\UnitApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**gCIsUnitInSpecialRole**](UnitApi.md#gCIsUnitInSpecialRole) | **GET** /v4/unit/inSpecialRole | Get all units supported by unit
[**unitGetAll**](UnitApi.md#unitGetAll) | **GET** /v4/unit | Get all units
[**unitGetById**](UnitApi.md#unitGetById) | **GET** /v4/unit/{unitID} | Get unit by ID
[**unitGetConnectedUnitsById**](UnitApi.md#unitGetConnectedUnitsById) | **GET** /v4/unit/ConnectedUnits/{unitID} | Get unit by ID
[**unitGetUnitDescriptionById**](UnitApi.md#unitGetUnitDescriptionById) | **GET** /v4/unit/description/{unitID} | Get unit by ID


# **gCIsUnitInSpecialRole**
> bool gCIsUnitInSpecialRole($unit_id, $special_role_name)

Get all units supported by unit

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unit_id = 56; // int | 
$special_role_name = "special_role_name_example"; // string | 

try {
    $result = $apiInstance->gCIsUnitInSpecialRole($unit_id, $special_role_name);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->gCIsUnitInSpecialRole: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **int**|  |
 **special_role_name** | **string**|  |

### Return type

**bool**

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitGetAll**
> \Swagger\Client\Model\ModelUnit[] unitGetAll($date_from)

Get all units

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$date_from = "date_from_example"; // string | The start date of a date period

try {
    $result = $apiInstance->unitGetAll($date_from);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitGetAll: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **date_from** | **string**| The start date of a date period | [optional]

### Return type

[**\Swagger\Client\Model\ModelUnit[]**](../Model/ModelUnit.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitGetById**
> \Swagger\Client\Model\ModelUnit unitGetById($unit_id)

Get unit by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unit_id = 56; // int | The unit's numeric ID

try {
    $result = $apiInstance->unitGetById($unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitGetById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **int**| The unit&#39;s numeric ID |

### Return type

[**\Swagger\Client\Model\ModelUnit**](../Model/ModelUnit.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitGetConnectedUnitsById**
> int[] unitGetConnectedUnitsById($unit_id)

Get unit by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unit_id = 56; // int | 

try {
    $result = $apiInstance->unitGetConnectedUnitsById($unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitGetConnectedUnitsById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **int**|  |

### Return type

**int[]**

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **unitGetUnitDescriptionById**
> \Swagger\Client\Model\ModelUnitDescriptionGFSgate unitGetUnitDescriptionById($unit_id)

Get unit by ID

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\UnitApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$unit_id = 56; // int | 

try {
    $result = $apiInstance->unitGetUnitDescriptionById($unit_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UnitApi->unitGetUnitDescriptionById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **unit_id** | **int**|  |

### Return type

[**\Swagger\Client\Model\ModelUnitDescriptionGFSgate**](../Model/ModelUnitDescriptionGFSgate.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

