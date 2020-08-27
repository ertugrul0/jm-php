<?php

//  http is stateless
// sessions in the browser
/**
 * using seessions to keep state
 * session_start();
 * cookie in the browser
 * session superglobal
 * session data is written to a file by default. slow
 * 
 * session_start line must be called before any line or echo
 * oth. you will get an error.
 * 
 * cookies we can store in the browser
 * they belongs to domain of the site
 * they are visible by anyone so do not keep important data in the cookies
 * by default cookies are expired by default at the end of the php session
 * 
 * cookies has also a path attrubute
 * default is the project directory
 * 
 */
session_start();

if (isset($_SESSION["count"])) {
    $_SESSION["count"]++;

} else {
    $_SESSION["count"] = 1;

}



//var_dump($_SESSION["count"]);
setcookie('example', 'hello');
//setcookie('example2', 'hello2', time() + 60 *2);
echo 'Cookies set';
