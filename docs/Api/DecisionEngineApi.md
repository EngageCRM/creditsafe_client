# Swagger\Client\DecisionEngineApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**decisionHistory**](DecisionEngineApi.md#decisionhistory) | **GET** /decisionEngine/usageLog | 
[**decisionTrees**](DecisionEngineApi.md#decisiontrees) | **GET** /decisionEngine/GUID | 
[**getDecisionLog**](DecisionEngineApi.md#getdecisionlog) | **GET** /decisionEngine/usageLog/{decisionLogId} | 
[**runDecisionTree**](DecisionEngineApi.md#rundecisiontree) | **POST** /decisionEngine/{provenirId} | 
[**updateDecisionLog**](DecisionEngineApi.md#updatedecisionlog) | **PATCH** /decisionEngine/usageLog/{decisionLogId} | 
[**userDataFields**](DecisionEngineApi.md#userdatafields) | **GET** /decisionEngine/{provenirId}/userDataFields | 

# **decisionHistory**
> \Swagger\Client\Model\ConnectDecisionEngineUsageLogResponse decisionHistory($authorization, $provenir_id, $company_id, $company_name, $status, $from_date, $to_date, $page, $page_size)



Returns a log of all previously ran decisions that the user has permission to access, optionally filtered.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DecisionEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$provenir_id = "provenir_id_example"; // string | Filter the returned usage log by the GUID for the associated decision trees, obtained from `/GUID`.
$company_id = "company_id_example"; // string | Filter the returned usage log by the Connect ID for the associated companies for each decision.
$company_name = "company_name_example"; // string | Filter the returned usage log by the Company Name for the associated companies for each decision.
$status = 1.2; // float | Filter the returned usage log by the status for each decision.
$from_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the returned usage log by the date the the decision was run.
$to_date = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | Filter the returned usage log by the date the the decision was run.
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.

try {
    $result = $apiInstance->decisionHistory($authorization, $provenir_id, $company_id, $company_name, $status, $from_date, $to_date, $page, $page_size);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionEngineApi->decisionHistory: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **provenir_id** | **string**| Filter the returned usage log by the GUID for the associated decision trees, obtained from &#x60;/GUID&#x60;. | [optional]
 **company_id** | **string**| Filter the returned usage log by the Connect ID for the associated companies for each decision. | [optional]
 **company_name** | **string**| Filter the returned usage log by the Company Name for the associated companies for each decision. | [optional]
 **status** | **float**| Filter the returned usage log by the status for each decision. | [optional]
 **from_date** | **\DateTime**| Filter the returned usage log by the date the the decision was run. | [optional]
 **to_date** | **\DateTime**| Filter the returned usage log by the date the the decision was run. | [optional]
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectDecisionEngineUsageLogResponse**](../Model/ConnectDecisionEngineUsageLogResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **decisionTrees**
> \Swagger\Client\Model\ConnectDecisionEngineGUIDListReponse decisionTrees($authorization, $type)



Returns all decision trees that the user has permission to access.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DecisionEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$type = "type_example"; // string | Filter the returned decision trees by their associated decision tree type.

try {
    $result = $apiInstance->decisionTrees($authorization, $type);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionEngineApi->decisionTrees: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **type** | **string**| Filter the returned decision trees by their associated decision tree type. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectDecisionEngineGUIDListReponse**](../Model/ConnectDecisionEngineGUIDListReponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getDecisionLog**
> \Swagger\Client\Model\ConnectDecisionEngineDecisionLogResponse getDecisionLog($authorization, $decision_log_id)



Returns a specified decision log for a previously ran decision.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DecisionEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$decision_log_id = "decision_log_id_example"; // string | The unique identifier of the decision log to retrieve, obtained from `/usageLog`.

try {
    $result = $apiInstance->getDecisionLog($authorization, $decision_log_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionEngineApi->getDecisionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **decision_log_id** | **string**| The unique identifier of the decision log to retrieve, obtained from &#x60;/usageLog&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectDecisionEngineDecisionLogResponse**](../Model/ConnectDecisionEngineDecisionLogResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **runDecisionTree**
> \Swagger\Client\Model\ConnectDecisionEngineRunDecisionResponse runDecisionTree($authorization, $company_id, $provenir_id, $body, $origination_id)



Runs the provided decision tree for the given company, optionally using the data provided in the body of the call.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DecisionEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$company_id = "company_id_example"; // string | The Connect ID for the company that you wish to run the decision tree on. Obtained from `/companies` search results. A Connect ID is the primary Company identifier that is used to uniquely identify all companies across Creditsafe's Universe and Partner Network.
$provenir_id = "provenir_id_example"; // string | The unique identifier of the decision tree to run, obtained from `/GUID`.
$body = new \stdClass; // object | 
$origination_id = "origination_id_example"; // string | An optional field that will allow text passed through to be stored against the decision. Typically used for internal identifiers (e.g. SalesForce IDs).

try {
    $result = $apiInstance->runDecisionTree($authorization, $company_id, $provenir_id, $body, $origination_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionEngineApi->runDecisionTree: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **company_id** | **string**| The Connect ID for the company that you wish to run the decision tree on. Obtained from &#x60;/companies&#x60; search results. A Connect ID is the primary Company identifier that is used to uniquely identify all companies across Creditsafe&#x27;s Universe and Partner Network. |
 **provenir_id** | **string**| The unique identifier of the decision tree to run, obtained from &#x60;/GUID&#x60;. |
 **body** | [**object**](../Model/object.md)|  | [optional]
 **origination_id** | **string**| An optional field that will allow text passed through to be stored against the decision. Typically used for internal identifiers (e.g. SalesForce IDs). | [optional]

### Return type

[**\Swagger\Client\Model\ConnectDecisionEngineRunDecisionResponse**](../Model/ConnectDecisionEngineRunDecisionResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **updateDecisionLog**
> \Swagger\Client\Model\ConnectDecisionEngineDecisionLogResponse updateDecisionLog($authorization, $decision_log_id, $body)



Updates the status and/or notes for a specified decision.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DecisionEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$decision_log_id = "decision_log_id_example"; // string | The unique identifier of the decision log to retrieve, obtained from `/usageLog`.
$body = new \Swagger\Client\Model\ConnectDecisionEngineUpdateDecisionRequest(); // \Swagger\Client\Model\ConnectDecisionEngineUpdateDecisionRequest | 

try {
    $result = $apiInstance->updateDecisionLog($authorization, $decision_log_id, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionEngineApi->updateDecisionLog: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **decision_log_id** | **string**| The unique identifier of the decision log to retrieve, obtained from &#x60;/usageLog&#x60;. |
 **body** | [**\Swagger\Client\Model\ConnectDecisionEngineUpdateDecisionRequest**](../Model/ConnectDecisionEngineUpdateDecisionRequest.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectDecisionEngineDecisionLogResponse**](../Model/ConnectDecisionEngineDecisionLogResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **userDataFields**
> \Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponse userDataFields($authorization, $provenir_id)



Returns the user data fields defined for the given decision tree GUID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\DecisionEngineApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$provenir_id = "provenir_id_example"; // string | The unique identifier of the decision tree, obtained from `/GUID`.

try {
    $result = $apiInstance->userDataFields($authorization, $provenir_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling DecisionEngineApi->userDataFields: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **provenir_id** | **string**| The unique identifier of the decision tree, obtained from &#x60;/GUID&#x60;. |

### Return type

[**\Swagger\Client\Model\ConnectDecisionEngineUserDataFieldsResponse**](../Model/ConnectDecisionEngineUserDataFieldsResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

