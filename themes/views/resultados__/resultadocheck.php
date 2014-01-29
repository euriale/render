<?php
// resultado $fila->posicion
// resultado2 $fila->obligatorio
// resultado3 $filax->respuesta
// resultado4 $filax->idrespuesta
// resultado5 $filax->imagen

//tener en cuenta la posición para estilos

$posicion='v';
$porcent=0;
if ($resultado8>0) $porcent=intval(($resultado8*100)/$resultado7);

	if ($resultado5==''){
	echo '<div class="checkrespuesta'.$posicion.'">';
	echo '<div style="float:left;line-height:2;max-width:93%" class="txt13gris">'.$resultado3.'</div>'; 
	echo '<div style="clear:both;"></div>';
	echo '<div style="float:left;" class="txt13naranja">'.$porcent.'%&nbsp;</div>'; 
	 echo '<div class="txt13verdebold" style="float:left;margin-right:10px;">'.$resultado8.'/'.$resultado7.' </div>';
	echo '<div class="barrita"><div style="width:'.$resultado6.'px;height:17px;background:#009900;"></div></div>';
	}
else  if ($resultado5!=''){
	echo '<div class="checkrespuesta'.$posicion.'" style="width:25%;">';
	echo '<div style="max-width:60%" class="imagencheck'.$posicion.'"><img src="'.$GLOBALS['raiz'].'content/answers/'.$resultado5.'"></div>';
	echo '<div style="clear:both;"></div>';
	echo '<div style="float:left;" class="txt13naranja">'.$porcent.'%&nbsp;</div>'; 
	 echo '<div class="txt13verdebold" style="font:bold;float:left;maegin-right:10px;">'.$resultado8.'/'.$resultado7.' </div>';
	echo '<div class="barrita"><div style="width:'.$resultado6.'px;height:17px;background:#009900;"></div></div>';
	
	
}
if ($posicion=='v') echo '<div style="clear:both;"></div>';
	echo '</div>';

?>
