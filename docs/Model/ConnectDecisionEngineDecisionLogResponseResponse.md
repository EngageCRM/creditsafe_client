# ConnectDecisionEngineDecisionLogResponseResponse

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**decision** | **string** | The decision returned by the automated decision model. | [optional] 
**decision_text** | **string** | The text output to accompany the decision returned by the decision model. | [optional] 
**audits** | [**\Swagger\Client\Model\ConnectDecisionEngineUsageLogResponseResponseAudits[]**](ConnectDecisionEngineUsageLogResponseResponseAudits.md) | An array of audit values. The paramters output for audit are tailored and bespoke to each decision tree. | [optional] 
**status_code** | **string** | The status of the decision. Typically, 1 is reserved for positive outcomes, 2 for pending status and 3 for negative outcomes. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

