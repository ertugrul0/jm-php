<?php
require 'Element.php';
    // creating constant
    define("MAXIMUM", 100);
    echo MAXIMUM;
    // define function variables are global and they are available anywhere in the script.
    // however we can not use define in the class but we can use const keyword
    // see Element.php file to see that.
    echo '<br>';
    echo '<br>';

    echo Element::LLL;
    echo '<br>';
    echo '<br>';


Element::showCount();


$e1 = new Element('eee', 'ddd');

Element::showCount();
//$e1 -> name = 'Example name one';
//$e1 -> sss = 'Not an actual property in the element classs';
//$e1 -> getSSS();
var_dump($e1);

// usage of inheritance example in the Element.php file
$b = new B();
$b -> fff();