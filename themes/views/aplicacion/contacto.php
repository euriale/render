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
					<option>-- Seleccionar --</option>
					<option value="informacion_app">Solicitar informaci�n</option>
					<option value="tecnica_app">Consulta T�cnica</option>
					<option value="facturacion_app">Facturaci�n</option>
					<option value="sugerencias_app">Sugerencias</option>
					</select>
				</div>';
				
				
			
echo '</div>';
		echo '<div class="cajaformulario">';
				$milabel = new label('consulta','Escribe tu Consulta',1,'');
				$milabel->crearLabel();
				$miarea = new area('consulta','class="textareaamplia"','','');
				$miarea->crearArea();
				
				echo '<input type="button" id="envio" name="envio" class="botonenvio"  value="Enviar">';
				$miformulario->cerrarFormulario();
				echo '<div style="clear:both"></div>';
		echo '</div>';		
				?>
				
				<br><br><br>
		
		

	
</div>



		