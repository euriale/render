<?php	
session_start();  
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

if ($_SERVER['HTTP_HOST']=="www.renderdrive.com") $raiz='http://www.renderdrive.com/';
else $GLOBALS['raiz']='/render/';


	$nombreapun='';
	if(isset($_GET['nombreapun'])) $nombreapun=$_GET['nombreapun'];
	$emailapun='';
	if(isset($_GET['emailapun'])) $emailapun=$_GET['emailapun'];
	$motivo='apuntate';
	$pais='00';

	$bd = new bd();
	$query1 = new query('insert into clientes (nombre,email,motivo,pais) values ("'.$nombreapun.'","'.$emailapun.'","'.$motivo.'","'.$pais.'")',$bd);
	
	echo '<div style="color:#FF8C00;">Datos enviados correctamente.</div>';
	
/*---------------------Correo a info@renderdrive.com-----------------------

$destinatario = 'info@renderdrive.com,mjlucena1@gmail.com,xavifernan@gmail.com';
$asunto = "Consulta realizada en RenderDrive";
$cuerpo = '
	<html>
	<head>
	   <title>Consulta realizada en RenderDrive </title>
	</head>
	<body>
	<p>
	Nombre: '.$nombreapun.'<br>
	Email: '.$emailapun.'<br>
	Motivo: '.$motivo.'<br>
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

*/
?> 








