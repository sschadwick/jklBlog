---
layout: page
title: Contact
description: "Questions? Let's chat."
header-img: "img/the-strategy-1080527_960_720.jpg"
---

<?php
    if (isset($_POST['message'])) {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $message = $_POST['message'];
        $human = intval($_POST['human']);
        $from = 'noreply@stevenschadwick.com'; 
        $to = 'sschadwick@stevenschadwick.com'; 
        $subject = 'Message from Contact Demo ';
        
        $body = "From: $name\n E-Mail: $email\n Message:\n $message";
 
        // Check if name has been entered
        if (!$_POST['name']) {
            $errName = 'Please enter your name';
        }
        
        // Check if email has been entered and is valid
        if (!$_POST['email'] || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errEmail = 'Please enter a valid email address';
        }
        
        //Check if message has been entered
        if (!$_POST['message']) {
            $errMessage = 'Please enter your message';
        }
        //Check if simple anti-bot test is correct
        if ($human !== 5) {
            $errHuman = 'Your anti-spam is incorrect';
        }
 
// If there are no errors, send the email
        if ($_POST['submit'] && $human === 5) {
            if (mail ($to, $subject, $body, $from)) {
                $result = true;
                echo '<p>Message sent!</p>'
            } else {
                $result = false;
                echo '<p>Something went wrong</p>'
            }
        }
    }
?>

