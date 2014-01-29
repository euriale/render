<?php
require_once('../../../../models/bd/tablarespuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

$idrespuesta=$_GET['idrespuesta'];
$texto=$_GET['texto'];


$nuevarespuesta = new tablarespuesta($texto,'',$idrespuesta);
$nuevarespuesta->modificar_respuesta();

?>