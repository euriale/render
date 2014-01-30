<?php
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../models/label.class.php');
require_once('../../../../models/select.class.php');

$idaplicaciones=$_GET['valor'];

$milabel = new label('versiones','Versión',1,'');
$milabel->crearLabel();
$miselect = new select('versiones','id="versiones"',"versiones","versiones","idversiones",'','idaplicacion='.$idaplicaciones,'');
$miselect->crearSelect();

$idencuesta=$nuevaencuesta->escabecera($escabecera);

?>