<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $to = "patrickweedy26@gmail.com"; // Replace with your email
    $subject = "New Contact Form Message";
    $headers = "From: $email";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully to Pcodeboy!";
    } else {
        echo "Failed to send message.";
    }
}
?>
