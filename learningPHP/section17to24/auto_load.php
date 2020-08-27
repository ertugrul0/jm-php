<?php

// removing below line will give class not found error
//require 'classes/Article.php';
// auto load register function below. see it.

spl_autoload_register(function ($class) {
    require "classes/{$class}.php";
});


$article = new Article();
var_dump($article);