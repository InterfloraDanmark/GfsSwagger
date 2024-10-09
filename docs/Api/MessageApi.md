# Swagger\Client\MessageApi

All URIs are relative to *https://gfs-app-swanapi-test-we-003.azurewebsites.net/swan_api*

Method | HTTP request | Description
------------- | ------------- | -------------
[**messageConfirmMessages**](MessageApi.md#messageConfirmMessages) | **POST** /v4/message/confirm | Confirm messages
[**messageConfirmOrderMessage**](MessageApi.md#messageConfirmOrderMessage) | **POST** /v4/message/confirmorder | Confirm Order message
[**messageGetMessages**](MessageApi.md#messageGetMessages) | **POST** /v4/message/get | Retrieve messages
[**messageGetMessagesWithExtendedOrderItem**](MessageApi.md#messageGetMessagesWithExtendedOrderItem) | **POST** /v4/message/get/extendedOrderItem | Receive messages with extended order item. Responses containing messages of type &#39;OrderMessages&#39; include additional information about the ordered products.
[**messageSendBackchargeConfirmationMessage**](MessageApi.md#messageSendBackchargeConfirmationMessage) | **POST** /v4/message/send/confirmbackcharge | Send backcharge confirmation
[**messageSendBackchargeDeniedMessage**](MessageApi.md#messageSendBackchargeDeniedMessage) | **POST** /v4/message/send/denybackcharge | Send backcharge denial
[**messageSendBackchargeMessage**](MessageApi.md#messageSendBackchargeMessage) | **POST** /v4/message/send/backcharge | Send backcharge message
[**messageSendDeliveryConfirmedMessage**](MessageApi.md#messageSendDeliveryConfirmedMessage) | **POST** /v4/message/send/confirmdelivery | Send delivery confirmation
[**messageSendFloristAssignedMessage**](MessageApi.md#messageSendFloristAssignedMessage) | **POST** /v4/message/send/floristassigned | Send Florist assignment
[**messageSendGeneralMessage**](MessageApi.md#messageSendGeneralMessage) | **POST** /v4/message/send/general | Send general message
[**messageSendOrderCancelConfirmedMessage**](MessageApi.md#messageSendOrderCancelConfirmedMessage) | **POST** /v4/message/send/confirmcancelorder | Send order cancel confirmation message
[**messageSendOrderCancelDeniedMessage**](MessageApi.md#messageSendOrderCancelDeniedMessage) | **POST** /v4/message/send/denycancelorder | Send order cancel denial message
[**messageSendOrderCancelMessage**](MessageApi.md#messageSendOrderCancelMessage) | **POST** /v4/message/send/cancelorder | Send order cancellation message
[**messageSendOrderCancelMessageWithBackcharge**](MessageApi.md#messageSendOrderCancelMessageWithBackcharge) | **POST** /v4/message/send/cancelorderbackcharge | Send order cancellation message With Backcharge
[**messageSendOrderMessage**](MessageApi.md#messageSendOrderMessage) | **POST** /v4/message/send/order | Send order message
[**messageSendOrderRejectedMessage**](MessageApi.md#messageSendOrderRejectedMessage) | **POST** /v4/message/send/rejectorder | Send order rejected message
[**messageSendQueryMessage**](MessageApi.md#messageSendQueryMessage) | **POST** /v4/message/send/query | Send query message


# **messageConfirmMessages**
> messageConfirmMessages($to_unit_message_ids)

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
$to_unit_message_ids = array(new \Swagger\Client\Model\int[]()); // int[] | List of unit messages IDs to be confirmed

try {
    $apiInstance->messageConfirmMessages($to_unit_message_ids);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageConfirmMessages: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_unit_message_ids** | **int[]**| List of unit messages IDs to be confirmed |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageConfirmOrderMessage**
> messageConfirmOrderMessage($to_unit_message_id, $executing_unit_order_number)

Confirm Order message

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
$to_unit_message_id = 56; // int | Message IDs to be confirmed
$executing_unit_order_number = "executing_unit_order_number_example"; // string | 

try {
    $apiInstance->messageConfirmOrderMessage($to_unit_message_id, $executing_unit_order_number);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageConfirmOrderMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **to_unit_message_id** | **int**| Message IDs to be confirmed |
 **executing_unit_order_number** | **string**|  |

### Return type

void (empty response body)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageGetMessages**
> \Swagger\Client\Model\ModelMessagesMessageContainer messageGetMessages($filter)

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
$filter = new \Swagger\Client\Model\ModelMessagesMessageFilter(); // \Swagger\Client\Model\ModelMessagesMessageFilter | A MessageFilter object with filter criteria

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
 **filter** | [**\Swagger\Client\Model\ModelMessagesMessageFilter**](../Model/ModelMessagesMessageFilter.md)| A MessageFilter object with filter criteria |

### Return type

[**\Swagger\Client\Model\ModelMessagesMessageContainer**](../Model/ModelMessagesMessageContainer.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageGetMessagesWithExtendedOrderItem**
> \Swagger\Client\Model\ModelMessagesMessageContainerExtended messageGetMessagesWithExtendedOrderItem($filter)

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
$filter = new \Swagger\Client\Model\ModelMessagesMessageFilter(); // \Swagger\Client\Model\ModelMessagesMessageFilter | A MessageFilter object with filter criteria

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
 **filter** | [**\Swagger\Client\Model\ModelMessagesMessageFilter**](../Model/ModelMessagesMessageFilter.md)| A MessageFilter object with filter criteria |

### Return type

[**\Swagger\Client\Model\ModelMessagesMessageContainerExtended**](../Model/ModelMessagesMessageContainerExtended.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendBackchargeConfirmationMessage**
> \Swagger\Client\Model\ModelMessagesBackchargeConfirmedMessage messageSendBackchargeConfirmationMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesBackchargeConfirmedMessage(); // \Swagger\Client\Model\ModelMessagesBackchargeConfirmedMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesBackchargeConfirmedMessage**](../Model/ModelMessagesBackchargeConfirmedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesBackchargeConfirmedMessage**](../Model/ModelMessagesBackchargeConfirmedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendBackchargeDeniedMessage**
> \Swagger\Client\Model\ModelMessagesBackchargeDeniedMessage messageSendBackchargeDeniedMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesBackchargeDeniedMessage(); // \Swagger\Client\Model\ModelMessagesBackchargeDeniedMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesBackchargeDeniedMessage**](../Model/ModelMessagesBackchargeDeniedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesBackchargeDeniedMessage**](../Model/ModelMessagesBackchargeDeniedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendBackchargeMessage**
> \Swagger\Client\Model\ModelMessagesBackchargeMessage messageSendBackchargeMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesBackchargeMessage(); // \Swagger\Client\Model\ModelMessagesBackchargeMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesBackchargeMessage**](../Model/ModelMessagesBackchargeMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesBackchargeMessage**](../Model/ModelMessagesBackchargeMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendDeliveryConfirmedMessage**
> \Swagger\Client\Model\ModelMessagesDeliveryConfirmedMessage messageSendDeliveryConfirmedMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesDeliveryConfirmedMessage(); // \Swagger\Client\Model\ModelMessagesDeliveryConfirmedMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesDeliveryConfirmedMessage**](../Model/ModelMessagesDeliveryConfirmedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesDeliveryConfirmedMessage**](../Model/ModelMessagesDeliveryConfirmedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendFloristAssignedMessage**
> \Swagger\Client\Model\ModelMessagesFloristAssignedMessage messageSendFloristAssignedMessage($message)

Send Florist assignment

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
$message = new \Swagger\Client\Model\ModelMessagesFloristAssignedMessage(); // \Swagger\Client\Model\ModelMessagesFloristAssignedMessage | New message

try {
    $result = $apiInstance->messageSendFloristAssignedMessage($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendFloristAssignedMessage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\ModelMessagesFloristAssignedMessage**](../Model/ModelMessagesFloristAssignedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesFloristAssignedMessage**](../Model/ModelMessagesFloristAssignedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendGeneralMessage**
> \Swagger\Client\Model\ModelMessagesGeneralMessage messageSendGeneralMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesGeneralMessage(); // \Swagger\Client\Model\ModelMessagesGeneralMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesGeneralMessage**](../Model/ModelMessagesGeneralMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesGeneralMessage**](../Model/ModelMessagesGeneralMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelConfirmedMessage**
> \Swagger\Client\Model\ModelMessagesOrderCancellationConfirmedMessage messageSendOrderCancelConfirmedMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesOrderCancellationConfirmedMessage(); // \Swagger\Client\Model\ModelMessagesOrderCancellationConfirmedMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesOrderCancellationConfirmedMessage**](../Model/ModelMessagesOrderCancellationConfirmedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesOrderCancellationConfirmedMessage**](../Model/ModelMessagesOrderCancellationConfirmedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelDeniedMessage**
> \Swagger\Client\Model\ModelMessagesOrderCancellationDeniedMessage messageSendOrderCancelDeniedMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesOrderCancellationDeniedMessage(); // \Swagger\Client\Model\ModelMessagesOrderCancellationDeniedMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesOrderCancellationDeniedMessage**](../Model/ModelMessagesOrderCancellationDeniedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesOrderCancellationDeniedMessage**](../Model/ModelMessagesOrderCancellationDeniedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelMessage**
> \Swagger\Client\Model\ModelMessagesOrderCancellationMessage messageSendOrderCancelMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesOrderCancellationMessage(); // \Swagger\Client\Model\ModelMessagesOrderCancellationMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesOrderCancellationMessage**](../Model/ModelMessagesOrderCancellationMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesOrderCancellationMessage**](../Model/ModelMessagesOrderCancellationMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderCancelMessageWithBackcharge**
> \Swagger\Client\Model\ModelMessagesOrderCancellationMessage messageSendOrderCancelMessageWithBackcharge($message)

Send order cancellation message With Backcharge

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
$message = new \Swagger\Client\Model\ModelMessagesOrderCancellationMessage(); // \Swagger\Client\Model\ModelMessagesOrderCancellationMessage | New message

try {
    $result = $apiInstance->messageSendOrderCancelMessageWithBackcharge($message);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MessageApi->messageSendOrderCancelMessageWithBackcharge: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **message** | [**\Swagger\Client\Model\ModelMessagesOrderCancellationMessage**](../Model/ModelMessagesOrderCancellationMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesOrderCancellationMessage**](../Model/ModelMessagesOrderCancellationMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderMessage**
> \Swagger\Client\Model\ModelMessagesOrderMessage messageSendOrderMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesOrderMessage(); // \Swagger\Client\Model\ModelMessagesOrderMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesOrderMessage**](../Model/ModelMessagesOrderMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesOrderMessage**](../Model/ModelMessagesOrderMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendOrderRejectedMessage**
> \Swagger\Client\Model\ModelMessagesOrderRejectedMessage messageSendOrderRejectedMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesOrderRejectedMessage(); // \Swagger\Client\Model\ModelMessagesOrderRejectedMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesOrderRejectedMessage**](../Model/ModelMessagesOrderRejectedMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesOrderRejectedMessage**](../Model/ModelMessagesOrderRejectedMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **messageSendQueryMessage**
> \Swagger\Client\Model\ModelMessagesQueryMessage messageSendQueryMessage($message)

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
$message = new \Swagger\Client\Model\ModelMessagesQueryMessage(); // \Swagger\Client\Model\ModelMessagesQueryMessage | New message

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
 **message** | [**\Swagger\Client\Model\ModelMessagesQueryMessage**](../Model/ModelMessagesQueryMessage.md)| New message |

### Return type

[**\Swagger\Client\Model\ModelMessagesQueryMessage**](../Model/ModelMessagesQueryMessage.md)

### Authorization

[adminAuthorization](../../README.md#adminAuthorization)

### HTTP request headers

 - **Content-Type**: application/json, text/json
 - **Accept**: application/json, text/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

