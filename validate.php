<?php
//get data from form  

$first_name = $_POST['fname'];
$email= $_POST['email'];
$last_name= $_POST['lname'];
$message= $_POST['message'];
$to = "sononenisha@gmail.com";
$subject = "Mail from the website";
$txt ="First Name = ". $fname . "\r\n  Last Name = " . $lname . "\r\n  Email = " . $email . "\r\n Message =" . $message;
$headers = ['From' => $email, 'Reply-To' => $email, 'Content-type' => 'text/html; charset=utf-8'];
if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
//redirect
header("Location:thank-you.html");
?>