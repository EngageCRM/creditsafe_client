# Swagger\Client\ImagesApi

All URIs are relative to *https://connect.creditsafe.com/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**companyImage**](ImagesApi.md#companyimage) | **GET** /images/{imageId} | 
[**companyImageDocuments**](ImagesApi.md#companyimagedocuments) | **GET** /images/companies | 
[**imageDocumentCategoryTypes**](ImagesApi.md#imagedocumentcategorytypes) | **GET** /images/companies/types | 

# **companyImage**
> \Swagger\Client\Model\CreditsafeGlobalDataCoreAttachmentBinaryAttachment companyImage($authorization, $image_id)



Endpoint to order an Image Document by Image ID.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$image_id = "image_id_example"; // string | Image ID retrieved from `images/companies`

try {
    $result = $apiInstance->companyImage($authorization, $image_id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->companyImage: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **image_id** | **string**| Image ID retrieved from &#x60;images/companies&#x60; |

### Return type

[**\Swagger\Client\Model\CreditsafeGlobalDataCoreAttachmentBinaryAttachment**](../Model/CreditsafeGlobalDataCoreAttachmentBinaryAttachment.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **companyImageDocuments**
> \Swagger\Client\Model\ConnectImagesCompanyImages companyImageDocuments($authorization, $page, $page_size, $id, $older_than, $newer_than)



Returns the available Images for a given Company connectId.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$page = 1; // int | Starting page number.
$page_size = 56; // int | Number of items to return per Page.
$id = "id_example"; // string | The company's connectId.
$older_than = "older_than_example"; // string | Returns Images older than this date. Use with newerThan parameter.
$newer_than = "newer_than_example"; // string | Returns Images newer than this date. Use with olderThan parameter.

try {
    $result = $apiInstance->companyImageDocuments($authorization, $page, $page_size, $id, $older_than, $newer_than);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->companyImageDocuments: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **page** | **int**| Starting page number. | [optional] [default to 1]
 **page_size** | **int**| Number of items to return per Page. | [optional]
 **id** | **string**| The company&#x27;s connectId. | [optional]
 **older_than** | **string**| Returns Images older than this date. Use with newerThan parameter. | [optional]
 **newer_than** | **string**| Returns Images newer than this date. Use with olderThan parameter. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectImagesCompanyImages**](../Model/ConnectImagesCompanyImages.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **imageDocumentCategoryTypes**
> \Swagger\Client\Model\ConnectImagesCompanyImageTypes imageDocumentCategoryTypes($authorization, $countries)



Lists available Image Document formats, types and languages per country.

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');
    // Configure HTTP bearer authorization: bearerToken
    $config = Swagger\Client\Configuration::getDefaultConfiguration()
    ->setAccessToken('YOUR_ACCESS_TOKEN');


$apiInstance = new Swagger\Client\Api\ImagesApi(
    // If you want use custom http client, pass your client which implements `GuzzleHttp\ClientInterface`.
    // This is optional, `GuzzleHttp\Client` will be used as default.
    new GuzzleHttp\Client(),
    $config
);
$authorization = "authorization_example"; // string | Authorization Token
$countries = "countries_example"; // string | Filter Images by country.

try {
    $result = $apiInstance->imageDocumentCategoryTypes($authorization, $countries);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling ImagesApi->imageDocumentCategoryTypes: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **authorization** | **string**| Authorization Token |
 **countries** | **string**| Filter Images by country. | [optional]

### Return type

[**\Swagger\Client\Model\ConnectImagesCompanyImageTypes**](../Model/ConnectImagesCompanyImageTypes.md)

### Authorization

[bearerToken](../../README.md#bearerToken)

### HTTP request headers

 - **Content-Type**: Not defined
 - **Accept**: application/json

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

