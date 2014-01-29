<?php
require_once('../../../../models/bd/tablapagina.class.php');
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

$idpagina=$_GET['idpagina'];
$texto=$_GET['texto'];


$nuevapagina = new tablapagina($idpagina,$texto);
$nuevapagina->modificar_pagina();

?>