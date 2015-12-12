---
layout: page
title: Contact
description: "Questions? Let's chat."
header-img: "img/the-strategy-1080527_960_720.jpg"
---

<p>Fill out the form below to send me a message and I will get back to you!</p>
<!-- Contact Form - Enter your email address on line 19 of the mail/contact_me.php file to make this form work. -->
<!-- WARNING: Some web hosts do not allow emails to be sent through forms to common mail hosts like Gmail or Yahoo. It's recommended that you use a private domain email address! -->
<!-- NOTE: To use the contact form, your site must be on a live web host with PHP! The form will not work locally! -->
<form name="sentMessage" id="contactForm" method="POST" action='contact_me.php' novalidate>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Name</label>
            <input type="text" class="form-control" placeholder="Name" id="name" required data-validation-required-message="Please enter your name.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Email Address</label>
            <input type="email" class="form-control" placeholder="Email Address" id="email" required data-validation-required-message="Please enter your email address.">
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <div class="form-group col-xs-12 floating-label-form-group controls">
            <label>Message</label>
            <textarea rows="5" class="form-control" placeholder="Message" id="message" required data-validation-required-message="Please enter a message."></textarea>
            <p class="help-block text-danger"></p>
        </div>
    </div>
    <div class="row control-group">
        <label for="human" class="col-sm-2 control-label">2 + 3 = ?</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" id="human" name="human" placeholder="Your Answer">
        </div>
    </div>
    <br>
    <div id="success"></div>
    <div class="row">
        <div class="form-group col-xs-12">
            <button type="submit" id="submit" name="submit" class="btn btn-default">Send</button>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-10 col-sm-offset-2">
            <?php echo $result; ?>    
        </div>
    </div>
</form>

<?php
// Check for empty fields
mail('sschadwick@gmail.com', 'TEST', 'HI', 'From: noreply@stevenschadwick.com');

if(empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }
// On submit, build the email and send it
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    // Create the email and send the message
    $to = 'sschadwick@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
    $email_subject = "Website Contact:  $name";
    $email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
    $headers = "From: noreply@stevenschadwick.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
    $headers .= "Reply-To: $email_address";
    if (mail($to,$email_subject,$email_body,$headers)) {
        $result = true;
    } else {
        $result = false;
    }
}
?>
