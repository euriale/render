   
<?php
$country='';
 $ip = $_SERVER["REMOTE_ADDR"];
$country = geoip_country_name_by_name($ip);

?>




<div class="primeracaja">
<div id="contacto"></div> 
	<div class="titulo">Contacta con nosotros</div>
			
			<?php
	
				$miformulario = new form('post',$GLOBALS['raiz']. 'controllers/direct/guardarclienteController.php','','','formulario');
				$miformulario->crearFormulario(); 
		echo '<div class="cajaminidoble">';					
				$milabel = new label('nombre','Nombre',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="nombre" name="nombre" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('apellidos','Apellidos','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="apellidos" name="apellidos" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('empresa','Empresa','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="empresa" name="empresa" class="input"','','');
				$miinput->crearInput();

				$milabel = new label('email','Email',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="email" name="email" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('telefono','Teléfono','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="telefono" name="telefono" class="input"','','');
				$miinput->crearInput();
				
				$miinput = new input('hidden','id="pais" name="pais" class="input"',$country,'');
				$miinput->crearInput();
		echo '</div>		
		<div class="cajaminidoble">';		
				$milabel = new label('motivo','Motivo de la consulta','','');
				$milabel->crearLabel();
				echo '<div class="elementotext"><select name="motivo" class="" id="motivo">
					<option>-- Seleccionar --</option>
					<option value="informacion">Solicitar información</option>
					<option value="tecnica">Consulta Técnica</option>
					<option value="facturacion">Facturación</option>
					<option value="sugerencias">Sugerencias</option>
					</select>
				</div>';
				
				$milabel = new label('consulta','Escribe tu Consulta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','rows="5" cols="20"','','');
				$miarea->crearArea();
			
echo '</div>';
				echo '<input type="button" id="envio" name="envio" class="botonenvio"  value="Enviar" />';
				$miformulario->cerrarFormulario();
				
				?>
				<br /><br /><br />
		
		

	
</div>


<div style="clear:both"></div>
		