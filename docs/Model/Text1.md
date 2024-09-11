# # Text1

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_id** | **string** |  | [optional]
**page** | **int** |  | [optional]
**x** | **int** |  | [optional]
**y** | **int** |  | [optional]
**width** | **int** | If not set, the width is automatically calculated with the max_length value | [optional]
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is provided, max_length must be less than or equal to the maximum number of characters based on the width and height of the text field. | [optional]
**max_length** | **int** |  | [optional]
**question** | **string** |  | [optional]
**instruction** | **string** |  | [optional]
**optional** | **bool** |  | [optional] [default to false]
**font** | [**\Yousign\Client\Model\UpdateFieldFont**](UpdateFieldFont.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
