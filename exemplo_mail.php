<?php
$name = $_POST['name'];
$email = $_POST['email'];
//$phone = $_POST['phone'];
//$call = $_POST['call'];
//$website = $_POST['website'];
//$priority = $_POST['priority'];
//$type = $_POST['type'];
//$message = $_POST['message'];
//$formcontent=" De: $name \n Mensagem: $message";
$recipient = "email@servidor.com";
$subject = "Email do site";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$URL='http://www.site.com.br';
header ('Location: '.$URL);
?>



