<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $phone = htmlspecialchars($_POST['phone']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Email address to send the form submissions
    $to = "youremail@example.com"; // Replace with your actual email address

    // Subject and message body
    $subject = "New Contact Form Submission";
    $body = "Name: $name\nPhone: $phone\nEmail: $email\nMessage: $message";

    // Additional headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send the message.";
    }
}
?>