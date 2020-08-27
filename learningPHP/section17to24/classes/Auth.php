<?php
class Auth {

    public static function isLoggedIn() {
        return true; // false;
    }
    // usage: Auth::requireLogin()
    public static function requireLogin() {
        if (!static::isLoggedIn()) {
            die('unauth.');
        }
    }
    public static function login() {
        // login routine here and use it
    }
    public static function logout(){
        // logout routine here...
    }
}