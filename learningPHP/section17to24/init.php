<?php

spl_autoload_register(function ($class) {
    require "classes/{$class}.php";
});


session_start();

// call this script from other files..as below
// remove all require lines.
//require 'this_file.php';