<?php
// control structures in php: if; elseif; else; for, while.

// empty function in array.

$t = ["222"];

//var_dump(empty($t));
// one statement in if  -> no brackets needed but not a  good practice.
if (empty($t)) {
    echo "selam";
}
elseif (false) {
    echo "selam2";
} else {
    echo "Oops!";
}
// comparison operators: ==, !=, <, >= ...etc.

$a = 2;
// example while loop.
while ($a < 10) {
    echo $a;
    $a++;
}
for ($i=0; $i < 20; $i++) { 
    echo $i;
}
// switch statement.

$counter = 22;
switch($counter) {
    case 2:
        echo "Two";
        break;
    case 4:
        echo "Four";
        break;
    default:
        echo "No Match!";
}

