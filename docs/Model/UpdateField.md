# # UpdateField

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**signer_id** | **string** |  | [optional]
**page** | **int** |  | [optional]
**x** | **int** |  | [optional]
**y** | **int** |  | [optional]
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is not provided, it will be calculated depending on the number of newlines in the mention. | [optional]
**width** | **int** | If not set, the width is automatically calculated with the mention length. | [optional]
**mention** | **string** |  | [optional]
**font** | [**\Yousign\Client\Model\UpdateFieldFont**](UpdateFieldFont.md) |  | [optional]
**max_length** | **int** |  | [optional]
**question** | **string** |  | [optional]
**instruction** | **string** |  | [optional]
**optional** | **bool** |  | [optional] [default to false]
**size** | **int** |  | [optional] [default to 24]
**name** | **string** | Radio group&#39;s name | [optional]
**checked** | **bool** |  | [optional] [default to false]
**radios** | [**\Yousign\Client\Model\RadioGroup1RadiosInner[]**](RadioGroup1RadiosInner.md) |  | [optional]
**text** | **string** |  | [optional]

[[Back to Model list]](../../README.md#models) [[Back to API list]](../../README.md#endpoints) [[Back to README]](../../README.md)
