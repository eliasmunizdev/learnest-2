<?php
/**
 * @version 1.0
 */

require("class.phpmailer.php");
require("class.smtp.php");

// Valores enviados desde el formulario
if ( !isset($_POST["nombre"]) || !isset($_POST["email"])) {
header('Location: ../index.php?enviado=2'); 
}

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$nro = $_POST["celular"];
$dni = $_POST["dni"];
$celular = $_POST["celular"];
$laboral = $_POST["laboral"];
$provincia = $_POST["provincia"];
$asunto = "Solicitud Prestamo | ".  $_POST["nombre"];


if(isset($_POST["dinero"])){
    $dinero = $_POST["dinero"];
}else{
    $dinero = "No especificó";
}

switch($laboral){
    case 1:
        $laboral = "Empleado Municipal";
    break;
    case 2:
         $laboral = "Empleado Privado";
    break;
    case 3:
         $laboral = "Jubilado";
    break;
    case 4:
         $laboral = "Empleado Provincial";
    break;
    case 5:
         $laboral = "Pensionado";
    break;
    case 5:
         $laboral = "Trabajador Petrolero";
    break;
}

switch($provincia){
    case 1:
        $provincia = "Neuquén";
    break;
    case 2:
         $provincia = "Río Negro";
    break;
}


$mensaje =  "De:" . $email . "\r\n" .
"Nombre: " . $nombre . "\r\n" .
"DNI: " . $nombre . "\r\n" .
"Celular: " . $celular . "\r\n" .
"Situación Laboral: " . $laboral . "\r\n" .
"Provincia: " . $provincia . "\r\n" .
"Dinero: " . $dinero . "\r\n" ;

// Datos de la cuenta de correo utilizada para enviar vía SMTP
$smtpHost = "smtp.gmail.com";  // Dominio alternativo brindado en el email de alta 
$smtpUsuario = "infomigueljakobs@gmail.com";  // Mi cuenta de correo
$smtpClave = "MJ&asoc2014";  // Mi contraseña


// Email donde se enviaran los datos cargados en el formulario de contacto
$emailDestino = "elias@loodagency.com";

$mail = new PHPMailer();
$mail->IsSMTP();
$mail->SMTPAuth = true;
$mail->Port = 587; 
$mail->SMTPSecure = 'tls';
$mail->IsHTML(true); 
$mail->CharSet = "utf-8";


// VALORES A MODIFICAR //
$mail->Host = $smtpHost; 
$mail->Username = $smtpUsuario; 
$mail->Password = $smtpClave;

$mail->From = $smtpUsuario; // Email desde donde envío el correo.
$mail->FromName = $nombre;
$mail->setFrom($smtpUsuario, 'Envío');
$mail->AddAddress($emailDestino); // Esta es la dirección a donde enviamos los datos del formulario
$mail->AddAddress("info@loodagency.com");
$mail->Subject = $asunto; // Este es el titulo del email.
$mensajeHtml = nl2br($mensaje);
$mail->Body = "{$mensajeHtml}"; // Texto del email en formato HTML
$mail->AltBody = "{$mensaje} \n\n "; // Texto sin formato HTML
$mail->IsHTML(true);
// FIN - VALORES A MODIFICAR //
  
$estadoEnvio = $mail->Send(); 
if($estadoEnvio){
    header('Location: ../solicitud-prestamo.php?enviado=1');
} else {
    header('Location: ../solicitud-prestamo.php?enviado=2');
}

?>