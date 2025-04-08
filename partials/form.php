<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data and sanitize it
    $name = htmlspecialchars(strip_tags($_POST['name']));
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $subject = htmlspecialchars(strip_tags($_POST['subject']));
    $message = htmlspecialchars(strip_tags($_POST['message']));

    // Validate required fields
    if (empty($name) || empty($email) || empty($message)) {
        echo "Please fill in all required fields.";
        exit;
    }

    // Validate email format
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
        exit;
    }

    // Email recipient
    $to = "wpcodify.com@gmail.com"; // Replace with your email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Email subject & body
    $email_subject = "New Contact Form Message: $subject";
    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Message:\n$message\n";

    // Send email
    if (mail($to, $email_subject, $email_body, $headers)) {
        echo "Your message has been sent successfully.";
    } else {
        echo "Failed to send message. Please try again later.";
    }
} else {
    echo "Invalid request.";
}
?>
