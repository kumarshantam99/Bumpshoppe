<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['tel']))
$tel = $_POST['tel'];
if(isset( $_POST['message']))
$message = $_POST['message'];

$content="From: $name \n Email: $email \n Phone No.: $tel Message: $message";
$recipient = "noble6masterchief@gmail.com";
$mailheader = "From: $email \r\n";
mail($recipient, $content, $mailheader) or die("Error!");
echo "Email sent!";
?>