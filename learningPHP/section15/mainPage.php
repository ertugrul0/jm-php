<?php
require 'auth.php';
session_start();


//var_dump($_SESSION);

if (isLoggedIn()) {
    echo 'You are logged in';
} else {
    echo 'Please auth first';
    die('unauth user');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
</head>
<body>
    <a href="login.php">Login</a>
    <a href="logout.php">Logout</a>

</body>
</html>
