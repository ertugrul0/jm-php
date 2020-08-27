<?php
// section4 notes in php course.
// topics: arrays in php.

$my_array = [
            "First", 
            "Second", 
            "Last" 
            ];
$second_array = array("First", "Second", "Last");


//var_dump($my_array);

// index starts from zero as in other PLs.

//echo $my_array[0];

// assigning manual index in php is possible.
// assigning string index is possible => associative array.
// creating and accessing multidimensional arrays are OK.

// for array index, only strings adn integers can be used.

$test = [
    "f" => "hello",
    "i" => 2,
    "r" => 9.11,
    "s" => false,
    "t" => null,


];
//var_dump($test);
//var_dump($test[2]); // error because no index 2!

// process each elemetns of array: foreach loop in php:
//echo $my_array; // error
/*
foreach ($my_array as $element) {
    echo $element;
}
*/
foreach ($my_array as $index => $value) {
    echo $index . ":" . $value;
}
$array = [ "f" => "selam", "second" => "selamlar", "third" => "third"];

foreach($array as $index => $value) {
    echo "$index = $value.";
}