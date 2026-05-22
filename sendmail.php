<?php

if($_SERVER["REQUEST_METHOD"] == "POST"){

$fullname = htmlspecialchars($_POST['fullname']);
$email = htmlspecialchars($_POST['email']);
$phone = htmlspecialchars($_POST['phone']);
$service = htmlspecialchars($_POST['service']);
$message = htmlspecialchars($_POST['message']);

$to = "melissa@melissaaucampincattorneys.co.za";
$subject = "New Website Consultation Request";

$body = "
Full Name: $fullname

Email: $email

Phone: $phone

Service Required: $service

Message:
$message
";

$headers = "From: $email";

if(mail($to, $subject, $body, $headers)){
echo "Message sent successfully.";
} else {
echo "Error sending message.";
}
}

?>
