

<div id="inicio"></div>
<div id="cabecera">
	<div class="logo">
		<h1><a href="<?php echo $GLOBALS['raiz']; ?>">Render <span class="drive">Drive</span></a></h1>	
	</div>	
	<div class="dreta">	
	<div class="idiomas">
		<a href="<?php echo $GLOBALS['raiz'].'idioma/ES';?>"><img src="themes/img/sp.png" alt="" title=""></a>
		<a href="<?php echo $GLOBALS['raiz'].'idioma/EN';?>"><img src="themes/img/uk.png" alt="" title=""></a>
		<a href="<?php echo $GLOBALS['raiz'].'idioma/FR';?>"><img src="themes/img/fr.png" alt="" title=""></a>
	</div>
	
   <ul class="navigation">
		<li><a href="<?php echo $GLOBALS['raiz']; ?>"><?php echo INICIO; ?></a></li>
		<li><a href="aplicacion">Aplicación</a></li>
		<li><a href="servicios">Servicios</a></li>
		
		
   </ul>		
   </div>

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
	$enlaceaplicacion=$GLOBALS['raiz'].'aplicacion';
	$classaplicacion='';
	$enlaceservicios=$GLOBALS['raiz'].'servicios';
	$classservicios='';
} else if (isset($_GET['r1']) && $_GET['r1']=='aplicacion') {
	$enlaceinicio=$GLOBALS['raiz'];
	$classinicio='';
	$enlaceaplicacion='';
	$classaplicacion='ancla';
	$enlaceservicios=$GLOBALS['raiz'].'servicios';
	$classservicios='';
	
} else if (isset($_GET['r1']) && $_GET['r1']=='servicios') {
	$enlaceinicio=$GLOBALS['raiz'];
	$classinicio='';
	$enlaceaplicacion=$GLOBALS['raiz'].'aplicacion';
	$classaplicacion='';
	$enlaceservicios='';
	$classservicios='ancla';
}
?>

<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $enlaceinicio; ?>#inicio" class="<?php echo $classinicio; ?>" title="Render Drive" Alt="Render Drive">Render Drive</a></div>
	<ul>
		<li><a href="<?php echo $enlaceinicio; ?>#inicio" class="<?php echo $classinicio; ?>" title="Por qué trabajar con Render Drive" Alt="Por qué trabajar con Render Drive">Por qué trabajar con Render Drive</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#tiempos" class="<?php echo $classinicio; ?>" title="Render Drive - Reducción de tiempos" Alt="Render Drive - Reducción de tiempos">Reducción de tiempos</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#costes" class="<?php echo $classinicio; ?>" title="Render Drive - Reducción de costes" Alt="Render Drive - Reducción de costes">Reducción de costes</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#confianza" class="<?php echo $classinicio; ?>" title="Render Drive - Confianza y disponibilidada" Alt="Render Drive - Confianza y disponibilidada">Confianza y disponibilidad</a></li>
		<li><a href="<?php echo $enlaceinicio; ?>#contacto" class="<?php echo $classinicio; ?>" title="Render Drive - Contacto" Alt="Render Drive - Contacto">Contacto</a></li>
	</ul>

</div>
<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $enlaceaplicacion; ?>#descripcion" class="<?php echo $classaplicacion; ?>" title="Aplicación - Uso Maya" Alt="Aplicación Render - Uso Maya">Aplicación Render</a></div>
	<ul>
		<li><a href="<?php echo $enlaceaplicacion; ?>#descripcion" class="<?php echo $classaplicacion; ?>" title="Aplicación Render - Uso Maya" Alt="Aplicación Render - Uso Maya">Descripción</a></li>
		<li><a href="<?php echo $enlaceaplicacion; ?>#tarifas" class="<?php echo $classaplicacion; ?>" title="Aplicación Render - Tarifas" Alt="Aplicación Render - Tarifas">Tarifas</a></li>
		<li><a href="<?php echo $enlaceaplicacion; ?>#faqs" class="<?php echo $classaplicacion; ?>" title="Aplicación Render - Faqs" Alt="Aplicación Render - Faqs">FAQS</a></li>
		<li><a href="<?php echo $enlaceaplicacion; ?>#contacto" class="<?php echo $classaplicacion; ?>" title="Aplicación Render - Contacto" Alt="Aplicación Render - Contacto">Contacto</a></li>
	</ul>

</div>

<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $enlaceservicios; ?>#inicio" class="<?php echo $classservicios; ?>" title="Servicios Render" Alt="Servicios Render">Servicios Render</a></div>
	<ul>
		<li><a href="<?php echo $enlaceservicios; ?>#descripcion" class="<?php echo $classservicios; ?>" title="Servicios Render" Alt="Uso Maya">Uso otras aplicaciones</a></li>
		<li><a href="<?php echo $enlaceservicios; ?>#tarifas" class="<?php echo $classservicios; ?>" title="Servicios Render - Tarifas" Alt="Servicios Render - Tarifas">Tarifas</a></li>
		<li><a href="<?php echo $enlaceservicios; ?>#faqs" class="<?php echo $classservicios; ?>" title="Servicios Render - Faqs" Alt="Servicios Render - Faqs">FAQS</a></li>
		<li><a href="<?php echo $enlaceservicios; ?>#contacto" class="<?php echo $classservicios; ?>" title="Servicios Render - Contacta" Alt="Servicios Render - Contacta">Contacto</a></li>
	</ul>

</div>

<div class="cajapie">
	<div class="txtnaranja16">Síguenos - Redes Sociales</div>
	<ul>
		<li><a href=""><div class="imgpie"><img src="themes/img/logos/facebook.png" width="20px;"></div> Facebook</a></li>
		<li><a href="http://www.linkedin.com/company/render-drive"><div class="imgpie"><img src="themes/img/logos/linkedin.png" width="20px;"></div> Linkedin</a></li>
		<li><a href="http://twitter.com/RenderDrive"><div class="imgpie"><img src="themes/img/logos/twitter.png" width="20px;"></div> Twitter</a></li>
		<li><a href="https://plus.google.com/111768518376940670621/posts"><div class="imgpie"><img src="themes/img/logos/google.png" width="20px;"></div> Google+</a></li>
	</ul>
	<ul><li><div class="fb-like" data-href="http://www.renderdrive.com" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div></li></ul>
</div>
	
	
<div style="clear:both"></div>
</div>
</div>


