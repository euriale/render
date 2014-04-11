<?php	
session_start();  
require_once('../../models/query.class.php');	
require_once('../../models/bd.class.php');	

if ($_SERVER['HTTP_HOST']=="www.renderdrive.com") $raiz='http://www.renderdrive.com/';
else $GLOBALS['raiz']='/render/';


	$nombre='';
	if(isset($_POST['nombre'])) $nombre=$_POST['nombre'];
	$apellidos='';
	if(isset($_POST['apellidos'])) $apellidos=$_POST['apellidos'];
	$telefono='';
	if(isset($_POST['telefono'])) $telefono=$_POST['telefono'];
	$idaplicacion='';
	if(isset($_POST['idaplicacion'])) $idaplicacion=$_POST['idaplicacion'];
	$consulta='';
	if(isset($_POST['consulta'])) $consulta=$_POST['consulta'];
	$email='';
	if(isset($_POST['email'])) $email=$_POST['email'];
	$otraaplicacion='';
	if(isset($_POST['otraaplicacion'])) $otraaplicacion=$_POST['otraaplicacion'];
	
	
	$bd = new bd();
	$query1 = new query('insert into clientes (nombre, apellidos,telefono,idaplicacion,consulta,email,otraaplicacion) values ("'.$nombre.'", "'.$apellidos.'","'.$telefono.'","'.$idaplicacion.'","'.$consulta.'","'.$email.'","'.$otraaplicacion.'")',$bd);


?>






