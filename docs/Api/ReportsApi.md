# Swagger\Client\ReportsApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**reportsUpdateInvoiceRedirections**](ReportsApi.md#reportsUpdateInvoiceRedirections) | **GET** /v4/reports/updateinvoiceredirections | Update table invoice redirections since comparedate


# **reportsUpdateInvoiceRedirections**
> string[] reportsUpdateInvoiceRedirections($compare_date)

Update table invoice redirections since comparedate

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\ReportsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$compare_date = "compare_date_example"; // string | 

try {
    $result = $apiInstance->reportsUpdateInvoiceRedirections($compare_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ReportsApi->reportsUpdateInvoiceRedirections: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **compare_date** | **string**|  |

### Return type

**string[]**

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

