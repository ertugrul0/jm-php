<?php
// error handling
// exceptions and handling them using try and catch block

// setting error handler function and set_exception_handler function
// ErrorException in php

// move the related codes into the init.php
// show error detail : boolean : true or false

// http status codes and handling ajax errors
// http_response_code function

try {
    echo new Datetime(); 
} catch (Throwable $e) {
    echo "error is: " . $e -> getMessage();
} 