<?php
session_start();
$to = "sainivk565@gmail.com";
$subject = "Join Birdman Foundation";
$name=$_POST['name'];
$email=$_POST['email'];
$phone=$_POST['mobno'];
$email_from ="birdmanfoundation@gmail.com";
$email_body ="Name:$name\n"."Email id:$email\n"."Phone no:$phone\n";
// Always set content-type when sending HTML email
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
// More headers
$headers .= "From: $email_form\r\n";
//$headers .= 'Cc: myboss@example.com' . "\r\n";

mail($to,$subject,$email_body,$headers);
header('location:index.php');

?>