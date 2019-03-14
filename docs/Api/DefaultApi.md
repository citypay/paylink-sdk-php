# Swagger\Client\DefaultApi

All URIs are relative to *https://secure.citypay.com/paylink3*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createPost**](DefaultApi.md#createPost) | **POST** /create | Creates a Paylink token to create a payment


# **createPost**
> createPost($body)

Creates a Paylink token to create a payment

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\DefaultApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\TokenRequest(); // \Swagger\Client\Model\TokenRequest | 

try {
    $apiInstance->createPost($body);
} catch (Exception $e) {
    echo 'Exception when calling DefaultApi->createPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\TokenRequest**](../Model/TokenRequest.md)|  |

### Return type

void (empty response body)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

