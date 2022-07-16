# Swagger\Client\PeopleDirectorsApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**directorReport**](PeopleDirectorsApi.md#directorreport) | **GET** /people/{peopleId} | 
[**directorSearch**](PeopleDirectorsApi.md#directorsearch) | **GET** /people | 
[**peopleDirectorSearchCriteria**](PeopleDirectorsApi.md#peopledirectorsearchcriteria) | **GET** /people/searchcriteria | 

# **directorReport**
> \Swagger\Client\Model\CreditsafeGlobalDataReportsDirectorsDirectorReportResponse directorReport($authorization, $people_id, $language, $call_ref)



### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PeopleDirectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$people_id = "people_id_example"; // string | Identifier of the Person/Director required to order their Director Report. Obtained from `/people` search results.
$language = "en"; // string | Report Language - The JSON structure of the Report is language invariant, but field content will return as the given language, where available.
$call_ref = "call_ref_example"; // string | Call Reference

try {
    $result = $apiInstance->directorReport($authorization, $people_id, $language, $call_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleDirectorsApi->directorReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **people_id** | **string**| Identifier of the Person/Director required to order their Director Report. Obtained from &#x60;/people&#x60; search results. |
 **language** | **string**| Report Language - The JSON structure of the Report is language invariant, but field content will return as the given language, where available. | [optional] [default to en]
 **call_ref** | **string**| Call Reference | [optional]

### Return type

[**\Swagger\Client\Model\CreditsafeGlobalDataReportsDirectorsDirectorReportResponse**](../Model/CreditsafeGlobalDataReportsDirectorsDirectorReportResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **directorSearch**
> \Swagger\Client\Model\InlineResponse2002 directorSearch($authorization, $countries, $page, $page_size, $people_id, $first_name, $last_name, $local_director_number, $date_of_birth, $call_ref)



Endpoint to find Directors based on search criteria to order a Creditsafe Director Report.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PeopleDirectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = array(new \Swagger\Client\Model\CreditsafeGlobalDataCountryCode()); // \Swagger\Client\Model\CreditsafeGlobalDataCountryCode[] | comma-separated list of iso-2 country codes
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$people_id = "people_id_example"; // string | Person/Director Identifier - used to order a Director Report.
$first_name = "first_name_example"; // string | Person's First Name.
$last_name = "last_name_example"; // string | Person's Last Name
$local_director_number = "local_director_number_example"; // string | Local Identifier of the Director, the PNR in GB.
$date_of_birth = "date_of_birth_example"; // string | Person DOB - provide YYYY-MM-DD or YYYY-MM format.
$call_ref = "call_ref_example"; // string | Call Reference

try {
    $result = $apiInstance->directorSearch($authorization, $countries, $page, $page_size, $people_id, $first_name, $last_name, $local_director_number, $date_of_birth, $call_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleDirectorsApi->directorSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **countries** | [**\Swagger\Client\Model\CreditsafeGlobalDataCountryCode[]**](../Model/\Swagger\Client\Model\CreditsafeGlobalDataCountryCode.md)| comma-separated list of iso-2 country codes |
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **people_id** | **string**| Person/Director Identifier - used to order a Director Report. | [optional]
 **first_name** | **string**| Person&#x27;s First Name. | [optional]
 **last_name** | **string**| Person&#x27;s Last Name | [optional]
 **local_director_number** | **string**| Local Identifier of the Director, the PNR in GB. | [optional]
 **date_of_birth** | **string**| Person DOB - provide YYYY-MM-DD or YYYY-MM format. | [optional]
 **call_ref** | **string**| Call Reference | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2002**](../Model/InlineResponse2002.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **peopleDirectorSearchCriteria**
> \Swagger\Client\Model\CreditsafeGlobalDataSearchCriteriaSchemaSetDirector peopleDirectorSearchCriteria($authorization, $countries)



Returns the set of available People Search parameters/fields for a provided list of countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\PeopleDirectorsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = "countries_example"; // string | A comma separated list of ISO/Alpha 2 format country codes, or singular country Code. e.g. US,GB will return the common searchable People/Director fields in the United States and Great Britain.

try {
    $result = $apiInstance->peopleDirectorSearchCriteria($authorization, $countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling PeopleDirectorsApi->peopleDirectorSearchCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **countries** | **string**| A comma separated list of ISO/Alpha 2 format country codes, or singular country Code. e.g. US,GB will return the common searchable People/Director fields in the United States and Great Britain. | [optional]

### Return type

[**\Swagger\Client\Model\CreditsafeGlobalDataSearchCriteriaSchemaSetDirector**](../Model/CreditsafeGlobalDataSearchCriteriaSchemaSetDirector.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

