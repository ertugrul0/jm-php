<?php
/**
 * Database: A connection to the database.
 */
class Database {
    /**
     * Get the database connection
     * @return PDO object Connection to the DB server.
     */
    public function getConn() {
        $db_host = "127.0.0.1";
        $db_name = "cms";
        $db_user = "ertugrul";
        $db_password = "DnujWQZasCEYAGr0";

        $dsn = 'mysql:host=' . $db_host . ';dbname=' . $db_name . ';charset=utf8' ;
        var_dump($dsn);

        // example of using try catch statement.
        try {
            $db =  new PDO($dsn, $db_user, $db_password);
            // pdo throws an exception by the below line if
            // any error occurs related with the database.
            $db -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        } catch (PDOException $e) {
            echo $e -> getMessage();
            exit;
        }
    }
}