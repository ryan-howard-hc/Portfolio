<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    $to = "ryan.howard1993@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        header("Location: index.html?success=1");
        exit;
    } else {
        header("Location: index.html?error=1");
        exit;
    }
}
?>