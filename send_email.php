<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = $_POST["name"];
        $email = $_POST["email"];
        $message = $_POST["message"];
        $to = "khan661@uwindsor.ca"; // Change this to your email address
        $subject = "New Inquiry from Contact Form";
        $body = "Name: $name\nEmail: $email\nMessage:\n$message";

        if (mail($to, $subject, $body)) {
            header('Location: thank-you.html');
        } else {
            echo "Oops! Something went wrong and we couldn't send your message.";
        }
    }
?>