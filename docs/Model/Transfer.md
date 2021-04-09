# # Transfer

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**funding_source** | [**\OpenAPI\Client\Model\FundingSource**](FundingSource.md) |  | [optional]
**transaction_date** | **string** | This timestamp indicates the date/time of the transfer. The following (UTC) format is used: YYYY-MM-DDTHH:MM:SS.SSSZ. For example, 2020-08-04T19:09:02.768Z | [optional]
**transfer_amount** | [**\OpenAPI\Client\Model\Amount**](Amount.md) |  | [optional]
**transfer_detail** | [**\OpenAPI\Client\Model\TransferDetail**](TransferDetail.md) |  | [optional]
**transfer_id** | **string** | The unique identifier of the TRANSFER transaction type. This is the same value that was passed into the end of the call URI. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
