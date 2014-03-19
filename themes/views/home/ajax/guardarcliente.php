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
	$telefono='';
	if(isset($_GET['telefono'])) $telefono=$_GET['telefono'];
	$idaplicacion='';
	if(isset($_GET['idaplicacion'])) $idaplicacion=$_GET['idaplicacion'];	
		$otraaplicacion='';
	if(isset($_GET['otraaplicacion'])) $otraaplicacion=$_GET['otraaplicacion'];	
	$versiones='';
	if(isset($_GET['versiones'])) $versiones=$_GET['versiones'];
	$motor='';
	if(isset($_GET['motor'])) $telefono=$_GET['motor'];
	$plugin='';
	if(isset($_GET['plugin'])) $plugin=$_GET['plugin'];	
	$equipo='';
	if(isset($_GET['equipo'])) $equipo=$_GET['equipo'];	
	$procesador='';
	if(isset($_GET['procesador'])) $procesador=$_GET['procesador'];	
	$numframes='';
	if(isset($_GET['numframes'])) $numframes=$_GET['numframes'];	
	$tframes='';
	if(isset($_GET['tframes'])) $tframes=$_GET['tframes'];		
		
	
		
	$bd = new bd();
	$query1 = new query('insert into clientes (nombre, apellidos,telefono,empresa,consulta,email,motivo,pais) values ("'.$nombre.'", "'.$apellidos.'","'.$telefono.'","'.$empresa.'","'.$consulta.'","'.$email.'","'.$motivo.'","'.$pais.'")',$bd);
	
	echo 'La consulta se ha enviado correctamente. ';
	
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


mail($destinatario,$asunto,$cuerpo,$headers);*/


?> 








