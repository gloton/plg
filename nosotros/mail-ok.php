<?php
require("../lib/phpmailer5.2.1/class.phpmailer.php");
$mail = new PHPMailer();
$mail->Host = "localhost";
$mail->From = "jorge@kenyacomunicaciones.cl";
$mail->FromName = "Nombre del Remitente";
$mail->Subject = "Subject del correo";
$mail->AddAddress("j.gatica@yahoo.com","Nombre 01");
$mail->AddAddress("prueba2@w7.cl","Nombre 02");
$mail->AddCC("pprueba3@w7.cl");
$mail->AddBCC("prueba4@w7.cl");
$body  = "Hola <strong>amigo</strong><br>";
$body .= "probando <i>PHPMailer<i>.<br><br>";
$body .= "<font color='red'>Saludos</font>";
$mail->Body = $body;
$mail->AltBody = "Hola amigo\nprobando PHPMailer\n\nSaludos";
$mail->AddEmbeddedImage('logo.jpg','logo.jpg');
$mail->AddAttachment("apachito.zip", "apachito.zip");
$mail->Send();
?>