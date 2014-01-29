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
				$miinput = new input('text','id="nombre" name="nombre" class=""','','');
				$miinput->crearInput();
				
				$milabel = new label('apellidos','Apellidos',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="apellidos" name="apellidos" class=""','','');
				$miinput->crearInput();

				$milabel = new label('apellidos','Apellidos',1,'');
				$milabel->crearLabel();
				$miinput = new input('text','id="apellidos" name="apellidos" class=""','','');
				$miinput->crearInput();
				
				/*
				<tr>
				<td><label>Input tipo password</label></td>
				<td><input type="password" name="password" id="password"  style="width:100px" minlength="8"  maxlength="12" />
				</tr>
				<tr>
				<td><label>Textarea</label></td>
				<td><textarea></textarea>
				  </td>
				</tr>
				<tr>
				<td><label>Select</label></td>
				<td><select name="color" id="color" >
				<option value="0">Selecciona ...</option>
				<option value="rojo">Rojo</option>
				<option value="amarillo">Amarillo</option>
				<option value="verde">Verde</option>
				<option value="azul">Azul</option>
				</select>
				</td>
				</tr>
				<tr>
				<td><label>Archivo</label></td>
				<td><input type="file" name="archivo" id="archivo">
				  </td>
				</tr>

				<tr>
				<td><label>Radio</label></td>
				<td>
				<input type="radio" name="radio" value="1" />Sí<br />
				<input type="radio" name="radio" value="1" />No
				  </td>
				</tr>

				<tr>
				<td><label>Checkbox</label></td>
				<td>
				<input type="checkbox" name="checkbox" value="0" />Opción 1<br />
				<input type="checkbox" name="checkbox" value="1" />Opción 2
				  </td>
				</tr>
				<tr>
				<td><label>Button</label></td>
				<td>
				<input type="button" value="Mi botón" /></td>
				</tr>
				<tr>
				  <td>&nbsp;</td>
				  <td>&nbsp;</td>
				</tr>

				</table>
				</form>*/
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