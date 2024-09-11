# # Text

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_id** | **string** |  |
**type** | **string** |  |
**page** | **int** |  |
**x** | **int** |  |
**y** | **int** |  |
**width** | **int** | If not set, the width is automatically calculated with the max_length value | [optional]
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is provided, max_length must be less than or equal to the maximum number of characters based on the width and height of the text field. | [optional]
**max_length** | **int** |  |
**question** | **string** |  |
**instruction** | **string** |  | [optional]
**optional** | **bool** |  | [optional] [default to false]
**font** | [**\Yousign\Client\Model\CreateFieldFont**](CreateFieldFont.md) |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
