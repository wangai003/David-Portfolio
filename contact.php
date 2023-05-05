<?php
// Set the recipient email address
$to = "wangaimoses003@gmail.com";

// Get the form data
$name = $_POST["name"];
$email = $_POST["email"];
$message = $_POST["message"];

// Set the email subject and body
$subject = "New message from $name";
$body = "Name: $name\nEmail: $email\nMessage: $message";

// Send the email
mail($to, $subject, $body);

// Redirect the user back to the contact page
header("Location: contact.php?sent=1");
