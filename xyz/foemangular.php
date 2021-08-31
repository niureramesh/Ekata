<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$email_form = 'niuredevelopr@gmail.com';
$email_subject = 'New form submission';
$email_body = "User Name: $name.\n".
           "User email: $visitor_email.\n".
           "subject: $subject.\n".
           "User message: $message.\n";
$to = 'develop@ismt.edu.np';
$headers ="form: $email_form\r\n";
$headers .= "Reply-To":$visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location: contact.html");




?>