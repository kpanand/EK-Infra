<?php
$visitor_email = $_POST['email'];
$email_from = 'hello@ekgroup.in';

$email_subject = "Get notified from Website";
$email_body = "User Email: $visitor_email.\n";

$to = "chaitanya2561@gmail.com";

$headers = "From: $email_from \r\n";
$headers = "Reply-To: $visitor_email \r\n";
mail($t0,$email_subject,$email_body,$headers);
header("Location: inbex.html");
?>