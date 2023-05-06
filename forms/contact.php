<?php
// Replace with your email address
$to_email = "pandeythegreat03@gmail.com";
 
// Extract form details
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];
 
// Compose email message
$body = "From: $name\nEmail: $email\n\nMessage:\n$message";
 
// Email headers
$headers = "From: $email\r\n";
$headers .= "Reply-To: $email\r\n";
 
// Send email
if(mail($to_email, $subject, $body, $headers)) {
    echo "Your message has been sent!";
} else {
    echo "Unable to send message. Please try again later.";
}
?>
