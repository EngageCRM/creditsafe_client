# Swagger\Client\CompaniesApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyCreditReport**](CompaniesApi.md#companycreditreport) | **GET** /companies/{connectId} | 
[**companySearch**](CompaniesApi.md#companysearch) | **GET** /companies | 
[**companySearchCriteria**](CompaniesApi.md#companysearchcriteria) | **GET** /companies/searchcriteria | 
[**confidenceMatchSearch**](CompaniesApi.md#confidencematchsearch) | **GET** /companies/match | 

# **companyCreditReport**
> \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyReportResponse companyCreditReport($authorization, $connect_id, $language, $template, $custom_data, $call_ref)



Orders a Company's Credit Report by connectId. Set the content-type of the request to `application\\pdf` to receive a PDF of the report instead of JSON.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$connect_id = "connect_id_example"; // string | The connectId (optionally Safe Number where available) of the Company required to order their Credit Report. Obtained from `/companies` search results.
$language = "en"; // string | Report Language - The JSON structure of the Report is language invariant, but field content will return as the given language, where available.
$template = "full"; // string | Optional parameter to request a Templated Company Report. A Template adds/reduces sections of the Credit Report depending on your subscription. Do not include this parameter if you have not been given a template to use.
$custom_data = "custom_data_example"; // string | Additional Report Parameters e.g.  German Report Reason Code value is `de_reason_code::1` . Use /reportcustomdata/{country} endpoint to see all values.
$call_ref = "call_ref_example"; // string | Call Reference

try {
    $result = $apiInstance->companyCreditReport($authorization, $connect_id, $language, $template, $custom_data, $call_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companyCreditReport: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **connect_id** | **string**| The connectId (optionally Safe Number where available) of the Company required to order their Credit Report. Obtained from &#x60;/companies&#x60; search results. |
 **language** | **string**| Report Language - The JSON structure of the Report is language invariant, but field content will return as the given language, where available. | [optional] [default to en]
 **template** | **string**| Optional parameter to request a Templated Company Report. A Template adds/reduces sections of the Credit Report depending on your subscription. Do not include this parameter if you have not been given a template to use. | [optional] [default to full]
 **custom_data** | **string**| Additional Report Parameters e.g.  German Report Reason Code value is &#x60;de_reason_code::1&#x60; . Use /reportcustomdata/{country} endpoint to see all values. | [optional]
 **call_ref** | **string**| Call Reference | [optional]

### Return type

[**\Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyReportResponse**](../Model/CreditsafeGlobalDataReportsCompanyReportResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json, application/pdf

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySearch**
> \Swagger\Client\Model\InlineResponse200 companySearch($authorization, $countries, $page, $page_size, $language, $id, $safe_no, $reg_no, $vat_no, $name, $trade_name, $acronym, $exact, $address, $street, $house_no, $city, $post_code, $province, $call_ref, $office_type, $phone_no, $status, $type, $website, $custom_data)



Endpoint to search for Companies according to the provided Search Criteria. To get the most relevant results, it is recommended to use a unique identifier such as `regNo` where available. If a unique identifier is not available, use a combination of the companies registered `postCode` and `name` for the next best hit rate.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = array(new \Swagger\Client\Model\CreditsafeGlobalDataCountryCode()); // \Swagger\Client\Model\CreditsafeGlobalDataCountryCode[] | comma-separated list of iso-2 country codes
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$language = "language_example"; // string | Typically only used for Countries where more than one Company Name exists for different languages e.g.  Japanese Kanji and English.
$id = "id_example"; // string | connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafes Universe and Partner Network. This is returned on all Company Search Results. Use this field to use in other operations such as Ordering Company Credit Report by Id, and Adding Company to Monitoring Portfolio.
$safe_no = "safe_no_example"; // string | Safe Number - Identifier for Companies in Creditsafe's Home Countries.
$reg_no = "reg_no_example"; // string | Local Company Identifier - The Company identifier associated with it's Domestic Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN.
$vat_no = "vat_no_example"; // string | Company VAT Number
$name = "name_example"; // string | Company Name
$trade_name = "trade_name_example"; // string | Trade Name of the Company, typically used in Countries where Name is not uniquely registered.
$acronym = "acronym_example"; // string | A (non-unique) identifier to look for Companies by their more commonly known acronym rather than their lesser known full name. Acronym is predominantly available on French Companies.
$exact = true; // bool | Provide as true to find Companies matching a Name exactly.
$address = "address_example"; // string | 
$street = "street_example"; // string | Address part identifier - Street of the Company
$house_no = "house_no_example"; // string | Address part identifier - House/Building Number of the Company
$city = "city_example"; // string | Address part identifier - City of the Company
$post_code = "post_code_example"; // string | Address part identifier - Postcode/Zip Code of the Company. Can be provided partially to extend to a region with a * as a wildcard. I.e. CF* can represent all postcodes starting with CF.
$province = "province_example"; // string | Address part identifier - Province/State of the Company
$call_ref = "call_ref_example"; // string | Call Reference
$office_type = new \Swagger\Client\Model\CreditsafeGlobalDataOfficeType(); // \Swagger\Client\Model\CreditsafeGlobalDataOfficeType | 
$phone_no = array("phone_no_example"); // string[] | Provides Array of phone numbers or Null
$status = new \Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus(); // \Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus | 
$type = new \Swagger\Client\Model\CreditsafeGlobalDataCompanyType(); // \Swagger\Client\Model\CreditsafeGlobalDataCompanyType | 
$website = "website_example"; // string | 
$custom_data = "custom_data_example"; // string | 

try {
    $result = $apiInstance->companySearch($authorization, $countries, $page, $page_size, $language, $id, $safe_no, $reg_no, $vat_no, $name, $trade_name, $acronym, $exact, $address, $street, $house_no, $city, $post_code, $province, $call_ref, $office_type, $phone_no, $status, $type, $website, $custom_data);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companySearch: ', $e->getMessage(), PHP_EOL;
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
 **language** | **string**| Typically only used for Countries where more than one Company Name exists for different languages e.g.  Japanese Kanji and English. | [optional]
 **id** | **string**| connectId - The primary Company identifier that is used to uniquely identify all companies across Creditsafes Universe and Partner Network. This is returned on all Company Search Results. Use this field to use in other operations such as Ordering Company Credit Report by Id, and Adding Company to Monitoring Portfolio. | [optional]
 **safe_no** | **string**| Safe Number - Identifier for Companies in Creditsafe&#x27;s Home Countries. | [optional]
 **reg_no** | **string**| Local Company Identifier - The Company identifier associated with it&#x27;s Domestic Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN. | [optional]
 **vat_no** | **string**| Company VAT Number | [optional]
 **name** | **string**| Company Name | [optional]
 **trade_name** | **string**| Trade Name of the Company, typically used in Countries where Name is not uniquely registered. | [optional]
 **acronym** | **string**| A (non-unique) identifier to look for Companies by their more commonly known acronym rather than their lesser known full name. Acronym is predominantly available on French Companies. | [optional]
 **exact** | **bool**| Provide as true to find Companies matching a Name exactly. | [optional]
 **address** | **string**|  | [optional]
 **street** | **string**| Address part identifier - Street of the Company | [optional]
 **house_no** | **string**| Address part identifier - House/Building Number of the Company | [optional]
 **city** | **string**| Address part identifier - City of the Company | [optional]
 **post_code** | **string**| Address part identifier - Postcode/Zip Code of the Company. Can be provided partially to extend to a region with a * as a wildcard. I.e. CF* can represent all postcodes starting with CF. | [optional]
 **province** | **string**| Address part identifier - Province/State of the Company | [optional]
 **call_ref** | **string**| Call Reference | [optional]
 **office_type** | [**\Swagger\Client\Model\CreditsafeGlobalDataOfficeType**](../Model/.md)|  | [optional]
 **phone_no** | [**string[]**](../Model/string.md)| Provides Array of phone numbers or Null | [optional]
 **status** | [**\Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus**](../Model/.md)|  | [optional]
 **type** | [**\Swagger\Client\Model\CreditsafeGlobalDataCompanyType**](../Model/.md)|  | [optional]
 **website** | **string**|  | [optional]
 **custom_data** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companySearchCriteria**
> null[] companySearchCriteria($authorization, $countries)



Returns the set of available Company Search parameters/fields for a provided list of countries.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = "countries_example"; // string | A comma separated list of ISO/Alpha 2 format country codes, or singular country Code. e.g. US,GB will return the common searchable Company fields in the United States and Great Britain.

try {
    $result = $apiInstance->companySearchCriteria($authorization, $countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->companySearchCriteria: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **countries** | **string**| A comma separated list of ISO/Alpha 2 format country codes, or singular country Code. e.g. US,GB will return the common searchable Company fields in the United States and Great Britain. | [optional]

### Return type

**null[]**

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **confidenceMatchSearch**
> \Swagger\Client\Model\InlineResponse2001 confidenceMatchSearch($authorization, $country, $page, $page_size, $match_threshold, $reg_no, $vat_no, $name, $street, $house_no, $city, $post_code, $province, $state, $office_type, $phone_no, $status, $type, $website, $reference1, $reference2, $reference3, $call_ref)



Supply all company search criteria to find potential company matches ranked by a `confidenceMatchScore`.   - <a href=https://creditsafe.freshdesk.com/en/support/solutions/articles/7000059769-interpreting-confidence-match-scores>See here for more information</a>

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\CompaniesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$country = "country_example"; // string | Iso-2 country code
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$match_threshold = 56; // int | Return matches above this score (900 - 999)
$reg_no = "reg_no_example"; // string | Local Company Identifier - The Company identifier associated with it's Domestic Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN.
$vat_no = "vat_no_example"; // string | Company VAT Number
$name = "name_example"; // string | Company Name
$street = "street_example"; // string | Address part identifier - Street of the Company
$house_no = "house_no_example"; // string | Address part identifier - House/Building Number of the Company
$city = "city_example"; // string | Address part identifier - City of the Company
$post_code = "post_code_example"; // string | Address part identifier - Postcode/Zip Code of the Company.
$province = "province_example"; // string | Address part identifier - Province of the Company
$state = "state_example"; // string | Address part identifier - State of the Company
$office_type = new \Swagger\Client\Model\CreditsafeGlobalDataOfficeType(); // \Swagger\Client\Model\CreditsafeGlobalDataOfficeType | 
$phone_no = "phone_no_example"; // string | 
$status = new \Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus(); // \Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus | 
$type = new \Swagger\Client\Model\CreditsafeGlobalDataCompanyType(); // \Swagger\Client\Model\CreditsafeGlobalDataCompanyType | 
$website = "website_example"; // string | 
$reference1 = "reference1_example"; // string | Customer supplied free text reference 1 of 3
$reference2 = "reference2_example"; // string | Customer supplied free text reference 2 of 3
$reference3 = "reference3_example"; // string | Customer supplied free text reference 3 of 3
$call_ref = "call_ref_example"; // string | Call Reference

try {
    $result = $apiInstance->confidenceMatchSearch($authorization, $country, $page, $page_size, $match_threshold, $reg_no, $vat_no, $name, $street, $house_no, $city, $post_code, $province, $state, $office_type, $phone_no, $status, $type, $website, $reference1, $reference2, $reference3, $call_ref);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling CompaniesApi->confidenceMatchSearch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **country** | **string**| Iso-2 country code |
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **match_threshold** | **int**| Return matches above this score (900 - 999) | [optional]
 **reg_no** | **string**| Local Company Identifier - The Company identifier associated with it&#x27;s Domestic Filing Agency. i.e. French SIREN/SIRET, United Kingdom Companies House CRN. | [optional]
 **vat_no** | **string**| Company VAT Number | [optional]
 **name** | **string**| Company Name | [optional]
 **street** | **string**| Address part identifier - Street of the Company | [optional]
 **house_no** | **string**| Address part identifier - House/Building Number of the Company | [optional]
 **city** | **string**| Address part identifier - City of the Company | [optional]
 **post_code** | **string**| Address part identifier - Postcode/Zip Code of the Company. | [optional]
 **province** | **string**| Address part identifier - Province of the Company | [optional]
 **state** | **string**| Address part identifier - State of the Company | [optional]
 **office_type** | [**\Swagger\Client\Model\CreditsafeGlobalDataOfficeType**](../Model/.md)|  | [optional]
 **phone_no** | **string**|  | [optional]
 **status** | [**\Swagger\Client\Model\CreditsafeGlobalDataCompanyStatus**](../Model/.md)|  | [optional]
 **type** | [**\Swagger\Client\Model\CreditsafeGlobalDataCompanyType**](../Model/.md)|  | [optional]
 **website** | **string**|  | [optional]
 **reference1** | **string**| Customer supplied free text reference 1 of 3 | [optional]
 **reference2** | **string**| Customer supplied free text reference 2 of 3 | [optional]
 **reference3** | **string**| Customer supplied free text reference 3 of 3 | [optional]
 **call_ref** | **string**| Call Reference | [optional]

### Return type

[**\Swagger\Client\Model\InlineResponse2001**](../Model/InlineResponse2001.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

