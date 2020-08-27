<?php
session_start();
//$_SESSION['is_logged_in'] = true;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if ($_POST['username'] == "ertugrul" && $_POST['password'] == "1234") {
        echo 'login correct';
        $_SESSION['is_logged_in'] = true;
        header("Location: mainPage.php");
        exit;

    } else {
        die('error');
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="" method="post">
        <div>
            <label for="usernamne">Username</label>
            <input type="text", name= "username",   id="username">
        </div>
        <br>
        <div>
            <label for="password">Password</label>
            <input type="password", name= "password",   id="password">
        </div>
        <button>Log in</button>
    </form>    

</body>
</html>