<?php	

require_once('../../models/tarifa.class.php');
require_once('../../models/query.class.php');	
require_once('../../models/bd.class.php');	

$slots='';
if(isset($_GET['slots'])) $slots=$_GET['slots'];

$tarifa=new tarifa($slots);
$tarifa->devuelve_tarifa();
$valor=$tarifa->getValor();


echo '<input type="hidden" id="tarifa" value="'.$valor.'">';

?>






	