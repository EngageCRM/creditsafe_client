# Swagger\Client\MiscApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**customReportParameters**](MiscApi.md#customreportparameters) | **GET** /reportcustomdata/{country} | 
[**reportSchema**](MiscApi.md#reportschema) | **GET** /companies/schema/{countryCode} | 

# **customReportParameters**
> object customReportParameters($authorization, $country)



Returns the allowed values of the customData parameter, used in the GET Company Report and Director Report endpoints.  I.e. Supplying `DE` as a country code will return a list of reasons for requesting a DE Credit Report (a legal requirement to supply with each Credit Report request in Germany). This will provide a list of allowedValues to enter into the mandatory Parameter `customData` = `de_reason_code::allowedValue`

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$country = "country_example"; // string | An ISO/Alpha-2 country code to display any special mandatory parameters when ordering a Credit Report in that territory.

try {
    $result = $apiInstance->customReportParameters($authorization, $country);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->customReportParameters: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **country** | **string**| An ISO/Alpha-2 country code to display any special mandatory parameters when ordering a Credit Report in that territory. |

### Return type

**object**

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **reportSchema**
> object reportSchema($authorization, $country_code, $section, $template)



Returns the Company Report JSON schema of the provided country. Largely redundant as the Company Report 200 response is defined as a superset of all country's JSON schemas and can be used for any country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\MiscApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$country_code = "country_code_example"; // string | ISO2 / Alpha 2 Country Code
$section = "section_example"; // string | Use CompanyReportResponse for the Company Credit Report JSON schema, DirectorReportResponse for the Director Report JSON schema.
$template = "template_example"; // string | For Templated Company Report JSON Schemas

try {
    $result = $apiInstance->reportSchema($authorization, $country_code, $section, $template);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling MiscApi->reportSchema: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **country_code** | **string**| ISO2 / Alpha 2 Country Code |
 **section** | **string**| Use CompanyReportResponse for the Company Credit Report JSON schema, DirectorReportResponse for the Director Report JSON schema. | [optional]
 **template** | **string**| For Templated Company Report JSON Schemas | [optional]

### Return type

**object**

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

