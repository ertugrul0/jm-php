<?php



echo 'edit article page';
if ($_SERVER['REQUEST_METHOD'] == "POST") {
    var_dump($_FILES);

    
    
    try {
        if (empty($_FILES)) {
            throw new Exception('File error');
        }
        switch($_FILES["file"]["error"]) {
            case UPLOAD_ERR_OK:
                break;
            case UPLOAD_ERR_NO_FILE:
                throw new Exception('No file uploaded');
                break;
            default:
                throw new Exception('error occured');
                break;
            
        }

        // restrict size of file
        if ($_FILES["file"]["size"] > 1000000) {
            throw new Exception('file is too large!');
        }
        // or use file info function in php
        $mime_types = ['image/gif', 'image/png', 'image/jpg'];
        if (!in_array($_FILES['file']['type'], $mime_types)) {
            throw new Exception('File type is wrong');
        }
        // make sure permissions are granted for dest folder and this php script

        $destination = "./uploads/" . $_FILES['file']['name'];

        // sanitize file name before processing it
        // replace the odd chars with an underscore in the filaname
        // do not overwrite the files with the same name in the uploads folder
        // check first if file exists and add some arbitrary suffix until a file name d.n.e in the uploads dir




        if (move_uploaded_file($_FILES['file']['tmp_name'], $destination)) {
            echo 'SUCCESS';
            // save filename to the database 
            // display uploaded image when articles listed
            // delete previous image when article image updated
            //unlink function deletes file
            // when listing , added an option to remove file


        } else {
            throw new Exception('errrrrr');
        }


    } catch (Exception $e) {
        echo $e->getMessage();
    }
    
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<form action="" method="post" enctype="multipart/form-data">
    
    <div>
        <label for="file">Choose Image</label>
        <input type="file" name="file" id="file">
    </div>

    <button>Upload</button>
</form>



</body>
</html>