<?php

$first_name = $_POST['your_name']; // required
$email_from = $_POST['email']; // required
$email_message = $_POST['message']; // not required
$email_to = "missaruna@gmail.com";
$email_subject = "Mail from Ayuphotography"; 


// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

if(@mail($email_to, $email_subject, $email_message, $headers)){
	echo "sent";
}else{
    echo "not sent";
}

  
?>