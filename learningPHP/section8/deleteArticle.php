<?php
require './../section9/includes/database.php';
$conn = getDB();

function deleteArticle($conn, $id) {
    $sql = "DELETE  FROM articles WHERE id = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false ){
        echo mysqli_error($conn);
    } else {
        mysqli_stmt_bind_param($stmt, "i", $id);
        if (mysqli_stmt_execute($stmt)) {
            header("Location: ./section8.php");
            echo 'Success';
            //return mysqli_fetch_array($result, MYSQLI_ASSOC);
        }
    }

}

deleteArticle($conn, 1);