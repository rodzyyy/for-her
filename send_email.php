<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Send email (This is a basic example; consider using a library for more robust email functionality)
    mail('your-email@example.com', 'Message from '.$name, $message, 'From: '.$email);

    echo "Message sent!";
} else {
    echo "Invalid request";
}
?>
