 <div class="" id="diapo1">
		<img src="themes/img/12.jpg" style="width:100%">
		<img src="themes/img/25.jpg" style="width:100%">

		<img src="themes/img/3.jpg" style="width:100%" >
		<img src="themes/img/3d-gris.jpg" style="width:100%">
		
		
</div>

<div class="" id="diapo2">
		<div class="espacio"></div>
		
		<div class="cajanocolor"> 
			<h2>Granja de Render Online</h2>
			<h3>Ponemos a tu disposicion cientos de nodos compatibles con la mayoría del software 3D </h3>
			<div class="boton">Si usas Maya prueba nuestra APP</div>
		</div> 		

		<div class="espacio"></div>
		
		
	<div class="cajawhite">  
		<div class="seccioncaja">
		
			<div class="secciones" id="logos1">
				<div class="logoaplic"><img src="themes/img/logos/cinema.png" title="Cinema 4D" alt="Cinema 4D" width="80px"></div>
				<div class="logoaplic"><img src="themes/img/logos/blender.png" title="Blender" alt="Blender" width="80px"></div>
				<div class="logoaplic"><img src="themes/img/logos/lighwave.png" title="LightWave" alt="LightWave" width="80px"></div>
			</div>	
			<div class="secciones" id="logos2">
				<div class="logoaplic"><img src="themes/img/logos/3dmax.png" title="3D Max" alt="3D Max" width="80px"></div>
				<div class="logoaplic"><img src="themes/img/logos/maya.png" title="Maya" alt="Maya" width="80px"></div>
			</div>
		
			<div class="secciones" id="textoseccion">
			<h4> Nuestros Servicios Render</h4>
			<h5>Nuestros nodos están preparados para Maya, Cinema 4D, Blender, LightWave, 3D Max, así como motores VRAY, Fryrender etc. <br>	Si usas otro software 3D o un plugin en concreto, no dudes en consultarnos. </h5>
			</div>
		</div>
	</div>


		<div class="espacio"></div>
		<div class="espacio"></div>
		
		<div class="cajablanca">
			Tarifas tabla resumida
		</div>

		
		<div class="espacio"></div>
		<div class="espacio"></div>
		
		<div class="cajablanca">
			<div class="seccioncaja">
			<div class="secciones">
			<img src="themes/img/logos/prueba.jpg" title="Contacto" alt="Contacto" width="90px">
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
				$milabel = new label('consulta','Envie su pregunta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','','','');
				$miarea->crearArea();
				
				echo '<input type="submit" id="envio" name="envio" class="boton"  value="Enviar">';
				$miformulario->cerrarFormulario();
				?>
			</fieldset>
			</div>
		</div>
		</div>
		
				
		<div class="espacio"></div>
		<div class="espacio"></div>
		
		<div class="cajablanca">
		<div class="seccioncaja">
		 <div class="secciones" id="logos3"><img src="themes/img/logos/faq.jpg" title="Contacto" alt="Contacto" width="80px"></div>
		 <div class="secciones">
		  <h4> Preguntas Frencuentes</h4>
		  <div class="abreintnaranja"></div><div class="txt16naranja"> Pregunta1 </div><div class="cierraintnaranja"></div>
		  <div style="clear:both"></div>
		  <div class="txt16negro"> Respuesta 1 </div>
		 </div>
		</div>	
		</div>