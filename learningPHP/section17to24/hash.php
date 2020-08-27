<?php
// hash example in php
$test = '1234';

$hashed = password_hash($test, PASSWORD_DEFAULT);

var_dump($hashed);

$r = password_verify($test, '$2y$10$lWthzwa0mF98sOAdUX73M.KcJOLBzxoELSuXBgcep7LS0Ux.injsC');
var_dump($r);