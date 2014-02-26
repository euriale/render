<?php	
session_start();  
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

if ($_SERVER['HTTP_HOST']=="www.renderdrive.com") $raiz='http://www.renderdrive.com/';
else $GLOBALS['raiz']='/render/';


	$nombre='';
	if(isset($_GET['nombre'])) $nombre=$_GET['nombre'];
	$apellidos='';
	if(isset($_GET['apellidos'])) $apellidos=$_GET['apellidos'];
	$empresa='';
	if(isset($_GET['empresa'])) $empresa=$_GET['empresa'];
	$motivo='';
	if(isset($_GET['motivo'])) $motivo=$_GET['motivo'];
	$consulta='';
	if(isset($_GET['consulta'])) $consulta=$_GET['consulta'];
	$email='';
	if(isset($_GET['email'])) $email=$_GET['email'];
	$pais='';
	if(isset($_GET['pais'])) $pais=$_GET['pais'];
		
	$bd = new bd();
	$query1 = new query('insert into clientes (nombre, apellidos,telefono,empresa,consulta,email,motivo,pais) values ("'.$nombre.'", "'.$apellidos.'","'.$telefono.'","'.$empresa.'","'.$consulta.'","'.$email.'","'.$motivo.'","'.$pais.'")',$bd);
	
	echo 'Su consulta se ha enviado correctamente. ';
	
/*---------------------Correo a info@renderdrive.com-----------------------*/
$destinatario = 'info@renderdrive.com,mjlucena1@gmail.com,xavifernan@gmail.com';
$asunto = "Consulta realizada en RenderDrive";
$cuerpo = '
	<html>
	<head>
	   <title>Consulta realizada en RenderDrive </title>
	</head>
	<body>
	<p>
	Nombre: '.$nombre.'<br>
	Apellidos: '.$apellidos.'<br>
	Email: '.$email.'<br>
	Telefono: '.$telefono.'<br>
	Empresa: '.$empresa.'<br>
	Motivo: '.$motivo.'<br>	
	País: '.$pais.'<br>
	Consulta: '.$consulta.'<br>
	</p>
	</body>
	</html>
	';

//para el envío en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//dirección del remitente
	$headers .= "From: Render Drive <info@renderdrive.com>\r\n";

//dirección de respuesta, si queremos que sea distinta que la del remitente
	$headers .= "Reply-To: info@renderdrive.com\r\n";


mail($destinatario,$asunto,$cuerpo,$headers)


?> 








