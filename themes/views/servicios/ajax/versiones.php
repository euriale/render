<?php
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../models/label.class.php');
require_once('../../../../models/select.class.php');
require_once('../../../../models/input.class.php');

$idaplicaciones=$_GET['idaplicaciones'];

if ($idaplicaciones!='8' && $idaplicaciones!='9' && $idaplicaciones!='10'){
	$milabel = new label('versiones','Versiones','','');
	$milabel->crearLabel();
	$miselect = new select('versionesaux','id="versionesaux"',"version_aplicaciones","version","idversion_aplicacion",'','activo=1 and idaplicacion='.$idaplicaciones,'');
	$miselect->crearSelect();

}
else{

}

?>
