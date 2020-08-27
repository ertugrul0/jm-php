<?php


session_start();
$_SESSION['is_logged_in'] = false;
session_destroy();
/**
 * this functinon only deletes session variables
 * to destroy session and clear all cookies 
 * refer to the php documentation.
 * 
 */

 /**
  * Preventing session fixatityon attacks

  * use session_regenerate_id(true);  function
  * deletes old session and session id changes but any session data is maintained.
  *
  */

  /**
   * restrict access to a page to a logged in user only.
   * 
   * in session: strings numbers objects arrays can be kept
   * in cookies: only strings can be kept. Not any other data structure
   * 
   */