<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name  = htmlspecialchars($_POST['last_name']);
    $email      = htmlspecialchars($_POST['email']);
    $message    = htmlspecialchars($_POST['message']);

    $to      = "romanmaq0123@gmail.com";  // your email
    $subject = "New Contact Form Message";
    $body    = "From: $first_name $last_name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@yourdomain.com\r\nReply-To: $email";

    if (mail($to, $subject, $body, $headers)) {
        echo "<script>alert('Your message has been sent successfully!'); window.location.href='index.html';</script>";
    } else {
        echo "<script>alert('Oops! Something went wrong. Please try again.'); window.location.href='index.html';</script>";
    }
}
?>
