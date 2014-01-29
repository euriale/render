<?php
require_once('../../../../models/bd/tablapregunta.class.php');
require_once('../../../../models/bd/tablarespuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

$GLOBALS['raiz']='C:\wamp\www\yusanna';

$idpregunta=$_GET['idpregunta'];


//primero se deben eliminar las respuestas 1. imagenes físicas, 2. respuestas
$nuevasrespuestas= new tablarespuesta('',$idpregunta);
$nuevasrespuestas->eliminarimagenesfisicasporpregunta();
$nuevasrespuestas->eliminarrespuestasporpregunta();

//despues se eliminan preguntas
$nuevapregunta = new tablapregunta($idpregunta);
$nuevapregunta->eliminar_pregunta();

?>