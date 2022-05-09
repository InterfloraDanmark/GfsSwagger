# Swagger\Client\MessageApi

All URIs are relative to *https://www.floristgate.com/swan*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageConfirmMessages**](MessageApi.md#messageConfirmMessages) | **POST** /v3/message/confirm | Confirm messages
[**messageGetMessages**](MessageApi.md#messageGetMessages) | **POST** /v3/message/get | Retrieve messages
[**messageGetMessagesWithExtendedOrderItem**](MessageApi.md#messageGetMessagesWithExtendedOrderItem) | **POST** /v3/message/get/extendedOrderItem | Receive messages with extended order item. Responses containing messages of type &#39;OrderMessages&#39; include additional information about the ordered products.
[**messageSendBackchargeConfirmationMessage**](MessageApi.md#messageSendBackchargeConfirmationMessage) | **POST** /v3/message/send/confirmbackcharge | Send backcharge confirmation
[**messageSendBackchargeDeniedMessage**](MessageApi.md#messageSendBackchargeDeniedMessage) | **POST** /v3/message/send/denybackcharge | Send backcharge denial
[**messageSendBackchargeMessage**](MessageApi.md#messageSendBackchargeMessage) | **POST** /v3/message/send/backcharge | Send backcharge message
[**messageSendDeliveryConfirmedMessage**](MessageApi.md#messageSendDeliveryConfirmedMessage) | **POST** /v3/message/send/confirmdelivery | Send delivery confirmation
[**messageSendFloralChequeCanceledMessage**](MessageApi.md#messageSendFloralChequeCanceledMessage) | **POST** /v3/message/send/cancelfloralcheque | Send floral cheque cancel message
[**messageSendFloralChequeMessage**](MessageApi.md#messageSendFloralChequeMessage) | **POST** /v3/message/send/floralcheque | Send floral cheque message
[**messageSendGeneralMessage**](MessageApi.md#messageSendGeneralMessage) | **POST** /v3/message/send/general | Send general message
[**messageSendOrderCancelConfirmedMessage**](MessageApi.md#messageSendOrderCancelConfirmedMessage) | **POST** /v3/message/send/confirmcancelorder | Send order cancel confirmation message
[**messageSendOrderCancelDeniedMessage**](MessageApi.md#messageSendOrderCancelDeniedMessage) | **POST** /v3/message/send/denycancelorder | Send order cancel denial message
[**messageSendOrderCancelMessage**](MessageApi.md#messageSendOrderCancelMessage) | **POST** /v3/message/send/cancelorder | Send order cancellation message
[**messageSendOrderMessage**](MessageApi.md#messageSendOrderMessage) | **POST** /v3/message/send/order | Send order message
[**messageSendOrderRejectedMessage**](MessageApi.md#messageSendOrderRejectedMessage) | **POST** /v3/message/send/rejectorder | Send order rejected message
[**messageSendQueryMessage**](MessageApi.md#messageSendQueryMessage) | **POST** /v3/message/send/query | Send query message


# **messageConfirmMessages**
> messageConfirmMessages($to_unit_message_i_ds)

Confirm messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$to_unit_message_i_ds = array(new \Swagger\Client\Model\int[]()); // int[] | List of unit messages IDs to be confirmed

try {
    $apiInstance->messageConfirmMessages($to_unit_message_i_ds);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageConfirmMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_unit_message_i_ds** | **int[]**| List of unit messages IDs to be confirmed |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageGetMessages**
> \Swagger\Client\Model\MessageContainer messageGetMessages($filter)

Retrieve messages

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \Swagger\Client\Model\MessageFilter(); // \Swagger\Client\Model\MessageFilter | A MessageFilter object with filter criteria

try {
    $result = $apiInstance->messageGetMessages($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageGetMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**\Swagger\Client\Model\MessageFilter**](../Model/MessageFilter.md)| A MessageFilter object with filter criteria |

### Return type

[**\Swagger\Client\Model\MessageContainer**](../Model/MessageContainer.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageGetMessagesWithExtendedOrderItem**
> \Swagger\Client\Model\MessageContainerExtended messageGetMessagesWithExtendedOrderItem($filter)

Receive messages with extended order item. Responses containing messages of type 'OrderMessages' include additional information about the ordered products.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$filter = new \Swagger\Client\Model\MessageFilter(); // \Swagger\Client\Model\MessageFilter | A MessageFilter object with filter criteria

try {
    $result = $apiInstance->messageGetMessagesWithExtendedOrderItem($filter);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageGetMessagesWithExtendedOrderItem: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **filter** | [**\Swagger\Client\Model\MessageFilter**](../Model/MessageFilter.md)| A MessageFilter object with filter criteria |

### Return type

[**\Swagger\Client\Model\MessageContainerExtended**](../Model/MessageContainerExtended.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendBackchargeConfirmationMessage**
> \Swagger\Client\Model\BackchargeConfirmedMessage messageSendBackchargeConfirmationMessage($message)

Send backcharge confirmation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\BackchargeConfirmedMessage(); // \Swagger\Client\Model\BackchargeConfirmedMessage | New message

try {
    $result = $apiInstance->messageSendBackchargeConfirmationMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendBackchargeConfirmationMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\BackchargeConfirmedMessage**](../Model/BackchargeConfirmedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\BackchargeConfirmedMessage**](../Model/BackchargeConfirmedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendBackchargeDeniedMessage**
> \Swagger\Client\Model\BackchargeDeniedMessage messageSendBackchargeDeniedMessage($message)

Send backcharge denial

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\BackchargeDeniedMessage(); // \Swagger\Client\Model\BackchargeDeniedMessage | New message

try {
    $result = $apiInstance->messageSendBackchargeDeniedMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendBackchargeDeniedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\BackchargeDeniedMessage**](../Model/BackchargeDeniedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\BackchargeDeniedMessage**](../Model/BackchargeDeniedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendBackchargeMessage**
> \Swagger\Client\Model\BackchargeMessage messageSendBackchargeMessage($message)

Send backcharge message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\BackchargeMessage(); // \Swagger\Client\Model\BackchargeMessage | New message

try {
    $result = $apiInstance->messageSendBackchargeMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendBackchargeMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\BackchargeMessage**](../Model/BackchargeMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\BackchargeMessage**](../Model/BackchargeMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendDeliveryConfirmedMessage**
> \Swagger\Client\Model\DeliveryConfirmedMessage messageSendDeliveryConfirmedMessage($message)

Send delivery confirmation

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\DeliveryConfirmedMessage(); // \Swagger\Client\Model\DeliveryConfirmedMessage | New message

try {
    $result = $apiInstance->messageSendDeliveryConfirmedMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendDeliveryConfirmedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\DeliveryConfirmedMessage**](../Model/DeliveryConfirmedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\DeliveryConfirmedMessage**](../Model/DeliveryConfirmedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendFloralChequeCanceledMessage**
> \Swagger\Client\Model\FloralChequeCanceledMessage messageSendFloralChequeCanceledMessage($message)

Send floral cheque cancel message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\FloralChequeCanceledMessage(); // \Swagger\Client\Model\FloralChequeCanceledMessage | New message

try {
    $result = $apiInstance->messageSendFloralChequeCanceledMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendFloralChequeCanceledMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\FloralChequeCanceledMessage**](../Model/FloralChequeCanceledMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\FloralChequeCanceledMessage**](../Model/FloralChequeCanceledMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendFloralChequeMessage**
> \Swagger\Client\Model\FloralChequeMessage messageSendFloralChequeMessage($message)

Send floral cheque message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\FloralChequeMessage(); // \Swagger\Client\Model\FloralChequeMessage | New message

try {
    $result = $apiInstance->messageSendFloralChequeMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendFloralChequeMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\FloralChequeMessage**](../Model/FloralChequeMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\FloralChequeMessage**](../Model/FloralChequeMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendGeneralMessage**
> \Swagger\Client\Model\GeneralMessage messageSendGeneralMessage($message)

Send general message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\GeneralMessage(); // \Swagger\Client\Model\GeneralMessage | New message

try {
    $result = $apiInstance->messageSendGeneralMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendGeneralMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\GeneralMessage**](../Model/GeneralMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\GeneralMessage**](../Model/GeneralMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelConfirmedMessage**
> \Swagger\Client\Model\OrderCancellationConfirmedMessage messageSendOrderCancelConfirmedMessage($message)

Send order cancel confirmation message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\OrderCancellationConfirmedMessage(); // \Swagger\Client\Model\OrderCancellationConfirmedMessage | New message

try {
    $result = $apiInstance->messageSendOrderCancelConfirmedMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendOrderCancelConfirmedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\OrderCancellationConfirmedMessage**](../Model/OrderCancellationConfirmedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\OrderCancellationConfirmedMessage**](../Model/OrderCancellationConfirmedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelDeniedMessage**
> \Swagger\Client\Model\OrderCancellationDeniedMessage messageSendOrderCancelDeniedMessage($message)

Send order cancel denial message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\OrderCancellationDeniedMessage(); // \Swagger\Client\Model\OrderCancellationDeniedMessage | New message

try {
    $result = $apiInstance->messageSendOrderCancelDeniedMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendOrderCancelDeniedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\OrderCancellationDeniedMessage**](../Model/OrderCancellationDeniedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\OrderCancellationDeniedMessage**](../Model/OrderCancellationDeniedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelMessage**
> \Swagger\Client\Model\OrderCancellationMessage messageSendOrderCancelMessage($message)

Send order cancellation message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\OrderCancellationMessage(); // \Swagger\Client\Model\OrderCancellationMessage | New message

try {
    $result = $apiInstance->messageSendOrderCancelMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendOrderCancelMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\OrderCancellationMessage**](../Model/OrderCancellationMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\OrderCancellationMessage**](../Model/OrderCancellationMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderMessage**
> \Swagger\Client\Model\OrderMessage messageSendOrderMessage($message)

Send order message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\OrderMessage(); // \Swagger\Client\Model\OrderMessage | New message

try {
    $result = $apiInstance->messageSendOrderMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendOrderMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\OrderMessage**](../Model/OrderMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\OrderMessage**](../Model/OrderMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderRejectedMessage**
> \Swagger\Client\Model\OrderRejectedMessage messageSendOrderRejectedMessage($message)

Send order rejected message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\OrderRejectedMessage(); // \Swagger\Client\Model\OrderRejectedMessage | New message

try {
    $result = $apiInstance->messageSendOrderRejectedMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendOrderRejectedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\OrderRejectedMessage**](../Model/OrderRejectedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\OrderRejectedMessage**](../Model/OrderRejectedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendQueryMessage**
> \Swagger\Client\Model\QueryMessage messageSendQueryMessage($message)

Send query message

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

// Configure OAuth2 access token for authorization: adminAuthorization
$config = Swagger\Client\Configuration::getDefaultConfiguration()->setAccessToken('YOUR_ACCESS_TOKEN');

$apiInstance = new Swagger\Client\Api\MessageApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$message = new \Swagger\Client\Model\QueryMessage(); // \Swagger\Client\Model\QueryMessage | New message

try {
    $result = $apiInstance->messageSendQueryMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendQueryMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\QueryMessage**](../Model/QueryMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\QueryMessage**](../Model/QueryMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

