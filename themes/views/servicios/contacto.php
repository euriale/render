

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
				
				$milabel = new label('telefono','Teléfono','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="telefono" name="telefono" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('empresa','Empresa','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="empresa" name="empresa" class="input"','','');
				$miinput->crearInput();
		echo '</div>		
		<div class="cajaminidoble">';		
				$milabel = new label('aplicacion','Aplicación','','');
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
				$milabel = new label('consulta','Envie su pregunta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','','','');
				$miarea->crearArea();

				echo '<input type="button" id="envio" name="envio" class="botonnegro"  value="Enviar">';
				$miformulario->cerrarFormulario();
				
				?>
				<div id="respuesta"><div class="iconclose" style="float:right;"></div><div style="clear:both"></div><div id="respuestaaux"></div></div>
				<div style="clear:both"></div>
		
		
			
</div>
	
</div>



		