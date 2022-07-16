# Swagger\Client\ProtectApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**addInvestigationToProfile**](ProtectApi.md#addinvestigationtoprofile) | **PUT** /protect/profiles/{profileId}/investigations/{investigationId} | 
[**addMatchToInvestigation**](ProtectApi.md#addmatchtoinvestigation) | **POST** /protect/investigations/{investigationId}/records | 
[**createProtectInvestigation**](ProtectApi.md#createprotectinvestigation) | **POST** /protect/investigations | 
[**createProtectInvestigationPDF**](ProtectApi.md#createprotectinvestigationpdf) | **POST** /protect/investigations/{investigationId}/file | 
[**createProtectProfile**](ProtectApi.md#createprotectprofile) | **POST** /protect/profiles | 
[**createProtectSchedule**](ProtectApi.md#createprotectschedule) | **POST** /protect/schedules | 
[**editProtectProfile**](ProtectApi.md#editprotectprofile) | **PUT** /protect/profiles/{profileId} | 
[**exportAuditLogFile**](ProtectApi.md#exportauditlogfile) | **POST** /protect/audits/file | 
[**listAllProtectInvestigations**](ProtectApi.md#listallprotectinvestigations) | **GET** /protect/investigations | 
[**listAllProtectProfiles**](ProtectApi.md#listallprotectprofiles) | **GET** /protect/profiles | 
[**listInvestigationsInAProfile**](ProtectApi.md#listinvestigationsinaprofile) | **GET** /protect/profiles/{profileId}/investigations | 
[**listMatchesPerInvestigation**](ProtectApi.md#listmatchesperinvestigation) | **GET** /protect/investigations/{investigationId}/records | 
[**protectSchedulesScheduleIdDelete**](ProtectApi.md#protectschedulesscheduleiddelete) | **DELETE** /protect/schedules/{scheduleId} | 
[**retrieveProtectAuditLog**](ProtectApi.md#retrieveprotectauditlog) | **GET** /protect/audits | 
[**retrieveProtectInvestigationById**](ProtectApi.md#retrieveprotectinvestigationbyid) | **GET** /protect/investigations/{investigationId} | 
[**retrieveProtectProfileByID**](ProtectApi.md#retrieveprotectprofilebyid) | **GET** /protect/profiles/{profileId} | 
[**retrieveScheduleById**](ProtectApi.md#retrieveschedulebyid) | **GET** /protect/schedules/{scheduleId} | 

# **addInvestigationToProfile**
> addInvestigationToProfile($authorization, $profile_id, $investigation_id)



Adds an Invesitgation to a Profile

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$profile_id = "profile_id_example"; // string | 
$investigation_id = "investigation_id_example"; // string | 

try {
    $apiInstance->addInvestigationToProfile($authorization, $profile_id, $investigation_id);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->addInvestigationToProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **profile_id** | **string**|  |
 **investigation_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **addMatchToInvestigation**
> \Swagger\Client\Model\ConnectProtectRecord[] addMatchToInvestigation($body, $authorization, $investigation_id)



Endpoint to add InvestigationRecords to an Investigation. By adding InvestigationRecords you are confirming that the result is a match to your search criteria.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectCreateInvestigationRecordBody(); // \Swagger\Client\Model\ConnectProtectCreateInvestigationRecordBody | 
$authorization = "authorization_example"; // string | Authorization Token
$investigation_id = "investigation_id_example"; // string | 

try {
    $result = $apiInstance->addMatchToInvestigation($body, $authorization, $investigation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->addMatchToInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectCreateInvestigationRecordBody**](../Model/ConnectProtectCreateInvestigationRecordBody.md)|  |
 **authorization** | **string**| Authorization Token |
 **investigation_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectProtectRecord[]**](../Model/ConnectProtectRecord.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProtectInvestigation**
> \Swagger\Client\Model\ConnectProtectInvestigationResponse createProtectInvestigation($body, $authorization)



Creates an Investigation according to the provided Investigation criteria. Each result is potential match which is attributed a relevancy/match score between 1-100 and a high level reason for it's inclusion in the World Compliance Database by looking at the Reason Listed and Comments to firstly ascertain whether the entry is a match for you search criteria and then utilise the data available for your own onboarding needs.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto(); // \Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto | 
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->createProtectInvestigation($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->createProtectInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto**](../Model/ConnectProtectCreateInvestigationQueryDto.md)|  |
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectProtectInvestigationResponse**](../Model/ConnectProtectInvestigationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProtectInvestigationPDF**
> \Swagger\Client\Model\ConnectProtectInvestigationFileResponse createProtectInvestigationPDF($body, $authorization, $investigation_id)



Creates a LexisNexis branded PDF that shows the full report for the selected entities. This report will include search criteria used, user, time/date stamp and full LexisNexis World Compliance Report. It is recommended to call this endpoint before adding InvestigationRecords to an Investigation, as only non-processed alerts populate the PDF.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectGetInvestigationFileBodyDto(); // \Swagger\Client\Model\ConnectProtectGetInvestigationFileBodyDto | 
$authorization = "authorization_example"; // string | Authorization Token
$investigation_id = "investigation_id_example"; // string | 

try {
    $result = $apiInstance->createProtectInvestigationPDF($body, $authorization, $investigation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->createProtectInvestigationPDF: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectGetInvestigationFileBodyDto**](../Model/ConnectProtectGetInvestigationFileBodyDto.md)|  |
 **authorization** | **string**| Authorization Token |
 **investigation_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectProtectInvestigationFileResponse**](../Model/ConnectProtectInvestigationFileResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProtectProfile**
> \Swagger\Client\Model\ConnectProtectProfile createProtectProfile($body, $authorization)



Creates a profile. Profiles can be used as an additional category to group related investigations together. For instance - You may want to investigate all  Branches, Directors and Shareholders of one business, and keep them in the same Profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectCreateProfileDto(); // \Swagger\Client\Model\ConnectProtectCreateProfileDto | 
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->createProtectProfile($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->createProtectProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectCreateProfileDto**](../Model/ConnectProtectCreateProfileDto.md)|  |
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectProtectProfile**](../Model/ConnectProtectProfile.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **createProtectSchedule**
> \Swagger\Client\Model\ConnectProtectSchedule createProtectSchedule($body, $authorization)



Creates a Schedule. A Schedule has a 1:1 relationship with an Investigation. Investigations that are scheduled will automatically check for new re-screen your initial search criteria on a nightly basis allowing you to review any new alerts each day.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectCreateScheduleDto(); // \Swagger\Client\Model\ConnectProtectCreateScheduleDto | 
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->createProtectSchedule($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->createProtectSchedule: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectCreateScheduleDto**](../Model/ConnectProtectCreateScheduleDto.md)|  |
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectProtectSchedule**](../Model/ConnectProtectSchedule.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **editProtectProfile**
> \Swagger\Client\Model\ConnectProtectProfile editProtectProfile($body, $authorization, $profile_id)



Endpoint to change the name of a profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectCreateProfileDto(); // \Swagger\Client\Model\ConnectProtectCreateProfileDto | 
$authorization = "authorization_example"; // string | Authorization Token
$profile_id = "profile_id_example"; // string | 

try {
    $result = $apiInstance->editProtectProfile($body, $authorization, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->editProtectProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectCreateProfileDto**](../Model/ConnectProtectCreateProfileDto.md)|  |
 **authorization** | **string**| Authorization Token |
 **profile_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectProtectProfile**](../Model/ConnectProtectProfile.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **exportAuditLogFile**
> \Swagger\Client\Model\ConnectProtectAuditsExportResponseDto exportAuditLogFile($body, $authorization)



Produces a collection a csv of Audit records.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectProtectAuditExportRequestDto(); // \Swagger\Client\Model\ConnectProtectAuditExportRequestDto | 
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->exportAuditLogFile($body, $authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->exportAuditLogFile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectProtectAuditExportRequestDto**](../Model/ConnectProtectAuditExportRequestDto.md)|  |
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectProtectAuditsExportResponseDto**](../Model/ConnectProtectAuditsExportResponseDto.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllProtectInvestigations**
> \Swagger\Client\Model\ConnectProtectInvestigation[] listAllProtectInvestigations($authorization, $scheduled, $alerts_count, $query_type, $page, $page_size)



Endpoint to return all investigations. Filter response by using query parameters. Use the alertsCount parameter to only return Investigations with alerts greater than the supplied value.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$scheduled = true; // bool | 
$alerts_count = 56; // int | 
$query_type = new \Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto(); // \Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto | 
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->listAllProtectInvestigations($authorization, $scheduled, $alerts_count, $query_type, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->listAllProtectInvestigations: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **scheduled** | **bool**|  | [optional]
 **alerts_count** | **int**|  | [optional]
 **query_type** | [**\Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto**](../Model/.md)|  | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectProtectInvestigation[]**](../Model/ConnectProtectInvestigation.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listAllProtectProfiles**
> \Swagger\Client\Model\ConnectProtectProfile[] listAllProtectProfiles($authorization, $name, $page, $page_size)



Returns all profiles or filtered with a matching profile name.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$name = "name_example"; // string | 
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->listAllProtectProfiles($authorization, $name, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->listAllProtectProfiles: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **name** | **string**|  | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectProtectProfile[]**](../Model/ConnectProtectProfile.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listInvestigationsInAProfile**
> \Swagger\Client\Model\ConnectProtectInvestigation[] listInvestigationsInAProfile($authorization, $profile_id, $query_type, $page, $page_size)



Endpoint to retrieve all Investigations associated with a specific Profile.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$profile_id = "profile_id_example"; // string | 
$query_type = new \Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto(); // \Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto | 
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->listInvestigationsInAProfile($authorization, $profile_id, $query_type, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->listInvestigationsInAProfile: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **profile_id** | **string**|  |
 **query_type** | [**\Swagger\Client\Model\ConnectProtectCreateInvestigationQueryDto**](../Model/.md)|  | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectProtectInvestigation[]**](../Model/ConnectProtectInvestigation.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **listMatchesPerInvestigation**
> \Swagger\Client\Model\ConnectProtectRecord[] listMatchesPerInvestigation($authorization, $investigation_id, $page, $page_size)



Endpoint to return all InvestigationRecords (matches) against an Investigation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$investigation_id = "investigation_id_example"; // string | 
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->listMatchesPerInvestigation($authorization, $investigation_id, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->listMatchesPerInvestigation: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **investigation_id** | **string**|  |
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectProtectRecord[]**](../Model/ConnectProtectRecord.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **protectSchedulesScheduleIdDelete**
> protectSchedulesScheduleIdDelete($authorization, $schedule_id)



Deletes a Schedule from an Investigation meaning entity will no longer be monitored on a nightly basis but record will still remain in the audit trail

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$schedule_id = "schedule_id_example"; // string | 

try {
    $apiInstance->protectSchedulesScheduleIdDelete($authorization, $schedule_id);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->protectSchedulesScheduleIdDelete: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **schedule_id** | **string**|  |

### Return type

void (empty response body)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProtectAuditLog**
> \Swagger\Client\Model\ConnectProtectAuditDto[] retrieveProtectAuditLog($authorization, $page, $page_size, $type, $newer_than, $older_than, $profile_id, $order)



Returns logged interactions with Protect endpoints for audit purposes. Actions logged include creating an Investigation, InvestgiationRecord and Schedule.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$type = "type_example"; // string | 
$newer_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$older_than = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | 
$profile_id = "profile_id_example"; // string | 
$order = "order_example"; // string | 

try {
    $result = $apiInstance->retrieveProtectAuditLog($authorization, $page, $page_size, $type, $newer_than, $older_than, $profile_id, $order);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->retrieveProtectAuditLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **type** | **string**|  | [optional]
 **newer_than** | **\DateTime**|  | [optional]
 **older_than** | **\DateTime**|  | [optional]
 **profile_id** | **string**|  | [optional]
 **order** | **string**|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectProtectAuditDto[]**](../Model/ConnectProtectAuditDto.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProtectInvestigationById**
> \Swagger\Client\Model\ConnectProtectInvestigationResponse retrieveProtectInvestigationById($authorization, $investigation_id)



Endpoint to retrieve a specific Investigation by ID. Can also be used to retrieve the assoicated Scheduele Id that has been linked to the Investigation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$investigation_id = "investigation_id_example"; // string | 

try {
    $result = $apiInstance->retrieveProtectInvestigationById($authorization, $investigation_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->retrieveProtectInvestigationById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **investigation_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectProtectInvestigationResponse**](../Model/ConnectProtectInvestigationResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveProtectProfileByID**
> \Swagger\Client\Model\ConnectProtectProfile retrieveProtectProfileByID($authorization, $profile_id)



Endpoint to retrieve a profile by Id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$profile_id = "profile_id_example"; // string | 

try {
    $result = $apiInstance->retrieveProtectProfileByID($authorization, $profile_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->retrieveProtectProfileByID: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **profile_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectProtectProfile**](../Model/ConnectProtectProfile.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrieveScheduleById**
> \Swagger\Client\Model\ConnectProtectSchedule retrieveScheduleById($authorization, $schedule_id)



Endpoint to retrieve a specific Schedule by Id. A Schedule Id can be retrieved from the associated Investigation.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ProtectApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$schedule_id = "schedule_id_example"; // string | 

try {
    $result = $apiInstance->retrieveScheduleById($authorization, $schedule_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ProtectApi->retrieveScheduleById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **schedule_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectProtectSchedule**](../Model/ConnectProtectSchedule.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

