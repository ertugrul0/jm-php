<?php

function sendMail() {
    // send mail phpMailer
    
}

// sending emails from php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $errors = [];
    // validate email accordingly
    // connect to a mail server
    // address of the mail server, usename or email, password
    
    // php mailer example

    




}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
</head>
<body>
    
    <form action="" method="post" id="formContact">
    <div>
        <label for="email">Your email</label>
        <input type="email" name="email" id="email" placeholder="Your email">
    </div>

    <div>
        <label for="subject">Subject</label>
        <input type="text" name="subject" id="subject" placeholder="Your subject">
    </div>

    <div>
        <label for="message">Message</label>
        <textarea name="message" id="message" cols="30" rows="10"></textarea>
    </div>

    <button>Submit</button>

    </form>

</body>
</html>