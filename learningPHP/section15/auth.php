<?php
/**
 * PHP DOC COMMENT HERE
 */
function isLoggedIn(){
    return isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'];
}