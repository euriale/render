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
	$telefono='';
	if(isset($_GET['telefono'])) $telefono=$_GET['telefono'];
	$idaplicacion='';
	if(isset($_GET['idaplicacion'])) $idaplicacion=$_GET['idaplicacion'];
	$consulta='';
	if(isset($_GET['consulta'])) $consulta=$_GET['consulta'];
	$email='';
	if(isset($_GET['email'])) $email=$_GET['email'];
	$otraaplicacion='';
	if(isset($_GET['otraaplicacion'])) $otraaplicacion=$_GET['otraaplicacion'];
	$versiones='';
	if(isset($_GET['versiones'])) $versiones=$_GET['versiones'];
	
	$bd = new bd();
	$query1 = new query('insert into clientes (nombre, apellidos,telefono,idaplicacion,consulta,email,otraaplicacion,idversion) values ("'.$nombre.'", "'.$apellidos.'","'.$telefono.'","'.$idaplicacion.'","'.$consulta.'","'.$email.'","'.$otraaplicacion.'","'.$versiones.'")',$bd);
	
	echo 'Su consulta se ha enviado correctamente. ';


?>






