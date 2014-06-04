<?php
$nombre='';
if(isset($_POST['name'])) $nombre=$_POST['name'];
$email='';
if(isset($_POST['email'])) $email=$_POST['email'];
$consulta='';
if(isset($_POST['message'])) $consulta=$_POST['message'];

/*---------------------Correo a hola@kualusa.com-----------------------*/
$destinatario = 'hola@kualusa.com,mjlucena1@gmail.com';
$asunto = "Consulta realizada en Kualusa";
$cuerpo = '
	<html>
	<head>
	   <title>Consulta realizada en Kualusa </title>
	</head>
	<body>
	<p>
	Nombre: '.$nombre.'<br>
	Email: '.$email.'<br>
	Consulta: '.$consulta.'<br>
	</p>
	</body>
	</html>
	';

//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
	$headers .= "From: Render Drive <hola@kualusa.com>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
	$headers .= "Reply-To: hola@kualusa.com\r\n";


mail($destinatario,$asunto,$cuerpo,$headers);
?>