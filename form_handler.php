<?php
$name=$_post['name'];
$visitors_email=$_post['email'];
$subject=$_post['subject'];
$message=$_post['message'];

$email_from='20egjcso44@gmail.com';
$email_subject="new form submission";
$email_body = "User Name:$name.\n".
               "user Email:$visitors_email.\n".
               "User sunject:$subject.\n".
               "User Message:$message.\n";

$to='panwarharsh653@gmail.com';
$headers = "from:$email_from\r\n";
$headers.= "reply-to:$visitors_email \r\n";
mail($to,$email_subject,$email_body,$headers);

header("Location:contact.html");


?>