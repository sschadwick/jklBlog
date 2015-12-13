<?php
// Check for empty fields
if(empty($_POST['name'])        ||
   empty($_POST['email'])       ||
   empty($_POST['message']) ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
    echo "No arguments Provided!";
    return false;
   }
    
$name = $_POST['name'];
$email_address = $_POST['email'];
$human = $_POST['human'];
$message = $_POST['message'];
    
$to = 'sschadwick@gmail.com';
$email_subject = "Website Contact:  $name";
$email_body = "$name\n\n$email_address\n\n$message";
$headers = "From: noreply@stevenschadwick.com\n";
$headers .= "Reply-To: $email_address"; 
if($human == '5' && mail($to,$email_subject,$email_body,$headers)) {
    return true;
}
return false;            
?>
