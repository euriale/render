<?php
/*
echo '<div style="clear:both"></div>
	<li>
		<strong style="float:left;">'.$resultado3.' - </strong>
		<div id="pre'.$resultado2.'" style="border:solid 1px #666;width:500px;float:left;">'.$resultado.'</div>
	  ';
	  

  echo '<div class="barra_acciones" style="background-color:#f1f1f1;float:left;">';
		echo '<div class="editarpregunta" id="pri'.$resultado2.'" style="width:100px;color:orange;float:left;display:none;">[Editar]</div>';
		echo '<div class="eliminarpregunta" id="pru'.$resultado2.'" style="width:100px;color:blue;float:left;display:none;">[Eliminar]</div>';
		echo '<div class="guardarpregunta" id="pro'.$resultado2.'" style="width:100px;color:gold;float:left;display:none">[ok]</div>';

		echo '<div class="masrespuestas" id="mas'.$resultado2.'" style="width:150px;color:brown;float:left;display:none;">[Añadir Respuestas]</div>';
		echo '<div style="clear:both"></div>';
  echo '</div>';

echo '<div style="clear:both"></div>
	</li>';


echo '<div id="inputmasrespuestas'.$resultado2.'" style="display:none;">';
	
	$miformulario = new form('post',$GLOBALS['raiz'].'controllers/direct/guardarnuevarespuestaController.php','','enctype="multipart/form-data"','formulario');
	$miformulario->crearFormulario();  

	$miinput = new input('hidden','id="idpregunta" name="idpregunta" class="input"',$resultado2);
	$miinput->crearInput();
	 
	 
	$nuevapregunta= new tablarespuesta('',$resultado2);
	if ($nuevapregunta->respuestas_con_imagen()) {
		$miinput = new input('file','id="imagen" name="imagen" class="input"','','');
		$miinput->crearInput();
	}else{
		$miinput = new input('text','id="respuesta" name="respuesta" class="input"');
		$miinput->crearInput();	 
	}
	

	
	echo '<input type="submit" id="guardarencuesta" name="guardarencuesta" class="boton"  value="Agregar"><br><br><br>';
	$miformulario->cerrarFormulario();
echo '</div>';
*/
echo '<div class="preguntacrear" id="pre'.$resultado2.'">'.$resultado.'</div>';


echo '<div class="editarpregunta" id="pri'.$resultado2.'">[Editar]</div>';
echo '<div class="guardarpregunta" id="pro'.$resultado2.'">[ok]</div>';
echo '<div class="eliminarpregunta" id="pru'.$resultado2.'" style="color:red;">[Eliminar]</div>';

if ($resultado4!=3){
	echo '<div style="clear:both"></div>';
	echo '<div class="masrespuestos" id="mas'.$resultado2.'">[Añadir Respuestas]</div>';
}
echo '<div style="clear:both"></div>';


echo '<div id="inputmasrespuestas'.$resultado2.'" style="display:none;">';
	
	$miformulario = new form('post',$GLOBALS['raiz'].'controllers/direct/guardarnuevarespuestaController.php','','enctype="multipart/form-data"','formulario');
	$miformulario->crearFormulario();  

	$miinput = new input('hidden','id="idpregunta" name="idpregunta" class="input"',$resultado2);
	$miinput->crearInput();
	 
	 
	$nuevapregunta= new tablarespuesta('',$resultado2);
	if ($nuevapregunta->respuestas_con_imagen()) {
		$miinput = new input('file','id="imagen" name="imagen" class="input"','','');
		$miinput->crearInput();
	}else{
		$miinput = new input('text','id="respuesta" name="respuesta" class="input"');
		$miinput->crearInput();	 
	}
	

	
	echo '<input type="submit" id="guardarencuesta" name="guardarencuesta" class="boton"  value="Agregar"><br><br><br>';
	$miformulario->cerrarFormulario();
echo '</div>';

?>
