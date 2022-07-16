# Swagger\Client\FreshInvestigationsApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**createFreshInvestigation**](FreshInvestigationsApi.md#createfreshinvestigation) | **POST** /freshinvestigations | 
[**getFreshInvestigations**](FreshInvestigationsApi.md#getfreshinvestigations) | **GET** /freshinvestigations | 
[**retrieveFreshInvestigationOrder**](FreshInvestigationsApi.md#retrievefreshinvestigationorder) | **GET** /freshinvestigations/{orderId} | 
[**retrieveFreshInvestigationReportContent**](FreshInvestigationsApi.md#retrievefreshinvestigationreportcontent) | **GET** /freshinvestigations/{orderId}/report | 

# **createFreshInvestigation**
> \Swagger\Client\Model\ConnectFreshInvInvestigationConfirmed createFreshInvestigation($authorization, $body)



Places an order for a Fresh Investigation (Offline Report). Providing as much detail as possible about the Company, our team will use official sources and registries to quickly answer questions about a company's stability and financial health. Fresh Investigations take 5.5 days on average to complete. By adding `consent:true` to the request, you are allowing Creditsafe to disclose your company details to the company you have requested the Investigation against, to be used only in the aim of improving our Investigation report.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\FreshInvestigationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$body = new \Swagger\Client\Model\ConnectFreshInvCreateInvestigation(); // \Swagger\Client\Model\ConnectFreshInvCreateInvestigation | 

try {
    $result = $apiInstance->createFreshInvestigation($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreshInvestigationsApi->createFreshInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **body** | [**\Swagger\Client\Model\ConnectFreshInvCreateInvestigation**](../Model/ConnectFreshInvCreateInvestigation.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectFreshInvInvestigationConfirmed**](../Model/ConnectFreshInvInvestigationConfirmed.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getFreshInvestigations**
> \Swagger\Client\Model\ConnectFreshInvListInvestigations getFreshInvestigations($authorization, $page, $page_size, $transaction_id, $report_created_after, $report_created_before, $created_before, $created_since, $look_up_order_by, $company_details_country, $company_details_name, $search_criteria_country, $search_criteria_name, $sort_by, $sort_dir)



Returns a list of your submitted Fresh Investigation Orders.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\FreshInvestigationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$transaction_id = "transaction_id_example"; // string | Fresh Investigation Identifier used internally and with our data partners.
$report_created_after = "report_created_after_example"; // string | Returns Fresh Investigations processed after this date
$report_created_before = "report_created_before_example"; // string | Returns ordered Fresh Investigations that were processed before this date
$created_before = "created_before_example"; // string | Returns Fresh Investigations created before this date
$created_since = "created_since_example"; // string | Returns ordered Fresh Investigations created after this date
$look_up_order_by = "look_up_order_by_example"; // string | Use to search for your Fresh Investigations by either the returned Company Details in the `GET` `freshInvestigations/{orderId}` endpoint or your supplied Search Criteria in the `POST` `/freshInvestigations` endpoint
$company_details_country = "company_details_country_example"; // string | Looks for your returned Fresh Investigations where the returned Company Country is named this. Use with lookUpOrderBy=CompanyDetails
$company_details_name = "company_details_name_example"; // string | Looks for your returned Fresh Investigations where the returned Company Name is named this. Use with lookUpOrderBy=CompanyDetails
$search_criteria_country = "search_criteria_country_example"; // string | Looks for your returned Fresh Investigations where your submitted Search Criteria Company Country is this. Use with lookUpOrderBy=searchCriteria
$search_criteria_name = "search_criteria_name_example"; // string | Looks for your Fresh Investigations where your submitted Search Criteria Company Name is this. Use with lookUpOrderBy=searchCriteria
$sort_by = "sort_by_example"; // string | Sorts  returned Fresh Investigations by this field
$sort_dir = "asc"; // string | The direction that you wish to sort results by.

try {
    $result = $apiInstance->getFreshInvestigations($authorization, $page, $page_size, $transaction_id, $report_created_after, $report_created_before, $created_before, $created_since, $look_up_order_by, $company_details_country, $company_details_name, $search_criteria_country, $search_criteria_name, $sort_by, $sort_dir);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreshInvestigationsApi->getFreshInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **transaction_id** | **string**| Fresh Investigation Identifier used internally and with our data partners. | [optional]
 **report_created_after** | **string**| Returns Fresh Investigations processed after this date | [optional]
 **report_created_before** | **string**| Returns ordered Fresh Investigations that were processed before this date | [optional]
 **created_before** | **string**| Returns Fresh Investigations created before this date | [optional]
 **created_since** | **string**| Returns ordered Fresh Investigations created after this date | [optional]
 **look_up_order_by** | **string**| Use to search for your Fresh Investigations by either the returned Company Details in the &#x60;GET&#x60; &#x60;freshInvestigations/{orderId}&#x60; endpoint or your supplied Search Criteria in the &#x60;POST&#x60; &#x60;/freshInvestigations&#x60; endpoint | [optional]
 **company_details_country** | **string**| Looks for your returned Fresh Investigations where the returned Company Country is named this. Use with lookUpOrderBy&#x3D;CompanyDetails | [optional]
 **company_details_name** | **string**| Looks for your returned Fresh Investigations where the returned Company Name is named this. Use with lookUpOrderBy&#x3D;CompanyDetails | [optional]
 **search_criteria_country** | **string**| Looks for your returned Fresh Investigations where your submitted Search Criteria Company Country is this. Use with lookUpOrderBy&#x3D;searchCriteria | [optional]
 **search_criteria_name** | **string**| Looks for your Fresh Investigations where your submitted Search Criteria Company Name is this. Use with lookUpOrderBy&#x3D;searchCriteria | [optional]
 **sort_by** | **string**| Sorts  returned Fresh Investigations by this field | [optional]
 **sort_dir** | **string**| The direction that you wish to sort results by. | [optional] [default to asc]

### Return type

[**\Swagger\Client\Model\ConnectFreshInvListInvestigations**](../Model/ConnectFreshInvListInvestigations.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveFreshInvestigationOrder**
> \Swagger\Client\Model\ConnectFreshInvCompletedInvestigation retrieveFreshInvestigationOrder($authorization, $order_id, $sections)



Returns a specific Fresh Investigation order.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\FreshInvestigationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$order_id = "order_id_example"; // string | 
$sections = "sections_example"; // string | Specify a value to return a single section, or multiple-comma separated sections of the completed Fresh Investigation. Leave null to return all sections. Available sections; - companyIdentification - creditScore - contactInformation - directors - otherInformation - groupStructure - extendedGroupStructure - financialStatements - negativeInformation - additionalInformation - directorships - localFinancialStatements - paymentData - companySummary - alternateSummary

try {
    $result = $apiInstance->retrieveFreshInvestigationOrder($authorization, $order_id, $sections);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreshInvestigationsApi->retrieveFreshInvestigationOrder: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **order_id** | **string**|  |
 **sections** | **string**| Specify a value to return a single section, or multiple-comma separated sections of the completed Fresh Investigation. Leave null to return all sections. Available sections; - companyIdentification - creditScore - contactInformation - directors - otherInformation - groupStructure - extendedGroupStructure - financialStatements - negativeInformation - additionalInformation - directorships - localFinancialStatements - paymentData - companySummary - alternateSummary | [optional]

### Return type

[**\Swagger\Client\Model\ConnectFreshInvCompletedInvestigation**](../Model/ConnectFreshInvCompletedInvestigation.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveFreshInvestigationReportContent**
> \Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyReportResponse retrieveFreshInvestigationReportContent($authorization, $order_id)



Returns the Fresh Investigation Report data for a specific order, after the order has a status of delivered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\FreshInvestigationsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$order_id = "order_id_example"; // string | 

try {
    $result = $apiInstance->retrieveFreshInvestigationReportContent($authorization, $order_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling FreshInvestigationsApi->retrieveFreshInvestigationReportContent: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **order_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\CreditsafeGlobalDataReportsCompanyReportResponse**](../Model/CreditsafeGlobalDataReportsCompanyReportResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

