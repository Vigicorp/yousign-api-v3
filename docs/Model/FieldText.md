# FieldText

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** |  | 
**document_id** | **string** |  | 
**signer_id** | **string** |  | 
**type** | **string** |  | 
**width** | **int** | If not set, the width is automatically calculated with the max_length value | 
**height** | **int** | The height must be 24 or a multiple of 15 greater than 24. If height is provided, max_length must be less than or equal to the maximum number of characters based on the width and height of the text field. | 
**page** | **int** |  | 
**x** | **int** |  | 
**y** | **int** |  | 
**question** | **string** |  | 
**instruction** | **string** |  | 
**optional** | **bool** |  | 
**answer** | **string** |  | 
**max_length** | **int** |  | 
**font** | [**\Yousign\Client\Model\Font**](Font.md) |  | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)
