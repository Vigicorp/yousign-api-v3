# # FieldReadOnlyText

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  |
**document_id** | **string** |  |
**type** | **string** |  |
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is provided, max_length must be less than or equal to the maximum number of characters based on the width and height of the text field. |
**width** | **int** | If not set, the width is automatically calculated with the max_length value |
**page** | **int** |  |
**x** | **int** |  |
**y** | **int** |  |
**text** | **string** | This property holds the content displayed in the read-only text field. |
**font** | [**\Yousign\Client\Model\Font**](Font.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
