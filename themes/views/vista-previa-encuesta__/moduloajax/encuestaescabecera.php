<?php
require_once('../../../../models/bd/tablaencuesta.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

$idencuesta=$_GET['idencuesta'];
$escabecera=$_GET['escabecera'];


$nuevaencuesta = new tablaencuesta($idencuesta);

$idencuesta=$nuevaencuesta->escabecera($escabecera);

?>