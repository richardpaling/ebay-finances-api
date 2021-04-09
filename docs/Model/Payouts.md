# # Payouts

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**href** | **string** | The URI of the getPayouts call request that produced the current page of the result set. | [optional]
**limit** | **int** | The maximum number of payouts that may be returned per page of the result set. The limit value can be passed in as a query parameter, or if omitted, its value defaults to 20. Note: If this is the last or only page of the result set, the page may contain fewer payouts than the limit value. To determine the number of pages in a result set, divide the total value (total number of payouts matching input criteria) by this limit value, and then round up to the next integer. For example, if the total value was 120 (120 total payouts) and the limit value was 50 (show 50 payouts per page), the total number of pages in the result set is three, so the seller would have to make three separate getPayouts calls to view all payouts matching the input criteria. Maximum: 200 Default: 20 | [optional]
**next** | **string** | The getPayouts call URI to use if you wish to view the next page of the result set. This field is only returned if there is a next page of results to view based on the current input criteria. | [optional]
**offset** | **int** | This integer value indicates the actual position that the first payout returned on the current page has in the results set. So, if you wanted to view the 11th payout of the result set, you would set the offset value in the request to 10. In the request, you can use the offset parameter in conjunction with the limit parameter to control the pagination of the output. For example, if offset is set to 30 and limit is set to 10, the call retrieves payouts 31 thru 40 from the resulting collection of payouts. Note: This feature employs a zero-based list, where the first item in the list has an offset of 0. Default: 0 (zero) | [optional]
**payouts** | [**\OpenAPI\Client\Model\Payout[]**](Payout.md) | An array of one or more payouts that match the input criteria. Details for each payout include the unique identifier of the payout, the status of the payout, the amount of the payout, and the number of monetary transactions associated with the payout. | [optional]
**prev** | **string** | The getPayouts call URI to use if you wish to view the previous page of the result set. This field is only returned if there is a previous page of results to view based on the current input criteria. | [optional]
**total** | **int** | This integer value is the total number of payouts in the results set based on the current input criteria. Based on the total number of payouts that match the criteria, and on the limit and offset values, there may be additional pages in the results set. | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
