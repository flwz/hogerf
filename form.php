<?php
$name = $_POST['namn'];
$visitor_email = $_POST['email'];
$message = $_POST['meddelande'];

$email_from = 'info@neexr.com';
$email_meddelande = 'Ny förfrågan';

$email_body = "User Namn: {$name}\n".
              "User Email: {$visitor_email}\n".
              "User Meddelande: {$message}\n";

$to = 'hoger.farhan@gmail.com';

$headers = "From: {$email_from}\r\n";
$headers .= "Reply-To: {$visitor_email}\r\n";

mail($to, $email_meddelande, $email_body, $headers);

header("Location: index.html");
?>
