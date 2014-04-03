<div id="inicio"></div>
<div id="cabecera">
	<div class="logo">
		<h1><a href="<?php echo $GLOBALS['raiz']; ?>">Render <span class="drive">Drive</span></a></h1>	
	</div>	
	<div class="dreta">	
<!-- Pendiente realizar traducción de textos
	<div class="idiomas">
		<a href="<?php echo $GLOBALS['raiz'].'idioma/ES';?>"><img src="themes/img/sp.png" alt="" title="" border="0" /></a>
		<a href="<?php echo $GLOBALS['raiz'].'idioma/EN';?>"><img src="themes/img/uk.png" alt="" title="" border="0" /></a>
		<a href="<?php echo $GLOBALS['raiz'].'idioma/FR';?>"><img src="themes/img/fr.png" alt="" title="" border="0" /></a>
	</div>
	
-->
	<div style="clear:both"></div>
	<div class="renderapp"><a href="http://farm.renderdrive.com" target="_blank">Acceder</a></div>
	
	
   </div>
	   <ul class="navigation">
		<li id="menuinicio">
			<a class="menuinicioa" href="<?php echo $GLOBALS['raiz']; ?>" <?php if (!isset($_GET['r1'])) echo 'id="actitem"'; ?>><?php echo INICIO; ?>	</a>
		</li>
		<li id="menuapp">
			<a class="menuappa" href="aplicacion-render" <?php if (isset($_GET['r1']) && $_GET['r1']=='aplicacion-render') echo 'id="actitem"'; ?> >Aplicación</a>
		</li>
		<li id="menuserv">
			<a class="menuserva" href="servicios-render" <?php if (isset($_GET['r1']) && $_GET['r1']=='servicios-render') echo 'id="actitem"';?>>Servicios</a>
		</li>
		
		
   </ul>	
</div>	

<?php 
require_once(__SITE_PATH.'/'.$ccontroller);
?>

	

<div id="pie">
<div class="auxcajapie">

<?php 
if (!isset($_GET['r1'])){
	$enlaceinicio='';
	$classinicio='ancla';
	$enlaceaplicacion=$GLOBALS['raiz'].'aplicacion-render';
	$classaplicacion='';
	$enlaceservicios=$GLOBALS['raiz'].'servicios-render';
	$classservicios='';
} else if (isset($_GET['r1']) && $_GET['r1']=='aplicacion-render') {
	$enlaceinicio=$GLOBALS['raiz'];
	$classinicio='';
	$enlaceaplicacion='';
	$classaplicacion='ancla';
	$enlaceservicios=$GLOBALS['raiz'].'servicios-render';
	$classservicios='';
	
} else if (isset($_GET['r1']) && $_GET['r1']=='servicios-render') {
	$enlaceinicio=$GLOBALS['raiz'];
	$classinicio='';
	$enlaceaplicacion=$GLOBALS['raiz'].'aplicacion-render';
	$classaplicacion='';
	$enlaceservicios='';
	$classservicios='ancla';
}
?>

<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $enlaceinicio; ?>#inicio" class="<?php echo $classinicio; ?>">Render Drive</a></div>
	<ul>
		<li><a href="<?php echo $enlaceinicio; ?>#inicio" class="<?php echo $classinicio; ?>"> Nuestros Servicios</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#pq" class="<?php echo $classinicio; ?>">Por qué trabajar con Render Drive</a></li>
		<!--<li><a href="<?php echo $enlaceinicio; ?>#tiempos" class="<?php echo $classinicio; ?>">Reducción de tiempos</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#costes" class="<?php echo $classinicio; ?>" >Reducción de costes</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#confianza" class="<?php echo $classinicio; ?>">Confianza y disponibilidad</a></li>-->
		<li><a href="<?php echo $enlaceinicio; ?>#contacto" class="<?php echo $classinicio; ?>">Contacto</a></li>
	</ul>

</div>
<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $enlaceaplicacion; ?>#descripcion" class="<?php echo $classaplicacion; ?>">Aplicación Render</a></div>
	<ul>
		<li><a href="<?php echo $enlaceaplicacion; ?>#descripcion" class="<?php echo $classaplicacion; ?>">Conoce nuestra aplicación</a></li>
		<li><a href="<?php echo $enlaceaplicacion; ?>#tarifas" class="<?php echo $classaplicacion; ?>" >Tarifas</a></li>
		<li><a href="<?php echo $enlaceaplicacion; ?>#faqs" class="<?php echo $classaplicacion; ?>">FAQS</a></li>
		<li><a href="<?php echo $enlaceaplicacion; ?>#contacto" class="<?php echo $classaplicacion; ?>">Contacto</a></li>
	</ul>

</div>

<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $enlaceservicios; ?>#inicio" class="<?php echo $classservicios; ?>">Servicios Render</a></div>
	<ul>
		<li><a href="<?php echo $enlaceservicios; ?>#descripcion" class="<?php echo $classservicios; ?>">Conoce nuestros servicios</a></li>
		<li><a href="<?php echo $enlaceservicios; ?>#tarifas" class="<?php echo $classservicios; ?>">Tarifas</a></li>
		<li><a href="<?php echo $enlaceservicios; ?>#faqs" class="<?php echo $classservicios; ?>">FAQS</a></li>
		<li><a href="<?php echo $enlaceservicios; ?>#contacto" class="<?php echo $classservicios; ?>">Contacto</a></li>
	</ul>

</div>

<div class="cajapie">
	<div class="txtnaranja16">Síguenos - Redes Sociales</div>
	<ul>
		<li><a href="https://www.facebook.com/pages/RenderDrive/741013012598334?ref=hl"><div class="imgpie"><img src="themes/img/logos/facebook.png" width="20px;" alt="Render Drive - Facebook" title="Render Drive - Facebook" /></div> Facebook</a><div style="clear:both"></div></li>
		<li><a href="http://www.linkedin.com/company/render-drive"><div class="imgpie"><img src="themes/img/logos/linkedin.png" width="20px;" alt="Render Drive - Linkedin" title="Render Drive - Linkedin" /></div> Linkedin</a><div style="clear:both"></div></li>
		<li><a href="http://twitter.com/RenderDrive"><div class="imgpie"><img src="themes/img/logos/twitter.png" width="20px;" alt="Render Drive - Twitter" title="Render Drive - Twitter" /></div> Twitter</a><div style="clear:both"></div></li>
		<li><a href="https://plus.google.com/+RenderdriveServices/"><div class="imgpie"><img src="themes/img/logos/google.png" width="20px;" alt="Render Drive - Google +" title="Render Drive - Google +" /></div> Google+</a><div style="clear:both"></div></li>
	</ul>
	<ul><li><div class="fb-like" data-href="http://www.renderdrive.com" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div></li></ul>
	
<!-- Place this tag where you want the +1 button to render. -->
<div class="g-plusone" data-annotation="inline" data-width="300"></div>




</div>
	
	
<div style="clear:both"></div>
</div>
</div>


