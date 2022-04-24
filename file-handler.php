<?php 
$name = $_POST ['name'];
$visistor_email = $_POST ['email'];
$subject = $_POST ['subject'];
$message = $_POST ['message'];
$email_from = 'info@yourwebsite.com';
$email_subject = 'New form Submission';
$email_body = "User Name: $name.\n".
                "User email: $visiotr_email.\n".
                "subject: $subject.\n".
                "User message: $message .\n";

$to = 'muhidinabdullahi60@gmail.com';
$headers = "From : $email_from \r\n";
$headers = "Reply-To : $visistor_email \r\n";

mail($to , $email_subject, $email_body, $headers );
$header("Location: contact.html");




?>