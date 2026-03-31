<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect and sanitize input
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $service = strip_tags(trim($_POST["service"]));
    $message = trim($_POST["message"]);

    // Check that data was sent to the mailer.
    if (empty($name) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        // Set a 400 (bad request) response code and exit.
        header("Location: index.html?status=error");
        exit;
    }

    // Set the recipient email address.
    $recipient = "ragulviswanathan02@gmail.com";

    // Set the email subject.
    $subject = "New Inquiry: $service from $name";

    // Build the email content.
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Service: $service\n\n";
    $email_content .= "Message:\n$message\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    if (mail($recipient, $subject, $email_content, $email_headers)) {
        // Set a 200 (ok) response code.
        header("Location: index.html?status=success");
    } else {
        // Set a 500 (internal server error) response code.
        header("Location: index.html?status=error");
    }

} else {
    // Not a POST request, redirect to index.html
    header("Location: index.html");
}
?>
