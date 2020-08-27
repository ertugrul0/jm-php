<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forms</title>
</head>
<body>

<!-- 
if action is empty it sent data to itself.

action="processForm.php"
get is the default method

get vs post
getting diffrent types of data from user...
mobile input types
pay attention to html elements for browser compatiblity..
default input type is text.
if wrong type is entered, browser shows default type.

Accessing data from the form on the server side.

when submitting a form, name area of the input is taken into consideration
we can get the value of the input using the value attribute.

multiline text field in html forms
select element for choosing an option in the html element.
multiple attribute can be also applied.
optgroup for grouping options in the select element
selected attribute for default selection in the select element.

checkboxes...
radio buttons for choosing only one item among many.
give rad buttons same name so that they form a group.
checked attribute.

label elements...
fielsets, legend, etc..
placeholders, hint texts etc.

form control attributes such as readonly, disabled, autofocus.
validating inputs using html form validation: email, url, min number max number etc.
required attrubute for making an input field required.
pattern attrubute for validation: entering regex.
novalidate attribute in the form element.

-->
 

<form  method='post'>
    <input type="text" name="username" value="Enter username">
    <input type="password" name="password">

    <button> Send </button>

</form>
    
</body>
</html>

<?php 
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST);
    }
?>