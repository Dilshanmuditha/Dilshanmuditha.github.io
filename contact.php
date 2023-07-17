<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "dilshanmuditha.online@gmail.com";
    $subject = "New Message from Portfolio Contact Form";
    $body = "Name: " . $name . "\n";
    $body .= "Email: " . $email . "\n";
    $body .= "Message: " . $message;

    if (mail($to, $subject, $body)) {
        echo "Thank you for your message! We will get in touch with you shortly.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>