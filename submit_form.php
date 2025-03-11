<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = "Wesley.methorst@gmail.com";
    $subject = "New Contact Form Submission";
    $message_body = "Name: $name\nEmail: $email\nMessage: $message";

    mail($to, $subject, $message_body);
    echo "Message sent successfully!";
}
?>
