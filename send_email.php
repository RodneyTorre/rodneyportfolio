<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $message = htmlspecialchars($_POST['message']);

    $to = "your.email@example.com"; // Your email here
    $headers = "From: $email";

    if(mail($to, $subject, $message, $headers)){
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
