<?php

class Category {
    public static function getAll($conn) {
        $sql = "SELECT * FROM category order by name;";
        $results = $conn -> query($sql);
        
        if ($results === false) {
            var_dump($conn -> errorInfo());
        } else {
            return $results -> fetchAll(PDO::FETCH_ASSOC);
        }
    }
    // array column values
    
}