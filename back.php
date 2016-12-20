<?php

$to      = 'litaa.oliveira@gmail.com';
$subject = 'the subject';
$message = $_POST['texto'];
$headers = 'From:'.$_POST['email']. "\r\n" .
    'Reply-To: '.$_POST['email']. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if(mail($to, $subject, $message, $headers)){
	echo "enviou";
}else{
	echo "deu merda";
}

?>