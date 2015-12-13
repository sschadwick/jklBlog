<?php

// On submit, build the email and send it
if (isset($_POST["submit"])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $human = intval($_POST['human']);
    $to = 'sschadwick@gmail.com';
    $email_subject = "Website Contact:  $name";
    
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";

    if (!$_POST['name']) {
        $errName = 'Please enter your name';
    }
    if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errEmail = 'Please enter a valid email address';
    }
    if (!$_POST['message']) {
        $errMessage = 'Please enter your message';
    }

    // Build the headers
    $headers = "From: noreply@stevenschadwick.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    if (!$errName && !$errEmail && !$errMessage) {
        if (mail($to, $email_subject, $email_body, $headers)) {
            $result = true;
        } else {
            $result = false;
        }
    }
}
?>
