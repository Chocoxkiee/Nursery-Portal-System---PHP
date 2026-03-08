<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars(trim($_POST["name"]));
    $email   = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

    $to      = "your-email@example.com"; // Replace with your real email
    $headers = "From: $name <$email>\r\n";
    $body    = "You have received a new message from GreenBloom contact form.\n\n".
               "Name: $name\n".
               "Email: $email\n".
               "Subject: $subject\n".
               "Message:\n$message";

    if (mail($to, $subject, $body, $headers)) {
        echo "<h2 style='text-align:center; color:green;'>Thank you, $name! Your message has been sent.</h2>";
    } else {
        echo "<h2 style='text-align:center; color:red;'>Sorry, there was a problem sending your message.</h2>";
    }
} else {
    echo "<h2 style='text-align:center; color:orange;'>Access denied.</h2>";
}
?>
