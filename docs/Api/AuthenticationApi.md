# Swagger\Client\AuthenticationApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**authenticate**](AuthenticationApi.md#authenticate) | **POST** /authenticate | 
[**subscriptionDetails**](AuthenticationApi.md#subscriptiondetails) | **GET** /access | 

# **authenticate**
> \Swagger\Client\Model\ConnectAuthenticationAuthReponse authenticate($body)



Supply username and password to generate Authentication Token

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client()
);
$body = new \Swagger\Client\Model\ConnectAuthenticationAuthRequest(); // \Swagger\Client\Model\ConnectAuthenticationAuthRequest | 

try {
    $result = $apiInstance->authenticate($body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->authenticate: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectAuthenticationAuthRequest**](../Model/ConnectAuthenticationAuthRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectAuthenticationAuthReponse**](../Model/ConnectAuthenticationAuthReponse.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **subscriptionDetails**
> \Swagger\Client\Model\ConnectAuthenticationAccessCountries subscriptionDetails($authorization)



Returns the available countries in your subscription - Company Report, Director Report, Offline Reports and Monitoring.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\AuthenticationApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->subscriptionDetails($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling AuthenticationApi->subscriptionDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectAuthenticationAccessCountries**](../Model/ConnectAuthenticationAccessCountries.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

