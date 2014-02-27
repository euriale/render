<?php /*
$_SERVER["HTTP_CLIENT_IP"]!=""?$ip=$_SERVER["HTTP_CLIENT_IP"]:$ip=$_SERVER["REMOTE_ADDR"];

function getCountry($ip_address){
      
      $url = "http://ip-to-country.webhosting.info/node/view/36";
      
      $inici = "src=/flag/?type=2&cc2=";
      
      $ch = curl_init();
      curl_setopt($ch, CURLOPT_URL, $url);
      curl_setopt($ch, CURLOPT_POST,"POST");
      curl_setopt($ch, CURLOPT_POST, 1);
      curl_setopt($ch, CURLOPT_POSTFIELDS, "ip_address=$ip_address"); 
      
      ob_start();
      
      curl_exec($ch);
      curl_close($ch);
      $cache = ob_get_contents();
      ob_end_clean();
      
      $resto = strstr($cache,$inici);
      $pais = substr($resto,strlen($inici),2);
      
      return $pais;
   }$pais = strtolower(getCountry($ip));
   
   var_dump($pais);*/
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
				
				echo '<br><br>';
		
		/* ----- Datos Técnicos ------------*/
		
				$milabel = new label('motivo','Motivo de la consulta',1,'');
				$milabel->crearLabel();
				echo '<div class="elementotext"><select name="motivo" class="" id="motivo"><option>-- Seleccionar --</option><option value="1">Consulta Técnica</option><option value="2">Presupuesto</option></select></div>';
				
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
				
				$milabel = new label('motor','Motor','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="motor" name="motor" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('plugin','Plugin','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="plugin" name="plugin" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('tipo_equipo','Tipo de Equipo','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="tipo_equipo" name="tipo_equipo" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('procesador','Procesador','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="procesador" name="procesador" class="input"','','');
				$miinput->crearInput();
					
		echo '</div>		
		
		
		<div class="cajaminidoble">';	
		/* ----- Datos Personales ------------*/
				$milabel = new label('telefono','Teléfono','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="telefono" name="telefono" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('empresa','Empresa','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="empresa" name="empresa" class="input"','','');
				$miinput->crearInput();


					/* ----- Datos Técnicos ------------*/
				
				echo '<br><br><br><br><br>';
				
				$milabel = new label('num_frames','Número de Frames','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="num_frames" name="num_frames" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('t_frames','Tiempo por Frames','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="t_frames" name="t_frames" class="input"','','');
				$miinput->crearInput();
				
				$milabel = new label('tipo_equipo','Tiempo por Frames','','');
				$milabel->crearLabel();
				$miinput = new input('text','id="t_frames" name="t_frames" class="input"','','');
				$miinput->crearInput();
				

				
				$milabel = new label('consulta','Escribe tu Consulta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','','','');
				$miarea->crearArea();
			
echo '</div>';
				echo '<input type="button" id="envio" name="envio" class="botonenvio"  value="Enviar">';
				$miformulario->cerrarFormulario();
				
				?>
				<div id="respuesta"><div class="iconclose" style="float:right;"></div><div style="clear:both"></div><div id="respuestaaux"></div></div>
				<div style="clear:both"></div>
		<br><br><br><br>
	
</div>



		