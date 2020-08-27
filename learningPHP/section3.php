<?php
// CONTROL + OPTION + i => cift tırnak in vscode
// SHIFT + 4 => artı isareti
// OPTION + 4 => dolar sign

// USEFUL NOTES:
// variables in php: Dollar sign, case sensitive.
// this is a single line comment, as in C/C++.
// php file works in the server side, not in thr browser (client) side.
// strings with double or single quotes, both are OK.
// numbers - integers - floats (with decimals) - both are positive or negative.
// $aaa = 3 and $bbb = "3" are different of course.
// var_dump function in php, with one or more parameters inside it.
// loosely typed language not a strongly typed language.

// boolean types: true and false.
// null value => a variable that has no value.
// it can be NULL or null, no difference.
// strings can contain other values.


// arithmetic operators in php:
$counter = 4.5;
$size = 2;

var_dump($counter + 5); // prints 9.5 with type float.
var_dump($counter * $size); // prints 9 with type float.

// strings concatenation:

$first_string = 'ertugrul';
$second_string = 'sakar';

//echo $first_string . $second_string;

// type juggling or type conversion in php
// otomatic but diffrent behaviour. read docs for more info.

// logical operators in php:
// ! means not
// && means and
// || means or


// strings containing quotes => use escape char to accomplish them.
// \n or \' etc.
// string concatenation:
// variable interpolation example.
echo "hello $first_string";  // or
echo "hello {$first_string}";



/*
$is_logged_in = true;
$data = null;
var_dump($is_logged_in, $data);



$is_admin = true;

$count = 3;
$price = 1.99;
$message = "Hello justmop!!!";

var_dump($message); 
var_dump($price);
var_dump($count);
*/
//echo $message . " - Helloo, it works! test";
?>

