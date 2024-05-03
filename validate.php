<?php
//get data from form  

$name = $_POST['fname'];
$email= $_POST['email'];
$message= $_POST['lname'];
$to = "sononenisha@gmail.com";
$subject = "Mail From website";
$txt ="Name = ". $name . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = "From: noreply@yoursite.com";
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank-you.html");
?>