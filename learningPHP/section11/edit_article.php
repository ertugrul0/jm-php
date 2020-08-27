<?php
require './../section9/includes/database.php';
$conn = getDB();
if (isset($_GET['id'])) {
    $article = getArticle($conn, $_GET['id']);

} else {
    $article = null;

}

var_dump($article);





/**
 * @param object $conn Connection to the database
 * @param integer $id the article id
 * 
 * @return mixed an associative array containing article id or null of not found.
 * 
 */

function getArticle($conn ,$id) {
    $sql = "SELECT * FROM articles WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false ){
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }

}