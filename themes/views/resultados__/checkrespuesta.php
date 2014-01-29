<?php
// resultado $fila->posicion
// resultado2 $fila->obligatorio
// resultado3 $filax->respuesta
// resultado4 $filax->idrespuesta
// resultado5 $filax->imagen

//tener en cuenta la posición para estilos
/*
if ($resultado5==''){
	echo '<div id="rsp'.$resultado4.'" style="border:solid 1px green;width:300px;">'.$resultado3.'</div> <div class="editarrespuesta" id="rep'.$resultado4.'" style="width:100px;color:orange;float:left;display:none;">[Editar]</div>'; 
	echo '<div class="eliminarrespuesta" id="elr'.$resultado4.'" style="width:100px;color:blue;float:left;display:none;">[Eliminar]</div>';
	echo '<div class="guardarrespuesta" id="okr'.$resultado4.'" style="width:100px;color:gold;float:left;display:none">[ok]</div><br>';
}else if ($resultado5!=''){
	echo '<div id="rsp'.$resultado4.'" style="border:solid 1px green;width:250px;"><img src="../content/answers/'.$resultado5.'" height="200px"></div>';
	echo '<div class="eliminarrespuesta" id="elr'.$resultado4.'" style="width:100px;color:blue;float:left;display:none;">[Eliminar]</div>';
}
 $miinput = new input('checkbox','id="respuesta'.$resultado4.'" name="respuesta'.$resultado4.'" class=""','','');
 $miinput->crearInput();
*/
$tamanyodivimagen=95;
if ($resultado=='4'){
	$posicion='h';
	$tamanyodivimagen=round((80/$resultado6), 0, PHP_ROUND_HALF_DOWN);
	}	
else $posicion='v';

 
	if ($resultado5==''){
	echo '<div class="checkrespuesta'.$posicion.'">';
	 $miinput = new input('checkbox','id="respuestacheck_'.$resultado7.'_'.$resultado4.'" name="respuesta_check_'.$resultado7.'_'.$resultado4.'" class="radiocrear"','','');
 $miinput->crearInput();
	echo '<div style="float:left;line-height:2;;max-width:93%" class="txt13gris">'.$resultado3.'</div>'; 
	
	}
else  if ($resultado5!=''){
	echo '<div class="checkrespuesta'.$posicion.'" style="width:25%;">';
			echo '<div style="max-width:60%" class="imagencheck'.$posicion.'"><img src="'.$GLOBALS['raiz'].'content/answers/'.$resultado5.'"></div>';
		if ($posicion=='h')  echo '<div style="clear:both;"></div>';
		 $miinput = new input('checkbox','id="respuestacheck_'.$resultado7.'_'.$resultado4.'" name="respuesta_check_'.$resultado7.'_'.$resultado4.'" class=""','','');
 $miinput->crearInput();
	
}
if ($posicion=='v') echo '<div style="clear:both;"></div>';
	echo '</div>';

?>
