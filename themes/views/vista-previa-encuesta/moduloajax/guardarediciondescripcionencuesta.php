<?php
require_once('../../../../models/bd/tablaencuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../controllers/funciones.php');

$idencuesta=$_GET['idencuesta'];
echo $_GET['texto'];
$texto=nl2br($_GET['texto']);
$texto=latin1($texto);


$nuevaencuesta = new tablaencuesta($idencuesta,'',$texto);
$idencuesta=$nuevaencuesta->modificar_descripcion_encuesta();

?>