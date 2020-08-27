<?php
/**
 * Article class
 */
class Article {
    public $id;
    public $title;
    public $content;
    public $published_at;
    public $imageFile;


    public function setImageFile($conn, $filename) {
        $sql = "UPDATE articles SET imageFile = :imageFile WHERE id = :id";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindValue(':id', $this-> id, PDO::PARAM_INT);
        $stmt -> bindValue(':imageFile', $this -> imageFile, PDO::PARAM_STR);
        
        return $stmt -> execute();

    }

    /**
     *  @param $conn object to connect to the database
     *  @return array associative for all article objects, false if no articles found.
     */
    public static function getAll($conn) {
        $sql = "SELECT * FROM articles order by published_at;";
        $results = $conn -> query($sql);
        
        if ($results === false) {
            var_dump($conn -> errorInfo());
        } else {
            return $results -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
    /**
     * getting an article using prepared statement in PDO..
     * if no result found, it returns false.
     */
    public static function getArticleById($conn, $id, $columns = '*') {
        $sql = "SELECT $columns FROM articles WHERE id = :id";
        $stmt = $conn -> prepare($sql);
        $stmt -> bindValue(':id', $id, PDO::PARAM_INT);

        // getting rows as an object of article automatically and use them later

        $stmt -> setFetchMode(PDO::FETCH_CLASS, 'Article');

        if ($stmt -> execute()) {
            //return $stmt -> fetch(PDO::FETCH_ASSOC);
            return $stmt -> fetch();
        
        }
    }

    public static function getWithCategories() {

    }
    public function getCategories() {
        // get cat of the article using joint table and category table using article id in the joint table
    }

    public function updateArticle($conn) {
        // update sql statement
        // use prepared statement
        // bindvalues
        // execute the query
        // return boolean
    }
    public function validateArticle() {
        // implement accordingly.
        // return true or false and check when needed.
    }
    public function deleteArticle($conn) {
        // same as update but change sql query
        
    }
    public function createArticle($conn) {
        // insert into sql statement
        // prepared PDO statement and bind it
        // execute it and use it
        // PDO::lastInsertId 
        // returns boolean
    }
}