<?php
$GLOBALS['raiz']='C:\wamp\www\yusanna';
require_once('../../../../models/bd/tablaencuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

$idencuesta=$_GET['idencuesta'];

$accion=$_GET['accion'];

if ($accion=='eliminar'){
	$nuevaencuesta = new tablaencuesta($idencuesta);
	$nuevaencuesta->devuelve_encuesta_por_id();
	$nuevaencuesta->eliminar_imagenfisica_encuesta();
	$nuevaencuesta->eliminar_imagen_encuesta();
}
?>