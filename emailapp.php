<?php
$to      = 'vaibhavshivdas@yahoo';
$subject = 'the subject';
$message = 'hello';
$headers = 'From: noreply@designbuildapp.in' . "\r\n" .
    'Reply-To: noreply@designbuildapp.in' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>

<html></html>