<?php
$idencuesta=$_GET['r2'];

$idpregunta=$resultado;
$idpagina=$resultado2;


$nuevapaginabis=new tablapagina($idpagina);
$nuevapaginabis->devolver_pagina();
$orden=$nuevapaginabis->getOrden();



echo '<div class="salto" id="slt'.$idpregunta.'">Añadir salto página</div>';

echo '<div id="formulariopagina'.$idpregunta.'" style="display:none;">';
		$miformulario = new form('post',$GLOBALS['raiz'].'controllers/direct/guardarpaginaController.php','','enctype="multipart/form-data"','formulariopagina'.$idpregunta);
		$miformulario->crearFormulario();  

		$miinput = new input('hidden','id="idpregunta" name="idpregunta" class="input"',$idpregunta);
		$miinput->crearInput();
		$miinput = new input('hidden','id="idencuesta" name="idencuesta" class="input"',$idencuesta);
		$miinput->crearInput();
		$miinput = new input('hidden','id="ordenoriginal" name="ordenoriginal" class="input"',$orden);
		$miinput->crearInput();
		$miinput = new input('hidden','id="idpaginaoriginal" name="idpaginaoriginal" class="input"',$idpagina);
		$miinput->crearInput();
	 
		echo '<div class="txt13naranja" style="margin:15px;"><img src="../themes/img/nota.png" style="margin-right:7px;">Introduce el nombre de la página</div>';
		$miinput = new input('text','id="pagina" name="pagina" class="input_largo"','','');
		$miinput->crearInput();
		echo '<input type="submit" id="guardarpagina" name="guardarpagina" class="boton"  value="Guardar Página" style="float:left;height:28px;">';
		echo '<div class="cancelasalto" style="float:left" id="can'.$idpregunta.'">Cancelar</div><br>';
		echo '<div style="clear:both"></div>';
		$miformulario->cerrarFormulario();
	echo '</div>';


?>
