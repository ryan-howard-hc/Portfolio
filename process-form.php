<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    
    // Replace with your email address
    $to = "ryan.howard1993@gmail.com";
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    
    if (mail($to, $subject, $message, $headers)) {
        // Redirect back to the same page with a success parameter
        header("Location: index.html?success=1");
        exit;
    } else {
        // Redirect back to the same page with an error parameter
        header("Location: index.html?error=1");
        exit;
    }
}
?>