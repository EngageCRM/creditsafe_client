# Swagger\Client\LocalSolutionsApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**bankMatch**](LocalSolutionsApi.md#bankmatch) | **GET** /localSolutions/GB/bankmatch | 
[**retrievesCCDSData**](LocalSolutionsApi.md#retrievesccdsdata) | **GET** /localSolutions/GB/CCDS/{companyId} | 

# **bankMatch**
> \Swagger\Client\Model\ConnectBankMatchResult bankMatch($authorization, $check_type, $company_id, $sort_code, $account_number, $iban, $vat_number)



The Bank Verification tool allows customers to instantly verify that small and medium sized companies you are working with are providing correct bank details, to reduce fraud and avoid delays in your on boarding process. The bank data for these companies is provided to Creditsafe by various financial providers, including major banks. When you provide us with a company number and their bank details, we are able to perform instant checks to verify that those bank details are associated with that company and return - </br> Match – We have bank information on the company, and the data provided by the customer matches the company records </br> No Match – We have bank information on the company, but the data provided does not match any of the company records </br> Data Unavailable - We do not have bank information on the company.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LocalSolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$check_type = "check_type_example"; // string | Validation uses an algorithm to determine if a SCAN or IBAN exists, but does not let you know if that SCAN or IBAN actually belongs to the company who has provided it. Verification takes this a step further and checks the Creditsafe database for a match on the SCAN/IBAN, and tells you if the bank details actually belong to the company, so you can be assured that you are sending your money to the correct entity.
$company_id = "company_id_example"; // string | The connectId or safeNumber of the company to check against.
$sort_code = "sort_code_example"; // string | Sort Code to check - Must be passed in with Account Number to form a SCAN Result
$account_number = "account_number_example"; // string | Account Number to check - Must be passed in with Sort Code to form a SCAN Result
$iban = "iban_example"; // string | IBAN to check
$vat_number = "vat_number_example"; // string | VAT Number to check

try {
    $result = $apiInstance->bankMatch($authorization, $check_type, $company_id, $sort_code, $account_number, $iban, $vat_number);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalSolutionsApi->bankMatch: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **check_type** | [**string**](../Model/.md)| Validation uses an algorithm to determine if a SCAN or IBAN exists, but does not let you know if that SCAN or IBAN actually belongs to the company who has provided it. Verification takes this a step further and checks the Creditsafe database for a match on the SCAN/IBAN, and tells you if the bank details actually belong to the company, so you can be assured that you are sending your money to the correct entity. |
 **company_id** | **string**| The connectId or safeNumber of the company to check against. |
 **sort_code** | **string**| Sort Code to check - Must be passed in with Account Number to form a SCAN Result | [optional]
 **account_number** | **string**| Account Number to check - Must be passed in with Sort Code to form a SCAN Result | [optional]
 **iban** | **string**| IBAN to check | [optional]
 **vat_number** | **string**| VAT Number to check | [optional]

### Return type

[**\Swagger\Client\Model\ConnectBankMatchResult**](../Model/ConnectBankMatchResult.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **retrievesCCDSData**
> \Swagger\Client\Model\ConnectBankMatchCCDS retrievesCCDSData($authorization, $company_id)



Gets CCDS data of the supplied company

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\LocalSolutionsApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$company_id = "company_id_example"; // string | The connectId or safeNumber of the company

try {
    $result = $apiInstance->retrievesCCDSData($authorization, $company_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling LocalSolutionsApi->retrievesCCDSData: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **company_id** | **string**| The connectId or safeNumber of the company |

### Return type

[**\Swagger\Client\Model\ConnectBankMatchCCDS**](../Model/ConnectBankMatchCCDS.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

