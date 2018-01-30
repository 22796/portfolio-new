<?php
$to = '22796@ma-web.nl';
$subject = $_POST['subject'];
$message = $_POST['message'];
$headers = 'From: ' . $_POST['email'];

mail($to, $subject, $message, $headers);

echo 'The mail was send!';


?>
