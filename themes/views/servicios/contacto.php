<?php

$country='';

 $ip = $_SERVER["REMOTE_ADDR"];
$country = geoip_country_name_by_name($ip);

?>

<div id="contacto"></div> 
<div class="cajamediapagina">

	<div class="titulo">Contacta con nosotros</div>
			
			<?php
	echo '<div class="cajaminidoble">';		
		/* ----- Datos Personales ------------*/	
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
				
				
				echo '<br>';
		
		/* ----- Datos T�cnicos ------------*/
		
				echo '<div class="datostecnicos">';
				
				$milabel = new label('aplicacion','Aplicaci�n','','');
				$milabel->crearLabel();
				$miselect = new select('aplicacion','id="aplicacion"',"aplicaciones","aplicaciones","idaplicaciones",'','activo=1 and (idioma="" or idioma="'.$_SESSION['idioma'].'") ','');
				$miselect->crearSelect();
				
				echo '<div id="otraaplic">';
					$milabel = new label('otraaplicacion','Indica la aplicaci&oacute;n que usas','','');
					$milabel->crearLabel();
					$miinput = new input('text','id="otraaplicacion" name="otraaplicacion" class="input"','','');
					$miinput->crearInput();
				echo '</div>';
				echo '<div id="versiones"></div>';
				
				$milabel = new label('motor','Motor','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="motor" name="motor" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('plugin','Plugin','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="plugin" name="plugin" class="input"','','');
				$miinput->crearInput();
				
			
				

			echo '</div>';	
					
		echo '</div>	
		
		
		<div class="cajaminidoble">';	
		/* ----- Datos Personales ------------*/
				$milabel = new label('telefono','Tel�fono','','');
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
					<option value="0">-- Seleccionar --</option>
					<option value="informacion_serv">Solicitar informaci�n</option>
					<option value="presupuesto_serv">Presupuesto</option>
					<option value="tecnica_serv">Consulta T�cnica</option>
					<option value="facturacion_serv">Facturaci�n</option>
					<option value="sugerencias_serv">Sugerencias</option>
					</select>
				</div>';


					/* ----- Datos T�cnicos ------------*/
			echo '<div class="datostecnicos">';	
				echo '<br>';
				echo '<div class="datostecnicos">';
				$milabel = new label('numframes','N�mero de Frames','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="numframes" name="numframes" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('tframes','Tiempo por Frames','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="tframes" name="tframes" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('equipo','Equipo','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="equipo" name="equipo" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('procesador','Procesador','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="procesador" name="procesador" class="input"','','');
				$miinput->crearInput();
				
				
				echo '</div>';
				
		
				
				
echo '</div>';
echo '</div>';
		echo '<div class="cajaformulario">';
			echo '<div class="datosconsulta">';
				$milabel = new label('consulta','Escribe tu Consulta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','class="textareaamplia"','','');
				$miarea->crearArea();
			echo '</div>';	
				$miinput = new input('hidden','id="pais" name="pais" class="input"',$country,'');
				$miinput->crearInput();
				echo '<input type="button" id="envio" name="envio" class="botonenvio"  value="Enviar">';
				$miformulario->cerrarFormulario();
				echo '<div style="clear:both"></div>';
			
				
				?>
				<div id="respuesta"><div class="iconclose" style="float:right;"></div><div style="clear:both"></div><div id="respuestaaux"></div></div>
				<div style="clear:both"></div>
		<br><br><br><br>
	
</div>



		