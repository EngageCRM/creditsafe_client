# Swagger\Client\ConsumersApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**consumerReport**](ConsumersApi.md#consumerreport) | **GET** /consumers | 
[**consumerSearchCriteria**](ConsumersApi.md#consumersearchcriteria) | **GET** /consumers/searchcriteria | 

# **consumerReport**
> \Swagger\Client\Model\InlineResponse2003 consumerReport($authorization, $countries, $first_name, $last_name, $street, $house_no, $city, $post_code, $language, $date_of_birth, $custom_data, $call_ref)



Consumer Search and Report endpoint. When sufficient information has been provided to filter potential Consumer results down to one record then the Consumer Report will be returned.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = new \Swagger\Client\Model\CreditsafeGlobalDataCountryCode(); // \Swagger\Client\Model\CreditsafeGlobalDataCountryCode | ISO-2 country code
$first_name = "first_name_example"; // string | Consumer's First Name
$last_name = "last_name_example"; // string | Consumer's Last Name
$street = "street_example"; // string | Address part identifier - Street of the Consumer
$house_no = "house_no_example"; // string | Address part identifier - House/Building Number of the Consumer
$city = "city_example"; // string | Address part identifier - City of the Consumer
$post_code = "post_code_example"; // string | Address part identifier - Postcode/Zip Code of the Consumer
$language = "EN"; // string | 
$date_of_birth = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$custom_data = "custom_data_example"; // string | 
$call_ref = "call_ref_example"; // string | Call Reference

try {
    $result = $apiInstance->consumerReport($authorization, $countries, $first_name, $last_name, $street, $house_no, $city, $post_code, $language, $date_of_birth, $custom_data, $call_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->consumerReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **countries** | [**\Swagger\Client\Model\CreditsafeGlobalDataCountryCode**](../Model/.md)| ISO-2 country code |
 **first_name** | **string**| Consumer&#x27;s First Name |
 **last_name** | **string**| Consumer&#x27;s Last Name |
 **street** | **string**| Address part identifier - Street of the Consumer |
 **house_no** | **string**| Address part identifier - House/Building Number of the Consumer |
 **city** | **string**| Address part identifier - City of the Consumer |
 **post_code** | **string**| Address part identifier - Postcode/Zip Code of the Consumer |
 **language** | **string**|  | [optional] [default to EN]
 **date_of_birth** | **\DateTime**|  | [optional]
 **custom_data** | **string**|  | [optional]
 **call_ref** | **string**| Call Reference | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2003**](../Model/InlineResponse2003.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **consumerSearchCriteria**
> null[] consumerSearchCriteria($authorization, $countries, $call_ref)



Returns country specific fields that can be used to search for a Consumer.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ConsumersApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = "countries_example"; // string | Comma-separated list of ISO-2 country codes
$call_ref = "call_ref_example"; // string | Call Reference

try {
    $result = $apiInstance->consumerSearchCriteria($authorization, $countries, $call_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ConsumersApi->consumerSearchCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **countries** | **string**| Comma-separated list of ISO-2 country codes | [optional]
 **call_ref** | **string**| Call Reference | [optional]

### Return type

**null[]**

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

