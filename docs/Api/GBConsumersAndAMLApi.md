# Swagger\Client\GBConsumersAndAMLApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**localSolutionsGBIdentitysearchHistoryGet**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchhistoryget) | **GET** /localSolutions/GB/identitysearch/history | Gets a list of identitysearch history items
[**localSolutionsGBIdentitysearchHistoryUniqueIdGet**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchhistoryuniqueidget) | **GET** /localSolutions/GB/identitysearch/history/{uniqueId} | Retrieves a prior identitysearch result.
[**localSolutionsGBIdentitysearchHistoryUniqueIdInputGet**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchhistoryuniqueidinputget) | **GET** /localSolutions/GB/identitysearch/history/{uniqueId}/input | Retrieves a prior identitysearch&#x27;s input
[**localSolutionsGBIdentitysearchHistoryUniqueIdReferencePut**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchhistoryuniqueidreferenceput) | **PUT** /localSolutions/GB/identitysearch/history/{uniqueId}/reference | Sets the reference for an existing history item
[**localSolutionsGBIdentitysearchPost**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchpost) | **POST** /localSolutions/GB/identitysearch | Submits a GB Consumer or AML Search
[**localSolutionsGBIdentitysearchPut**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchput) | **PUT** /localSolutions/GB/identitysearch | Resolves a picklist against a given UniqueId
[**localSolutionsGBIdentitysearchRevalidationUniqueIdPut**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchrevalidationuniqueidput) | **PUT** /localSolutions/GB/identitysearch/revalidation/{uniqueId} | Revalidates a given identitysearch with additional documents
[**localSolutionsGBIdentitysearchSearchreasonsGet**](GBConsumersAndAMLApi.md#localsolutionsgbidentitysearchsearchreasonsget) | **GET** /localSolutions/GB/identitysearch/searchreasons | Gets identitysearch Reasons.

# **localSolutionsGBIdentitysearchHistoryGet**
> \Swagger\Client\Model\ConnectIdentityHistoryListResponse localSolutionsGBIdentitysearchHistoryGet($page, $page_size, $include_customer, $products, $date_from, $date_to, $keyword, $result)

Gets a list of identitysearch history items

Retrieves a paginated history list for the specified customer/user, filtered based on the include* parameters

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$page = 56; // int | The 1-indexed page number to fetch
$page_size = 56; // int | The page size number to fetch
$include_customer = true; // bool | If true, returns all results for this customer. Valid for senior users only.
$products = array(new \Swagger\Client\Model\ConnectIdentityProduct()); // \Swagger\Client\Model\ConnectIdentityProduct[] | The array of products to include
$date_from = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The earliest date to include
$date_to = new \DateTime("2013-10-20T19:20:30+01:00"); // \DateTime | The latest date to include
$keyword = "keyword_example"; // string | Include this string
$result = "result_example"; // string | Return only items with this result

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchHistoryGet($page, $page_size, $include_customer, $products, $date_from, $date_to, $keyword, $result);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchHistoryGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **page** | **int**| The 1-indexed page number to fetch | [optional]
 **page_size** | **int**| The page size number to fetch | [optional]
 **include_customer** | **bool**| If true, returns all results for this customer. Valid for senior users only. | [optional]
 **products** | [**\Swagger\Client\Model\ConnectIdentityProduct[]**](../Model/\Swagger\Client\Model\ConnectIdentityProduct.md)| The array of products to include | [optional]
 **date_from** | **\DateTime**| The earliest date to include | [optional]
 **date_to** | **\DateTime**| The latest date to include | [optional]
 **keyword** | **string**| Include this string | [optional]
 **result** | **string**| Return only items with this result | [optional]

### Return type

[**\Swagger\Client\Model\ConnectIdentityHistoryListResponse**](../Model/ConnectIdentityHistoryListResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchHistoryUniqueIdGet**
> \Swagger\Client\Model\ConnectIdentitySearchResult localSolutionsGBIdentitysearchHistoryUniqueIdGet($authorization, $unique_id)

Retrieves a prior identitysearch result.

Retrieves a prior search result. This will include the search input and any ID/AML searches, but as we cannot hold Consumer search results these are not included. Resubmission is necessary if an updated Consumer result is needed.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$unique_id = "unique_id_example"; // string | 

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchHistoryUniqueIdGet($authorization, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchHistoryUniqueIdGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **unique_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectIdentitySearchResult**](../Model/ConnectIdentitySearchResult.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchHistoryUniqueIdInputGet**
> \Swagger\Client\Model\ConnectIdentitySearchResult localSolutionsGBIdentitysearchHistoryUniqueIdInputGet($authorization, $unique_id)

Retrieves a prior identitysearch's input

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$unique_id = "unique_id_example"; // string | 

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchHistoryUniqueIdInputGet($authorization, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchHistoryUniqueIdInputGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **unique_id** | **string**|  |

### Return type

[**\Swagger\Client\Model\ConnectIdentitySearchResult**](../Model/ConnectIdentitySearchResult.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchHistoryUniqueIdReferencePut**
> string localSolutionsGBIdentitysearchHistoryUniqueIdReferencePut($body, $authorization, $unique_id)

Sets the reference for an existing history item

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = "body_example"; // string | 
$authorization = "authorization_example"; // string | Authorization Token
$unique_id = "unique_id_example"; // string | The ID of the record to update

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchHistoryUniqueIdReferencePut($body, $authorization, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchHistoryUniqueIdReferencePut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**string**](../Model/string.md)|  |
 **authorization** | **string**| Authorization Token |
 **unique_id** | **string**| The ID of the record to update |

### Return type

**string**

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchPost**
> \Swagger\Client\Model\ConnectIdentitySearchResult localSolutionsGBIdentitysearchPost($authorization, $body)

Submits a GB Consumer or AML Search

Submits a GB Consumer or AML depnding on the Product provided. Validates criteria for each individual search before submitting, and may return a list of error strings instead.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$body = new \Swagger\Client\Model\null(); //  | Select the `products` tab for the request body for each of the products `AML` and `Consumer`

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchPost($authorization, $body);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchPost: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **body** | [****](../Model/.md)| Select the &#x60;products&#x60; tab for the request body for each of the products &#x60;AML&#x60; and &#x60;Consumer&#x60; | [optional]

### Return type

[**\Swagger\Client\Model\ConnectIdentitySearchResult**](../Model/ConnectIdentitySearchResult.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchPut**
> \Swagger\Client\Model\ConnectIdentitySearchResult localSolutionsGBIdentitysearchPut($authorization, $body, $resolved)

Resolves a picklist against a given UniqueId

Resolves a picklist belonging to the specified UniqueID, which would have been generated during a prior search. Guids (and thus cached searches) expire after fifteen minutes.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$body = new \stdClass; // object | 
$resolved = array("resolved_example"); // string[] | 

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchPut($authorization, $body, $resolved);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **body** | [**object**](../Model/object.md)|  | [optional]
 **resolved** | [**string[]**](../Model/string.md)|  | [optional]

### Return type

[**\Swagger\Client\Model\ConnectIdentitySearchResult**](../Model/ConnectIdentitySearchResult.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchRevalidationUniqueIdPut**
> \Swagger\Client\Model\ConnectIdentitySearchResult localSolutionsGBIdentitysearchRevalidationUniqueIdPut($body, $authorization, $unique_id)

Revalidates a given identitysearch with additional documents

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$body = new \Swagger\Client\Model\ConnectIdentityRevalidateRequest(); // \Swagger\Client\Model\ConnectIdentityRevalidateRequest | 
$authorization = "authorization_example"; // string | Authorization Token
$unique_id = "unique_id_example"; // string | The ID of the record to update

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchRevalidationUniqueIdPut($body, $authorization, $unique_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchRevalidationUniqueIdPut: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **body** | [**\Swagger\Client\Model\ConnectIdentityRevalidateRequest**](../Model/ConnectIdentityRevalidateRequest.md)|  |
 **authorization** | **string**| Authorization Token |
 **unique_id** | **string**| The ID of the record to update |

### Return type

[**\Swagger\Client\Model\ConnectIdentitySearchResult**](../Model/ConnectIdentitySearchResult.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: application/json
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **localSolutionsGBIdentitysearchSearchreasonsGet**
> \Swagger\Client\Model\ConnectIdentityReasonResponse localSolutionsGBIdentitysearchSearchreasonsGet($authorization)

Gets identitysearch Reasons.

Returns an object describing which Reasons for Search are available and which are selected by a given customer. All reasons are always listed, with selected reasons specified as true.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\GBConsumersAndAMLApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token

try {
    $result = $apiInstance->localSolutionsGBIdentitysearchSearchreasonsGet($authorization);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling GBConsumersAndAMLApi->localSolutionsGBIdentitysearchSearchreasonsGet: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |

### Return type

[**\Swagger\Client\Model\ConnectIdentityReasonResponse**](../Model/ConnectIdentityReasonResponse.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

