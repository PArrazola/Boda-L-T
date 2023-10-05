<?php
require_once '/path/to/PHPMailer/src/PHPMailer.php';
require 'path/to/PHPMailerAutoload.php';
require 'path/to/SMTP.php';


// Datos a especificar del form
$nombreasistente = $_POST['NombreCompleto'];
$email = $_POST['Email'];
$domicilio = $_POST['Domicilio'];
$acompañante = $_POST['Acompañante'];
$nombreacompañante = $_POST['NombreAcompañante'];
$boda = $_POST['Boda'];
$preboda = $_POST['Preboda'];
$postboda = $_POST['Postboda'];
$autobus = $_POST['Autobus'];
$alergias = $_POST['Alergias'];
$nombrealergia = $_POST['NombreAlergia'];
$tallapie = $_POST['Tallapie'];
$alhambra = $_POST['Alhambra'];
$golf = $_POST['Golf'];
$ninguna = $_POST['Ninguna'];


$subject = "Nuevo asistente:" . $nombreasistente;



// Set up email message
$mail = new PHPMailer\PHPMailer\PHPMailer();


$mail->isSMTP();
$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->Username = 'parrazolamartin@gmail.com';
$mail->Password = '183paulitapaula318';
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->setFrom('parrazolamartin@gmail.com', 'Paula');
$mail->addAddress('parrazolamartin@gmail.com');
$mail->Subject = "$subject 'Nueva confirmación de Asistencia'";
$mail->Body = "Name: $nombreasistente<br>Email: $email<br>Message: $acompañante<br> $nombreacompañante<br> $boda $preboda $postboda $autobus $alergias $nombrealergia $tallapie $alhambra $golf $ninguna";

if (!$mail->send()) {
    echo 'Error sending email: ' . $mail->ErrorInfo;
} else {
    echo 'Email sent successfully!';
}
