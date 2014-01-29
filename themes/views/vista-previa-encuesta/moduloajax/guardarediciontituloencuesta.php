<?php
require_once('../../../../models/bd/tablaencuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../controllers/funciones.php');

$idencuesta=$_GET['idencuesta'];
$texto=$_GET['texto'];
$texto=latin1($texto);

$nuevaencuesta = new tablaencuesta($idencuesta,$texto);
$nuevaencuesta->crear_url_amigable();
$idencuesta=$nuevaencuesta->modificar_titulo_encuesta();

?>