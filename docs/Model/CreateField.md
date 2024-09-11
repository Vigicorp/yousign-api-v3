# # CreateField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_id** | **string** |  |
**type** | **string** |  |
**page** | **int** |  |
**x** | **int** |  |
**y** | **int** |  |
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is not provided, it will be calculated depending on the number of newlines in the read only text. | [optional]
**width** | **int** | If not set, the width is automatically calculated with the read only text length. | [optional]
**mention** | **string** |  |
**font** | [**\Yousign\Client\Model\CreateFieldFont**](CreateFieldFont.md) |  | [optional]
**max_length** | **int** |  |
**question** | **string** |  |
**instruction** | **string** |  | [optional]
**optional** | **bool** |  | [optional] [default to false]
**size** | **int** |  | [optional] [default to 24]
**name** | **string** | Radio group&#39;s name | [optional]
**checked** | **bool** |  | [optional] [default to false]
**radios** | [**\Yousign\Client\Model\RadioGroupRadiosInner[]**](RadioGroupRadiosInner.md) |  |
**text** | **string** |  |

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
