
		<div class="cajablanca" style="height:650px;"><div id="contacto"></div> 

			<div class="seccioncaja">
			<div class="secciones">
		
			</div>
			<div class="secciones">
			<h4>Contacto</h4>
			<fieldset>
				<?php
				
				$miformulario = new form('post',$GLOBALS['raiz']. 'controllers/direct/guardarclienteController.php','','','formulario');
				$miformulario->crearFormulario(); 
				
				$milabel = new label('nombre','Nombre',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="nombre" name="nombre" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('apellidos','Apellidos',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="apellidos" name="apellidos" class="input"','','');
				$miinput->crearInput();

				$milabel = new label('email','Email',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="email" name="email" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('telefono','Teléfono',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="telefono" name="telefono" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('aplicacion','Aplicación',1,'');
				$milabel->crearLabel();
				$miselect = new select('aplicacion','id="aplicacion"',"aplicaciones","aplicaciones","idaplicaciones",'','1=1','');
				$miselect->crearSelect();
				echo '<div class="versiones"></div>';
				$milabel = new label('consulta','Envie su pregunta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','','','');
				$miarea->crearArea();
				

				echo '<input type="submit" id="envio" name="envio" class="botonnegro"  value="Enviar">';
				$miformulario->cerrarFormulario();

				?>
			</fieldset>
			</div>
		</div>
		</div>
		
				
		<div class="espacio"></div>
		<div class="espacio"></div>

		