
<?php

$encuesta='';
$descripcion='';
$imagen='';
$escabecera='';
$idencuesta=$resultado4;
if ($resultado!='') $encuesta=$resultado;
if ($resultado3!='') $imagen=$resultado3;
if ($resultado2!='') $descripcion=$resultado2;
if ($resultado5!='') $escabecera=$resultado5; 


if ($escabecera==1) echo '<fieldset><legend>Página: Encabezado</legend>';
echo '<div class="txt17verdebold" style="margin-left:20px;margin-top:20px;">Datos de la encuesta</div>';
 
 //titulo
echo '<br><div class="titenc">Título:</div><div class="textosinedicion"  id="nom'.$idencuesta.'">'.$encuesta.'</div>';
echo '<div class="editarencuesta" id="enc'.$idencuesta.'">[Editar]</div>';
echo '<div class="guardarencuesta" id="oke'.$idencuesta.'">[ok]</div><br>';
echo '<div style="clear:both;"></div>';
echo '<br>';


//imagen 
if($imagen!=''){
	echo '<div class="titenc">Imagen:</div><div style="border:solid 1px #ddd;width:auto;padding:3px;float:left;margin-left:25px;" id="ima'.$idencuesta.'"><img width="150px;" src="../content/'.$imagen.'" width="450px"></div>';

	echo '<div class="confirmacionimgencuesta">¿Estás seguro de que quieres eliminar la imagen?<br>
		<div class="elisi"  id="isi'.$idencuesta.'" style="float:left;">SI</div><div style="float:right;" class="elino">NO</div>
	  </div>';
	echo '<div class="eliminarimagenencuesta" id="eli'.$idencuesta.'" style="color:red">[Eliminar]</div>';
	
	echo '<div id="formularioimagen" style="display:none;">';
		$miformulario = new form('post',$GLOBALS['raiz'].'controllers/direct/guardarimagenencuestaController.php','','enctype="multipart/form-data"','formulario');
		$miformulario->crearFormulario();  

		$miinput = new input('hidden','id="idencuesta" name="idencuesta" class="input"',$idencuesta);
		$miinput->crearInput();
	  
	 
		$milabel = new label('imagen','Si quieres puedes añadir una imagen a tu encuesta',1,'class=label');
		$milabel->crearLabel();
		$miinput = new input('file','id="imagen" name="imagen" class="input"','','');
		$miinput->crearInput();
		echo '<input type="submit" id="guardarencuesta" name="guardarencuesta" class="boton"  value="Insertar Imagen"><br><br><br>';
		$miformulario->cerrarFormulario();
	echo '</div>';

}else{
	echo '<div id="formularioimagen" style="display:none;">';
	$miformulario = new form('post',$GLOBALS['raiz'].'controllers/direct/guardarimagenencuestaController.php','','enctype="multipart/form-data"','formulario');
	$miformulario->crearFormulario();  

	$miinput = new input('hidden','id="idencuesta" name="idencuesta" class="input"',$idencuesta);
	$miinput->crearInput();
  
 
	$milabel = new label('imagen','Si quieres puedes añadir una imagen a tu encuesta',1,'class=label');
	$milabel->crearLabel();
	$miinput = new input('file','id="imagen" name="imagen" class="input"','','');
	$miinput->crearInput();
	echo '<input type="submit" id="guardarencuesta" name="guardarencuesta" class="boton"  value="Insertar Imagen"><br><br><br>';
	$miformulario->cerrarFormulario();
	echo '</div>';
}
echo '<div style="clear:both;"></div><br>';



 
//descripcion 
echo '<div class="titenc">Descripción:</div><div class="textosinedicion"  id="des'.$idencuesta.'">'.$descripcion.'</div>';
echo '<div class="editardescripcionencuesta" id="enc'.$idencuesta.'">[Editar]</div>';
echo '<div class="guardardescripcionencuesta" id="oke'.$idencuesta.'">[ok]</div><br>';
 
echo '<div style="clear:both;"></div>';


if ($escabecera==1) echo '</fieldset>';
 
echo '<div style="clear:both;"></div>';


echo '<div class="nuevapregunta"><a href="'.$GLOBALS['raiz'].'nueva-pregunta/'.$resultado4.'">Nueva Pregunta</a></div>';
echo '<div style="clear:both;"></div>';

?>
