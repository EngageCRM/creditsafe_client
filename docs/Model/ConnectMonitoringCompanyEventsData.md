# ConnectMonitoringCompanyEventsData

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**event_id** | **float** | The unique identifier for the event. | [optional] 
**company_id** | **string** | The Safe Number (Creditsafe&#x27;s identifier on all Companies owned in the Creditsafe Universe) of the company that triggered the event. | [optional] 
**portfolio_id** | **float** | The portfolio Id of the portfolio that contains the company that you requested event information for. | [optional] 
**rule_name** | **string** | A short description of the company event. | [optional] 
**local_event_code** | **string** | The local event code for the event. | [optional] 
**global_event_code** | **string** | The global event code that has been mapped to the local event. | [optional] 
**new_value** | **string** | Some events contain an &#x60;oldValue&#x60; and &#x60;newValue&#x60; (e.g. a change in Credit Limit). | [optional] 
**old_value** | **string** | Some events contain an &#x60;oldValue&#x60; and &#x60;newValue&#x60; (e.g. a change in Credit Limit). | [optional] 
**event_date** | [**\DateTime**](\DateTime.md) | The date that the event occured. | [optional] 
**created_date** | [**\DateTime**](\DateTime.md) | The date that the event was created in the Creditsafe database. | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

