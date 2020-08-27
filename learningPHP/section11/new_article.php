<?php
require './../section9/includes/database.php';
// inserting an element into the database...
// sql injection attacks..
// mysqli_escape_string function...
// prepared stetements 
// query log for seeing prepared statements....

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //var_dump($_POST);
    $conn = getDB();
    /*
    $sql = "INSERT INTO articles (title, content, published_at) VALUES ('" .
    mysqli_escape_string($conn , $_POST["title"]) . "','" . 
    mysqli_escape_string($conn , $_POST["content"]) . "','" .
    mysqli_escape_string($conn , $_POST["published_at"]) .
    "'); "; 

    

    var_dump($sql);
    
    $results = mysqli_query($conn, $sql);
    if ($results === false) {
        echo mysqli_error($conn);

    } else {
        $id = mysqli_insert_id($conn);
        echo "Inserted record with the id: " . $id;

    }
    */

    $sql = " INSERT INTO articles (title, content, published_at ) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt === false) {
        echo mysqli_error($conn);

    } else {
        mysqli_stmt_bind_param($stmt, "sss", $_POST["title"], $_POST["content"], $_POST["published_at"]);
        if (mysqli_stmt_execute($stmt)) {
            $id = mysqli_insert_id($conn);
            echo "Inserted record with the id: " . $id;
        } else {
            echo mysqli_stmt_error($stmt);
        }

    }

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DB CRUD</title>
</head>
<body>

<form method="post">
    <div>
        <label for="title">Title</label> 
        <input type="text" name="title" id="title" placeholder="Article title">
    </div>

    <div>
        <label for="content">Content</label>
        <textarea name="content" id="content" cols="40" rows="5" placeholder="Article content"></textarea>
    </div>

    <div>
        <label for="published_at">Publication date and time</label>
        <input type="datetime-local" name="published_at" id="published_at">
    </div>

    <button>Add</button>
</form>
</body>
</html>