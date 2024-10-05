<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = htmlspecialchars(trim($_POST['name']));
    $email = htmlspecialchars(trim($_POST['email']));
    $address = htmlspecialchars(trim($_POST['address']));

    // Simple validation
    if (empty($name) || empty($email) || empty($address)) {
        echo "All fields are required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email format.";
    } else {
        // Here you can process the data
        // For example, save it to a database or send an email

        // Example: Sending email
        $to = "your_email@example.com"; // Replace with your email
        $subject = "New Contact Form Submission";
        $message = "Name: $name\nEmail: $email\nAddress: $address";
        $headers = "From: $email";

        // Send the email
        if (mail($to, $subject, $message, $headers)) {
            echo "Thank you for contacting us, $name!";
        } else {
            echo "Error sending email.";
        }

        // Optionally, redirect back to the contact page or another page
        // header("Location: thank_you.php");
        // exit();
    }
} else {
    echo "Invalid request method.";
}
?>
