<?php
$country='';
 $ip = $_SERVER["REMOTE_ADDR"];
$country = geoip_country_name_by_name($ip);

?>



<div class="cajamediapagina">
<div id="contacto"></div> 
	<div class="titulo">Contacta con nosotros</div>
			
			<?php
	echo '<div class="cajaminidoble">';			
				$miformulario = new form('post',$GLOBALS['raiz']. 'controllers/direct/guardarclienteController.php','','','formulario');
				$miformulario->crearFormulario(); 
				
				$milabel = new label('nombre','Nombre',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="nombre" name="nombre" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('apellidos','Apellidos','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="apellidos" name="apellidos" class="input"','','');
				$miinput->crearInput();

				$milabel = new label('email','Email',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="email" name="email" class="input"','','');
				$miinput->crearInput();
				

		echo '</div>		
		<div class="cajaminidoble">';		
				$milabel = new label('telefono','Teléfono','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="telefono" name="telefono" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('empresa','Empresa','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="empresa" name="empresa" class="input"','','');
				$miinput->crearInput();
				
				
				$milabel = new label('motivo','Motivo de la consulta','','');
				$milabel->crearLabel();
				echo '<div class="elementotext"><select name="motivo" class="" id="motivo">
					<option>-- Seleccionar --</option>
					<option value="informacion_app">Solicitar información</option>
					<option value="tecnica_app">Consulta Técnica</option>
					<option value="facturacion_app">Facturación</option>
					<option value="sugerencias_app">Sugerencias</option>
					</select>
				</div>';
				
				
			
echo '</div>';
		echo '<div class="cajaformulario">';
				$milabel = new label('consulta','Escribe tu Consulta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','class="textareaamplia"','','');
				$miarea->crearArea();
				
				$miinput = new input('hidden','id="pais" name="pais" class="input"',$country,'');
				$miinput->crearInput();
				
				echo '<input type="button" id="envio" name="envio" class="botonenvio"  value="Enviar">';
				$miformulario->cerrarFormulario();
				echo '<div style="clear:both"></div>';
		echo '</div>';		
				?>
				
				<br><br><br>
		
		

	
</div>



		