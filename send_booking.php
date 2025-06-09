<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $phone   = htmlspecialchars($_POST['phone']);
    $date    = htmlspecialchars($_POST['date']);
    $message = htmlspecialchars($_POST['message']);

    // Your email address (where the message will be sent)
    $to = "your-email@example.com";  // <-- CHANGE THIS TO YOUR EMAIL
    $subject = "New Booking Request from $name";

    // Email body
    $body = "Name: $name\n";
    $body .= "Email: $email\n";
    $body .= "Phone: $phone\n";
    $body .= "Date: $date\n";
    $body .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $email";

    // Send the email
    if (mail($to, $subject, $body, $headers)) {
        echo "<h2>Thank you, $name! Your booking request has been sent.</h2>";
    } else {
        echo "<h2>Sorry, there was an error sending your message. Try again later.</h2>";
    }
} else {
    echo "<h2>Invalid request</h2>";
}
?>
