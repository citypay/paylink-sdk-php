# CustomParam

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**name** | **string** | refers to the name of the parameter used to specify the HTML form element name. This value can be referred back through the PostBack data. | [optional] 
**value** | **string** | an initial value for the parameter as it appears on the Form. If your parameter is hidden, the value will be required. | [optional] 
**required** | **bool** | a boolean value that states whether the field is required or optional. When an element is required, validation will be performed on the end user&#39;s input form. | [optional] 
**placeholder** | **string** | a value to set as the HTML5 placeholder attribute which will render in modern browsers. | [optional] 
**label** | **string** | a label that should appear immediately before the field element in the generated HTML form, describing what the form is used for. If this value is not supplied, the name value will be used | [optional] 
**locked** | **bool** | refers to a boolean value that states whether the field is a locked field that prevents entry or amendment by the person completing the form. | [optional] 
**pattern** | **string** | a string value which specifies the HTML5 validation logic which is checked before submitting the form for payment for example a value of \&quot;PC[0-9]*\&quot; will require a value such as PC1, PC123. | [optional] 
**group** | **string** | a value which can allow grouping of custom elements. If no value is provided, a default addition parameters group is rendered. This allows logical grouping to the payment form for multiple elements. For example, 3 elements with the group of \&quot;Your Details\&quot; would be displayed with a heading of \&quot;Your Details\&quot; and each form element displayed under this heading. Any items not within this group will be displayed in their respective group titles or the default group. Groups are rendered alphabetically. | [optional] 
**order** | **int** | a value which allows you to order the position of elements in a grouping. For instance a value which has 1 will order first. Defaults to 0. Items can be pushed in front by using negative values. | [optional] 
**field_type** | **string** | refers to the type of HTML 5 field entry and which may include &#39; hidden &#39; to represent a hidden field, or any other permitted value for the &#39;type&#39; attribute of the HTML 5 input element. Should the fieldType be &#39;select&#39; a select list will render however it will require populating with option values. Values can be constructed by providing a list in the value parameter, delimited by a pipe character &#39;|&#39;. If a single value is provided this value will be used as the value and label of the option item. To provide a different value and label to an item, you can delimit further with a colon &#39;:&#39;. For instance &#x60;&#x60;&#x60;\&quot;fieldType\&quot;: \&quot;select\&quot;, \&quot;value\&quot; : \&quot;Under 18|18-30|30-50|50+\&quot;&#x60;&#x60;&#x60; | [optional] 

[[Back to Model list]](../README.md#documentation-for-models) [[Back to API list]](../README.md#documentation-for-api-endpoints) [[Back to README]](../README.md)


