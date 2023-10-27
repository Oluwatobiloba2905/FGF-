<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];

    $to = "tobiloba2905@gmail.com";
    $headers = "From: $email";

    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\nMessage:\n$message";

    mail($to, $subject, $mailBody, $headers);

    // Redirect to a thank you page or show a success message
    header("Location: thank_you.html");
}
?>
