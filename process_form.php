<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['contactName'];
    $email = $_POST['contactEmail'];
    $subject = $_POST['contactSubject'];
    $message = $_POST['contactMessage'];

    // Server-side validation
    if (empty($name) || empty($email) || empty($message)) {
        echo 'error'; // If data is incomplete, send error message
        exit;
    }

    // Email setup
    $to = 'zubeyda.a.shute@gmail.com'; //  my email address
    $emailSubject = 'New Contact Form Message';
    $emailBody = "You have received a new message from $name ($email).\n\nSubject: $subject\n\nMessage: $message";

    // Email headers
    $headers = "From: $email";

    // Send email
    if (mail($to, $emailSubject, $emailBody, $headers)) {
        echo 'success'; // If the email is sent successfully
    } else {
        echo 'error'; // If email sending fails
    }
}
?>
