<?php
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');
require_once('../../../../models/label.class.php');
require_once('../../../../models/select.class.php');
require_once('../../../../models/input.class.php');

$idaplicaciones=$_GET['idaplicaciones'];

if ($idaplicaciones!='8' && $idaplicaciones!='9' && $idaplicaciones!='10'){
	$milabel = new label('versiones','Versiones',1,'');
	$milabel->crearLabel();
	$miselect = new select('versiones','id="versiones"',"version_aplicaciones","version","idversion_aplicacion",'','activo=1 and idaplicacion='.$idaplicaciones,'');
	$miselect->crearSelect();
}
else{
	$milabel = new label('versiones','Indica la aplicaci&oacute;n que usas',1,'');
	$milabel->crearLabel();
	$miinput = new input('text','id="telefono" name="telefono" class="input"','','');
	$miinput->crearInput();
}

?>