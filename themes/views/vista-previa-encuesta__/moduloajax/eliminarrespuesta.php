<?php
require_once('../../../../models/bd/tablapregunta.class.php');
require_once('../../../../models/bd/tablarespuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

$GLOBALS['raiz']='C:\wamp\www\yusanna';

$idrespuesta=$_GET['idrespuesta'];

//primero se comprueba si las respuestas contienen imagenes y se eliminan fisicamente, despues la respuesta de la BD
$nuevasrespuestas= new tablarespuesta('','',$idrespuesta);
$nuevasrespuestas->eliminarimagenesfisicassihay();
$nuevasrespuestas->eliminar_respuesta();
?>