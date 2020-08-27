<?php

$db = new Database();
$conn = $db -> getConn();
return $conn;
// returning a value using require; just like in the functions in php
// use it like:
//$conn = require 'includes/db.php';
