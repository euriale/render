<?php
require_once('../../../../models/bd/tablapregunta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../controllers/funciones.php');


$idpregunta=$_GET['idpregunta'];
$texto=$_GET['texto'];
$texto=latin1($texto);


$nuevapregunta = new tablapregunta($idpregunta,$texto);
$nuevapregunta->modificar_pregunta();

?>