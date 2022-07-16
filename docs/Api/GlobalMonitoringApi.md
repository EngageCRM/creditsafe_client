# Swagger\Client\GlobalMonitoringApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addCompanyToPortfolio**](GlobalMonitoringApi.md#addcompanytoportfolio) | **POST** /monitoring/portfolios/{portfolioId}/companies | 
[**allEventRules**](GlobalMonitoringApi.md#alleventrules) | **GET** /monitoring/eventRules | 
[**allNotificationEvents**](GlobalMonitoringApi.md#allnotificationevents) | **GET** /monitoring/notificationEvents | 
[**clearCompaniesFromPortfolio**](GlobalMonitoringApi.md#clearcompaniesfromportfolio) | **PATCH** /monitoring/portfolios/{portfolioId}/companies/clear | 
[**copyCompaniesBetweenPortfolios**](GlobalMonitoringApi.md#copycompaniesbetweenportfolios) | **POST** /monitoring/portfolios/{portfolioId}/companies/copy | 
[**createMonitoringPortfolio**](GlobalMonitoringApi.md#createmonitoringportfolio) | **POST** /monitoring/portfolios | 
[**deleteCompanyFromPortfolio**](GlobalMonitoringApi.md#deletecompanyfromportfolio) | **DELETE** /monitoring/portfolios/{portfolioId}/companies/{companyId} | 
[**deletePortfolio**](GlobalMonitoringApi.md#deleteportfolio) | **DELETE** /monitoring/portfolios/{portfolioId} | 
[**filteredEventRules**](GlobalMonitoringApi.md#filteredeventrules) | **GET** /monitoring/eventRules/{countryCode} | 
[**getCompanyDetailsFromAPortfolio**](GlobalMonitoringApi.md#getcompanydetailsfromaportfolio) | **GET** /monitoring/portfolios/{portfolioId}/companies/{companyId} | 
[**importAPortfolioFile**](GlobalMonitoringApi.md#importaportfoliofile) | **POST** /monitoring/portfolios/{portfolioId}/import | 
[**listAllPortfolios**](GlobalMonitoringApi.md#listallportfolios) | **GET** /monitoring/portfolios | 
[**listCompaniesInAPortfolio**](GlobalMonitoringApi.md#listcompaniesinaportfolio) | **GET** /monitoring/portfolios/{portfolioId}/companies | 
[**listCompanyEvents**](GlobalMonitoringApi.md#listcompanyevents) | **GET** /monitoring/companies/{id}/events | 
[**listCompanySpecificNotificationEvents**](GlobalMonitoringApi.md#listcompanyspecificnotificationevents) | **GET** /monitoring/portfolios/{portfolioId}/companies/{id}/notificationEvents | 
[**listCountriesOfMonitoredCompanies**](GlobalMonitoringApi.md#listcountriesofmonitoredcompanies) | **GET** /monitoring/portfolios/{portfolioId}/countries | 
[**listPortfolioEventRules**](GlobalMonitoringApi.md#listportfolioeventrules) | **GET** /monitoring/portfolios/{portfolioId}/eventRules | 
[**listPortfolioEventRulesByCountry**](GlobalMonitoringApi.md#listportfolioeventrulesbycountry) | **GET** /monitoring/portfolios/{portfolioId}/eventRules/{countryCode} | 
[**listPortfolioNotifications**](GlobalMonitoringApi.md#listportfolionotifications) | **GET** /monitoring/portfolios/{portfolioId}/notificationEvents | 
[**monitoringUserDetails**](GlobalMonitoringApi.md#monitoringuserdetails) | **GET** /monitoring/user/details | 
[**moveCompaniesBetweenPortfolios**](GlobalMonitoringApi.md#movecompaniesbetweenportfolios) | **POST** /monitoring/portfolios/{portfolioId}/companies/remove | 
[**portfolioUserPermissions**](GlobalMonitoringApi.md#portfoliouserpermissions) | **GET** /monitoring/portfolios/{portfolioId}/sharingPermissions | 
[**portoflioRiskSummary**](GlobalMonitoringApi.md#portofliorisksummary) | **GET** /monitoring/portfolios/{portfolioId}/riskSummary | 
[**retrievePortfolioById**](GlobalMonitoringApi.md#retrieveportfoliobyid) | **GET** /monitoring/portfolios/{portfolioId} | 
[**setPortfolioDefaultRules**](GlobalMonitoringApi.md#setportfoliodefaultrules) | **PUT** /monitoring/portfolios/{portfolioId}/eventRules/setDefault | 
[**sharePortfolioWithUsers**](GlobalMonitoringApi.md#shareportfoliowithusers) | **PATCH** /monitoring/portfolios/{portfolioId}/sharingPermissions | 
[**syncAPortfolioFile**](GlobalMonitoringApi.md#syncaportfoliofile) | **POST** /monitoring/portfolios/{portfolioId}/sync | 
[**updateCompanyDetailsInPortfolio**](GlobalMonitoringApi.md#updatecompanydetailsinportfolio) | **PATCH** /monitoring/portfolios/{portfolioId}/companies/{companyId} | 
[**updateEventRules**](GlobalMonitoringApi.md#updateeventrules) | **PUT** /monitoring/portfolios/{portfolioId}/eventRules/{countryCode} | 
[**updateIsProcessedFlag**](GlobalMonitoringApi.md#updateisprocessedflag) | **PATCH** /monitoring/portfolios/{portfolioId}/notificationEvents/{notificationEventId} | 
[**updatePortfolioDetails**](GlobalMonitoringApi.md#updateportfoliodetails) | **PATCH** /monitoring/portfolios/{portfolioId} | 

# **addCompanyToPortfolio**
> \Swagger\Client\Model\ConnectMonitoringAddCompanyToPortfolioResponse addCompanyToPortfolio($authorization, $portfolio_id, $body)



Endpoint to add a company using a company id, into a portfolio provided in as a path parameter. Optional fields can be used to add a personalReference, freeText, and personalLimit.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$body = new \Swagger\Client\Model\ConnectMonitoringAddCompanyToPortfolioRequest(); // \Swagger\Client\Model\ConnectMonitoringAddCompanyToPortfolioRequest | 

try {
    $result = $apiInstance->addCompanyToPortfolio($authorization, $portfolio_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->addCompanyToPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **body** | [**\Swagger\Client\Model\ConnectMonitoringAddCompanyToPortfolioRequest**](../Model/ConnectMonitoringAddCompanyToPortfolioRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringAddCompanyToPortfolioResponse**](../Model/ConnectMonitoringAddCompanyToPortfolioResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allEventRules**
> \Swagger\Client\Model\ConnectMonitoringEventRulesResponse allEventRules($authorization)



Get all available notification event rules. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within a given `portfolio`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->allEventRules($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->allEventRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringEventRulesResponse**](../Model/ConnectMonitoringEventRulesResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **allNotificationEvents**
> \Swagger\Client\Model\ConnectMonitoringAllNotificationsEvents allNotificationEvents($authorization, $search_query, $sort_by, $sort_dir, $start_date, $end_date, $page, $page_size, $filter_by_created_date)



Get all notification events generated for companies monitored in your portfolios, based on the notification rules enabled. The notification events returned will be filtered based upon the supplied search criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$search_query = "search_query_example"; // string | Return notificationEvents that match the given value
$sort_by = "companyName"; // string | Sort results by this column. Null values of sort column are listed after non-nulls.
$sort_dir = "asc"; // string | The direction that you wish to sort results by.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date on which results are filtered.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date on which results are filtered.
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$filter_by_created_date = false; // bool | Set to `true` to filter the Notification Events of the \"createdDate\" field when using `startDate` and `endDate` parameters. By default this is set to `false`, with the date paramters filtering using the \"eventDate\" field.

try {
    $result = $apiInstance->allNotificationEvents($authorization, $search_query, $sort_by, $sort_dir, $start_date, $end_date, $page, $page_size, $filter_by_created_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->allNotificationEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **search_query** | **string**| Return notificationEvents that match the given value | [optional]
 **sort_by** | **string**| Sort results by this column. Null values of sort column are listed after non-nulls. | [optional] [default to companyName]
 **sort_dir** | **string**| The direction that you wish to sort results by. | [optional] [default to asc]
 **start_date** | **\DateTime**| The start date on which results are filtered. | [optional]
 **end_date** | **\DateTime**| The end date on which results are filtered. | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **filter_by_created_date** | **bool**| Set to &#x60;true&#x60; to filter the Notification Events of the \&quot;createdDate\&quot; field when using &#x60;startDate&#x60; and &#x60;endDate&#x60; parameters. By default this is set to &#x60;false&#x60;, with the date paramters filtering using the \&quot;eventDate\&quot; field. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringAllNotificationsEvents**](../Model/ConnectMonitoringAllNotificationsEvents.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **clearCompaniesFromPortfolio**
> \Swagger\Client\Model\ConnectMonitoringClearCompaniesResponse clearCompaniesFromPortfolio($body, $authorization, $portfolio_id, $clear_all)



Delete companies from current portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectMonitoringClearCompaniesRequest(); // \Swagger\Client\Model\ConnectMonitoringClearCompaniesRequest | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio you want to delete companies from, obtained from `/portfolios`.
$clear_all = false; // bool | When ClearAll queryparameter is False,Companies List needs to be passed. When ClearAll queryparameter is True, Companies List must be empty. All companies will be deleted

try {
    $result = $apiInstance->clearCompaniesFromPortfolio($body, $authorization, $portfolio_id, $clear_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->clearCompaniesFromPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringClearCompaniesRequest**](../Model/ConnectMonitoringClearCompaniesRequest.md)|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio you want to delete companies from, obtained from &#x60;/portfolios&#x60;. |
 **clear_all** | **bool**| When ClearAll queryparameter is False,Companies List needs to be passed. When ClearAll queryparameter is True, Companies List must be empty. All companies will be deleted | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringClearCompaniesResponse**](../Model/ConnectMonitoringClearCompaniesResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **copyCompaniesBetweenPortfolios**
> \Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesResponse copyCompaniesBetweenPortfolios($body, $authorization, $portfolio_id, $copy_all)



Copy companies from one portfolio to single (or) multiple portfolios.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesRequest(); // \Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesRequest | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio you want to copy companies from, obtained from `/portfolios`.
$copy_all = false; // bool | When CopyAll queryparameter is False, portfolios and companies list needs to be passed. When CopyAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are copied from current portfolio are considered here.

try {
    $result = $apiInstance->copyCompaniesBetweenPortfolios($body, $authorization, $portfolio_id, $copy_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->copyCompaniesBetweenPortfolios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesRequest**](../Model/ConnectMonitoringCopyAndMoveCompaniesRequest.md)|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio you want to copy companies from, obtained from &#x60;/portfolios&#x60;. |
 **copy_all** | **bool**| When CopyAll queryparameter is False, portfolios and companies list needs to be passed. When CopyAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are copied from current portfolio are considered here. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesResponse**](../Model/ConnectMonitoringCopyAndMoveCompaniesResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createMonitoringPortfolio**
> \Swagger\Client\Model\ConnectMonitoringCreatePortfolioResponse createMonitoringPortfolio($body, $authorization)



Endpoint to create a new Portfolio based on the supplied criteria. A portfolio can contain any number of companies that you wish to monitor changes to. The only required Body parameter is \"name\" for Connect users.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectMonitoringCreatePortfolioRequest(); // \Swagger\Client\Model\ConnectMonitoringCreatePortfolioRequest | 
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->createMonitoringPortfolio($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->createMonitoringPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringCreatePortfolioRequest**](../Model/ConnectMonitoringCreatePortfolioRequest.md)|  |
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringCreatePortfolioResponse**](../Model/ConnectMonitoringCreatePortfolioResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deleteCompanyFromPortfolio**
> \Swagger\Client\Model\ConnectMonitoringDeleteCompanyFromPortfolio deleteCompanyFromPortfolio($authorization, $portfolio_id, $company_id)



Endpoint to delete a company from a portfolio.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$company_id = "company_id_example"; // string | A company Safe Number or Connect ID.

try {
    $result = $apiInstance->deleteCompanyFromPortfolio($authorization, $portfolio_id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->deleteCompanyFromPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **company_id** | **string**| A company Safe Number or Connect ID. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringDeleteCompanyFromPortfolio**](../Model/ConnectMonitoringDeleteCompanyFromPortfolio.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **deletePortfolio**
> \Swagger\Client\Model\ConnectMonitoringDeletePortfolio deletePortfolio($authorization, $portfolio_id)



Delete the portfolio with portfolioId

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio that you wish to delete, obtained from `/portfolios`.

try {
    $result = $apiInstance->deletePortfolio($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->deletePortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio that you wish to delete, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringDeletePortfolio**](../Model/ConnectMonitoringDeletePortfolio.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **filteredEventRules**
> \Swagger\Client\Model\ConnectMonitoringEventRulesResponse filteredEventRules($authorization, $country_code)



Get all available notification event rules for the given `countryCode`. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within a given `portfolio`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$country_code = "country_code_example"; // string | ISO/Alpha 2 format country code for which notification event rules will be retured.

try {
    $result = $apiInstance->filteredEventRules($authorization, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->filteredEventRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **country_code** | **string**| ISO/Alpha 2 format country code for which notification event rules will be retured. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringEventRulesResponse**](../Model/ConnectMonitoringEventRulesResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getCompanyDetailsFromAPortfolio**
> \Swagger\Client\Model\ConnectMonitoringGetCompanyFromPortfolio getCompanyDetailsFromAPortfolio($authorization, $portfolio_id, $company_id)



Get various company details from a portfolio. Requires a portfolioID and companyID in the PATH of the request.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$company_id = "company_id_example"; // string | A company Safe Number or Connect ID.

try {
    $result = $apiInstance->getCompanyDetailsFromAPortfolio($authorization, $portfolio_id, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->getCompanyDetailsFromAPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **company_id** | **string**| A company Safe Number or Connect ID. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringGetCompanyFromPortfolio**](../Model/ConnectMonitoringGetCompanyFromPortfolio.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **importAPortfolioFile**
> \Swagger\Client\Model\ConnectMonitoringImportAndSyncPortfolioResponse importAPortfolioFile($importcsv, $email, $authorization, $portfolio_id)



Endpoint allows you to import a list of companies to add to the selected portfolio along with some personal information for the company. Importing a portfolio will add the companies to the specified portfolio, duplicates in the import file will be ignored.You may also optionally add an email to the body of the request and get an email notification when the import is processed..

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$importcsv = "importcsv_example"; // string | 
$email = "email_example"; // string | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->importAPortfolioFile($importcsv, $email, $authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->importAPortfolioFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **importcsv** | **string****string**|  |
 **email** | **string**|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringImportAndSyncPortfolioResponse**](../Model/ConnectMonitoringImportAndSyncPortfolioResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllPortfolios**
> \Swagger\Client\Model\ConnectMonitoringListPortfolios listAllPortfolios($authorization, $search_query, $page, $page_size)



Endpoint to get all Portfolios for the user if no query parameters are provided. Can be searched by using the query parameter in the URL.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$search_query = "search_query_example"; // string | Return portfolios that match the given value
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->listAllPortfolios($authorization, $search_query, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listAllPortfolios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **search_query** | **string**| Return portfolios that match the given value | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringListPortfolios**](../Model/ConnectMonitoringListPortfolios.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCompaniesInAPortfolio**
> \Swagger\Client\Model\ConnectMonitoringCompaniesInAPortfolio listCompaniesInAPortfolio($authorization, $portfolio_id, $search_query, $page_size, $page, $country_code, $events)



Get all companies from a specific portfolio based on the portfolio id, optionally filter with query parameters.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$search_query = "search_query_example"; // string | Return companies that match the given value
$page_size = 56; // int | Number of items to return per Page.
$page = 1; // int | Starting page number.
$country_code = "country_code_example"; // string | Return <<resourcePathName>> that match the given countryCode
$events = false; // bool | If set to true, all events will be returned for each company

try {
    $result = $apiInstance->listCompaniesInAPortfolio($authorization, $portfolio_id, $search_query, $page_size, $page, $country_code, $events);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listCompaniesInAPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **search_query** | **string**| Return companies that match the given value | [optional]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **country_code** | **string**| Return &lt;&lt;resourcePathName&gt;&gt; that match the given countryCode | [optional]
 **events** | **bool**| If set to true, all events will be returned for each company | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringCompaniesInAPortfolio**](../Model/ConnectMonitoringCompaniesInAPortfolio.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCompanyEvents**
> \Swagger\Client\Model\ConnectMonitoringCompanyEvents listCompanyEvents($authorization, $id, $start_date, $end_date, $page, $page_size)



Endpoint to return a collection of `events` for the given company, optionally filtered on the supplied search criteria. Event information will only be returned if the company exists in at least one of your `portfolios`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$id = "id_example"; // string | The connectId of the company that you wish to retrieve events for.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date on which results are filtered.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date on which results are filtered.
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->listCompanyEvents($authorization, $id, $start_date, $end_date, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listCompanyEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **id** | **string**| The connectId of the company that you wish to retrieve events for. |
 **start_date** | **\DateTime**| The start date on which results are filtered. | [optional]
 **end_date** | **\DateTime**| The end date on which results are filtered. | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringCompanyEvents**](../Model/ConnectMonitoringCompanyEvents.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCompanySpecificNotificationEvents**
> listCompanySpecificNotificationEvents($authorization, $portfolio_id, $id, $search_query, $sort_dir, $page_size, $page, $is_processed, $sort_by)



List of notification events based on the company id,optionally filtered with query parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = "portfolio_id_example"; // string | The unique identifier of the portfolio, obtained from `/portfolios`.
$id = "id_example"; // string | A company Safe Number or Connect ID.
$search_query = "search_query_example"; // string | Return notificationEvents that match the given value
$sort_dir = "asc"; // string | The direction that you wish to sort results by.
$page_size = 50; // int | Number of items to return per Page (max 1000)
$page = 1; // int | Starting page number.
$is_processed = true; // bool | A flag that can be set to `true` boolean value to mark it as an event that has beebn actioned.
$sort_by = "companyName"; // string | Sort results by this column. Null values of sort column are listed after non-nulls.

try {
    $apiInstance->listCompanySpecificNotificationEvents($authorization, $portfolio_id, $id, $search_query, $sort_dir, $page_size, $page, $is_processed, $sort_by);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listCompanySpecificNotificationEvents: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **string**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **id** | **string**| A company Safe Number or Connect ID. |
 **search_query** | **string**| Return notificationEvents that match the given value | [optional]
 **sort_dir** | **string**| The direction that you wish to sort results by. | [optional] [default to asc]
 **page_size** | **int**| Number of items to return per Page (max 1000) | [optional] [default to 50]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **is_processed** | **bool**| A flag that can be set to &#x60;true&#x60; boolean value to mark it as an event that has beebn actioned. | [optional]
 **sort_by** | **string**| Sort results by this column. Null values of sort column are listed after non-nulls. | [optional] [default to companyName]

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listCountriesOfMonitoredCompanies**
> \Swagger\Client\Model\ConnectMonitoringMonitoredCountriesInPortfolio listCountriesOfMonitoredCompanies($authorization, $portfolio_id)



Get a list of distinct countries of companies monitored within a portfolio.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->listCountriesOfMonitoredCompanies($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listCountriesOfMonitoredCompanies: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringMonitoredCountriesInPortfolio**](../Model/ConnectMonitoringMonitoredCountriesInPortfolio.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPortfolioEventRules**
> \Swagger\Client\Model\ConnectMonitoringListPortfolioEventRules listPortfolioEventRules($authorization, $portfolio_id)



Get all notification `eventRules` for the given `portfolioId`. Notification event rules allow you to control which events you wish to monitor for the `companies` contained within the given `portfolio`.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier for the portfolio that you wish to retrieve notification event rules for, obtained from `/portfolios`.

try {
    $result = $apiInstance->listPortfolioEventRules($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listPortfolioEventRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier for the portfolio that you wish to retrieve notification event rules for, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringListPortfolioEventRules**](../Model/ConnectMonitoringListPortfolioEventRules.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPortfolioEventRulesByCountry**
> \Swagger\Client\Model\ConnectMonitoringListPortfolioEventRules listPortfolioEventRulesByCountry($authorization, $portfolio_id, $country_code)



Endpoint to that lists all the eventRules, their status and parameters based on a portfolio Id, filtered by country. Newly created portfolios are without any notification event rules by default, but you can switch rules on/off per country or on a global basis. There are different rules available for each country due to the different type of change event data that's available. The following GET request lists all the available rules for a portfolio.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$country_code = "country_code_example"; // string | Country code to show events for.

try {
    $result = $apiInstance->listPortfolioEventRulesByCountry($authorization, $portfolio_id, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listPortfolioEventRulesByCountry: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **country_code** | **string**| Country code to show events for. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringListPortfolioEventRules**](../Model/ConnectMonitoringListPortfolioEventRules.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listPortfolioNotifications**
> \Swagger\Client\Model\ConnectMonitoringAllNotificationsEvents listPortfolioNotifications($authorization, $portfolio_id, $search_query, $sort_by, $sort_dir, $page_size, $page, $start_date, $end_date, $filter_by_created_date)



Get all notificationEvents based on the portfolio id, optionally filter with query parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$search_query = "search_query_example"; // string | Return notificationEvents that match the given value
$sort_by = "companyName"; // string | Sort results by this column. Null values of sort column are listed after non-nulls.
$sort_dir = "asc"; // string | The direction that you wish to sort results by.
$page_size = 56; // int | Number of items to return per Page.
$page = 1; // int | Starting page number.
$start_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The start date on which results are filtered.
$end_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The end date on which results are filtered.
$filter_by_created_date = false; // bool | Set to `true` to filter the Notification Events of the \"createdDate\" field when using `startDate` and `endDate` parameters. By default this is set to `false`, with the date paramters filtering using the \"eventDate\" field.

try {
    $result = $apiInstance->listPortfolioNotifications($authorization, $portfolio_id, $search_query, $sort_by, $sort_dir, $page_size, $page, $start_date, $end_date, $filter_by_created_date);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->listPortfolioNotifications: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **search_query** | **string**| Return notificationEvents that match the given value | [optional]
 **sort_by** | **string**| Sort results by this column. Null values of sort column are listed after non-nulls. | [optional] [default to companyName]
 **sort_dir** | **string**| The direction that you wish to sort results by. | [optional] [default to asc]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **start_date** | **\DateTime**| The start date on which results are filtered. | [optional]
 **end_date** | **\DateTime**| The end date on which results are filtered. | [optional]
 **filter_by_created_date** | **bool**| Set to &#x60;true&#x60; to filter the Notification Events of the \&quot;createdDate\&quot; field when using &#x60;startDate&#x60; and &#x60;endDate&#x60; parameters. By default this is set to &#x60;false&#x60;, with the date paramters filtering using the \&quot;eventDate\&quot; field. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringAllNotificationsEvents**](../Model/ConnectMonitoringAllNotificationsEvents.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **monitoringUserDetails**
> \Swagger\Client\Model\ConnectMonitoringUserDetails monitoringUserDetails($authorization)



Returns all user details relating to the Global Monitoring product.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->monitoringUserDetails($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->monitoringUserDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringUserDetails**](../Model/ConnectMonitoringUserDetails.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **moveCompaniesBetweenPortfolios**
> \Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesResponse moveCompaniesBetweenPortfolios($body, $authorization, $portfolio_id, $remove_all)



Move companies from one portfolio to single (or) multiple portfolios. Removes the companies from the portfolio provided in the path parameter.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesRequest(); // \Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesRequest | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio you want to move companies from, obtained from `/portfolios`.
$remove_all = false; // bool | When RemoveAll queryparameter is False, portfolios and companies List needs to be passed. When RemoveAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are moved and deleted from current portfolio.

try {
    $result = $apiInstance->moveCompaniesBetweenPortfolios($body, $authorization, $portfolio_id, $remove_all);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->moveCompaniesBetweenPortfolios: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesRequest**](../Model/ConnectMonitoringCopyAndMoveCompaniesRequest.md)|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio you want to move companies from, obtained from &#x60;/portfolios&#x60;. |
 **remove_all** | **bool**| When RemoveAll queryparameter is False, portfolios and companies List needs to be passed. When RemoveAll queryparameter is True, only portfolios need to be passed and companies List must be empty. All companies are moved and deleted from current portfolio. | [optional] [default to false]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringCopyAndMoveCompaniesResponse**](../Model/ConnectMonitoringCopyAndMoveCompaniesResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portfolioUserPermissions**
> \Swagger\Client\Model\ConnectMonitoringListSharingPermissions portfolioUserPermissions($authorization, $portfolio_id)



Retrieve user permissions within the customer for a portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->portfolioUserPermissions($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->portfolioUserPermissions: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringListSharingPermissions**](../Model/ConnectMonitoringListSharingPermissions.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **portoflioRiskSummary**
> \Swagger\Client\Model\ConnectMonitoringRiskSummary portoflioRiskSummary($authorization, $portfolio_id)



Get current portfolio risk summary information

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->portoflioRiskSummary($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->portoflioRiskSummary: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringRiskSummary**](../Model/ConnectMonitoringRiskSummary.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievePortfolioById**
> \Swagger\Client\Model\ConnectMonitoringGetPortfolioById retrievePortfolioById($authorization, $portfolio_id)



Get the portfolio details such as name and default status with portfolioId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier for the portfolio that you wish to retrieve, obtained from `/portfolios`.

try {
    $result = $apiInstance->retrievePortfolioById($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->retrievePortfolioById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier for the portfolio that you wish to retrieve, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringGetPortfolioById**](../Model/ConnectMonitoringGetPortfolioById.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **setPortfolioDefaultRules**
> \Swagger\Client\Model\InlineResponse204 setPortfolioDefaultRules($authorization, $portfolio_id)



Update a portfolios event rules to default state. In Connect, default state means all rules are turned off.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->setPortfolioDefaultRules($authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->setPortfolioDefaultRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **sharePortfolioWithUsers**
> \Swagger\Client\Model\ConnectMonitoringSharePortfolioRequestResponse sharePortfolioWithUsers($body, $authorization, $portfolio_id)



Update/Create user permissions within the customer for portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectMonitoringSharePortfolioRequest(); // \Swagger\Client\Model\ConnectMonitoringSharePortfolioRequest | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->sharePortfolioWithUsers($body, $authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->sharePortfolioWithUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringSharePortfolioRequest**](../Model/ConnectMonitoringSharePortfolioRequest.md)|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringSharePortfolioRequestResponse**](../Model/ConnectMonitoringSharePortfolioRequestResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **syncAPortfolioFile**
> \Swagger\Client\Model\ConnectMonitoringImportAndSyncPortfolioResponse syncAPortfolioFile($importcsv, $email, $authorization, $portfolio_id)



Endpoint allows you to sync a portfolio file with your portfolio. Sync action will delete all companies in your specified portfolio, and then add the companies from the file into the portfolio.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$importcsv = "importcsv_example"; // string | 
$email = "email_example"; // string | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->syncAPortfolioFile($importcsv, $email, $authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->syncAPortfolioFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **importcsv** | **string****string**|  |
 **email** | **string**|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectMonitoringImportAndSyncPortfolioResponse**](../Model/ConnectMonitoringImportAndSyncPortfolioResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: multipart/form-data
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateCompanyDetailsInPortfolio**
> updateCompanyDetailsInPortfolio($authorization, $portfolio_id, $company_id, $body)



Updates the company details in a specified portfolio

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$company_id = "company_id_example"; // string | A company Safe Number or Connect ID.
$body = new \Swagger\Client\Model\ConnectMonitoringUpdateCompanyDetailsInPortfolioRequest(); // \Swagger\Client\Model\ConnectMonitoringUpdateCompanyDetailsInPortfolioRequest | 

try {
    $apiInstance->updateCompanyDetailsInPortfolio($authorization, $portfolio_id, $company_id, $body);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->updateCompanyDetailsInPortfolio: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **company_id** | **string**| A company Safe Number or Connect ID. |
 **body** | [**\Swagger\Client\Model\ConnectMonitoringUpdateCompanyDetailsInPortfolioRequest**](../Model/ConnectMonitoringUpdateCompanyDetailsInPortfolioRequest.md)|  | [optional]

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateEventRules**
> \Swagger\Client\Model\InlineResponse204 updateEventRules($body, $authorization, $portfolio_id, $country_code)



Endpoint to update an eventRule in a portfolio. Must provide a portfolio unique identifier and a country code in the URL of the PUT request. The Body of the request must contain the `ruleCode` number of the eventRule you want to update, with an `isActive` parameter. Some event rules may also contain specific parameters, which can be set with `param0`, `param1` and `param2`. parameters. Get the above information by calling the List All eventRules endpoint.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = array(new \Swagger\Client\Model\ConnectMonitoringUpdateEventRulesBody()); // \Swagger\Client\Model\ConnectMonitoringUpdateEventRulesBody[] | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$country_code = "country_code_example"; // string | Country code to show events for

try {
    $result = $apiInstance->updateEventRules($body, $authorization, $portfolio_id, $country_code);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->updateEventRules: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringUpdateEventRulesBody[]**](../Model/ConnectMonitoringUpdateEventRulesBody.md)|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **country_code** | **string**| Country code to show events for |

### Return type

[**\Swagger\Client\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateIsProcessedFlag**
> \Swagger\Client\Model\ConnectMonitoringIsProcessedResponse updateIsProcessedFlag($authorization, $portfolio_id, $notification_event_id, $body)



WARNING -  This endpoint will depreciate during the last week of January 2021 and will not be usable anymore. We recommend to utilize the `filterByCreatedDate` path parameter on the `/notificationEvents` endpoints to return exact Notification Events that have triggered on the specific day/date range.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.
$notification_event_id = 1.2; // float | A unique notification event ID.
$body = new \Swagger\Client\Model\ConnectMonitoringIsProcessedRequest(); // \Swagger\Client\Model\ConnectMonitoringIsProcessedRequest | 

try {
    $result = $apiInstance->updateIsProcessedFlag($authorization, $portfolio_id, $notification_event_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->updateIsProcessedFlag: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |
 **notification_event_id** | **float**| A unique notification event ID. |
 **body** | [**\Swagger\Client\Model\ConnectMonitoringIsProcessedRequest**](../Model/ConnectMonitoringIsProcessedRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectMonitoringIsProcessedResponse**](../Model/ConnectMonitoringIsProcessedResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updatePortfolioDetails**
> \Swagger\Client\Model\InlineResponse204 updatePortfolioDetails($body, $authorization, $portfolio_id)



Update Portfolio details such as Name, email recipients, language and subject line.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GlobalMonitoringApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectMonitoringUpdatePortfolioRequest(); // \Swagger\Client\Model\ConnectMonitoringUpdatePortfolioRequest | 
$authorization = "authorization_example"; // string | Authorization Token
$portfolio_id = 1.2; // float | The unique identifier of the portfolio, obtained from `/portfolios`.

try {
    $result = $apiInstance->updatePortfolioDetails($body, $authorization, $portfolio_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GlobalMonitoringApi->updatePortfolioDetails: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectMonitoringUpdatePortfolioRequest**](../Model/ConnectMonitoringUpdatePortfolioRequest.md)|  |
 **authorization** | **string**| Authorization Token |
 **portfolio_id** | **float**| The unique identifier of the portfolio, obtained from &#x60;/portfolios&#x60;. |

### Return type

[**\Swagger\Client\Model\InlineResponse204**](../Model/InlineResponse204.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

