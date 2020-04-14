<?php
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$formcontent=" From: $name \n Phone: $phone \n ";
$recipient = "info@leanonus.in";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient,$subject,$formcontent,$mailheader) or die("Error!");
echo "Thank You!";
header("location: index.html");
?>