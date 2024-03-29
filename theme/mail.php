<?php
if(isset($_POST['submit'])){
    $to = "rkssh.daas@gmail.com"; // Your email address
    $from = $_POST['email']; // Sender's email address
    $name = $_POST['name']; // Sender's name
    $subject = $_POST['subject']; // Subject
    $phone = $_POST['phone']; // Phone number
    $message = $_POST['message']; // Message
    
    // Email headers
    $headers = "From: $from \r\n";
    $headers .= "Reply-To: $from \r\n";
    
    // Compose email
    $email_body = "You have received a new message from $name ($from):\n\n";
    $email_body .= "Subject: $subject\n";
    $email_body .= "Phone Number: $phone\n";
    $email_body .= "Message:\n$message";
    
    // Send email
    mail($to, $subject, $email_body, $headers);
    
    // Redirect back to the form page with success message
    header('Location: index.html?success=1#contact');
} else {
    // If the form is not submitted, redirect back to the form page
    header('Location: index.html#contact');
}
?>
