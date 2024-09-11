# # FieldsInput

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**document_id** | **string** |  |
**type** | **string** |  |
**page** | **int** |  |
**x** | **int** |  |
**y** | **int** |  |
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is provided, max_length must be less than or equal to the maximum number of characters based on the width and height of the text field. | [optional]
**width** | **int** | If not set, the width is automatically calculated with the max_length value | [optional]
**mention** | **string** |  |
**max_length** | **int** |  |
**question** | **string** |  |
**instruction** | **string** |  | [optional]
**optional** | **bool** |  |
**size** | **int** | The omission of size parameter is considered as deprecated. The size determines both the width and height of the checkbox. | [optional]
**name** | **string** | Radio group&#39;s name | [optional]
**checked** | **bool** |  |
**radios** | [**\Yousign\Client\Model\RadioGroup2RadiosInner[]**](RadioGroup2RadiosInner.md) |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
