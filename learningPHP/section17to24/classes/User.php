<?php
class User {
    public $id;
    public $username;
    public $password;


    public static function authenticate($conn, $username, $password) {
        $sql = "SELECT * FROM user WHERE username = :username";
        $stmt = $conn -> prepare($sql);

        $stmt -> bindValue(':username', $username, PDO::PARAM_STR);

        $stmt -> setFetchMode(PDO::FETCH_CLASS, 'User');
        $stmt -> execute();

        $user = $stmt -> fetch();

        if ($user) {
            return password_verify( $password,  $user -> password);
            /*if ($user -> password == $password) {
                return true;
            }*/
        }
        // return null.

    }

}
/**
 * store passwords securely. not a plain text but hashed password.
 * hash is one way only. no de-hashing.
 * hash is not an encrption.
 * ex: md5 etc, sha1, etc. not recommended
 * 
 * 
 * 
 */