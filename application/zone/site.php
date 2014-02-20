<?php 
if (!isset($_GET['r1'])){
	$enlaceinicio='#';
	$classinicio='ancla';
	$enlaceaplicacion='';
	$classaplicacion='';
	$enlaceservicios='';
	$classservicios='';
} else if (isset($_GET['r1']) && $_GET['r1']=='aplicacion') {
	$enlaceinicio=$GLOBALS['raiz'];
	$classinicio='';
	$enlaceaplicacion='';
	$classaplicacion='ancla';
	$enlaceservicios='';
	$classservicios='';
} else if (isset($_GET['r1']) && $_GET['r1']=='servicios') {
	$enlaceinicio=$GLOBALS['raiz'];
	$classinicio='ancla';
	$enlaceaplicacion='';
	$classaplicacion='';
	$enlaceservicios='';
	$classservicios='ancla';
}
?>

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
		<li><a href="aplicacion">Aplicaci�n</a></li>
		<li><a href="servicios">Servicios</a></li>
		
		
   </ul>		
   </div>

</div>	

<?php 
require_once(__SITE_PATH.'/'.$ccontroller);
?>

	

<div id="pie">
<div class="auxcajapie">



<div class="cajapie">
	<div class="txtnaranja16"><a href="#inicio" title="Render Drive" Alt="Uso Maya">Render Drive</a></div>
	<ul>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>" title="Por qu� trabajar con Render Drive" Alt="Por qu� trabajar con Render Drive">Por qu� trabajar con Render Drive</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>" title="Render Drive - Reducci�n de tiempos" Alt="Render Drive - Reducci�n de tiempos">Reducci�n de tiempos</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>" title="Render Drive - Reducci�n de costes" Alt="Render Drive - Reducci�n de costes">Reducci�n de costes</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>" title="Render Drive - Confianza y disponibilidada" Alt="Render Drive - Confianza y disponibilidada">Confianza y disponibilidad</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>" title="Render Drive - Contacto" Alt="Render Drive - Contacto">Contacto</a></li>
	</ul>

</div>
<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $GLOBALS['raiz']; ?>aplicacion" title="Aplicaci�n - Uso Maya" Alt="Aplicaci�n - Uso Maya">Uso Maya</a></div>
	<ul>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>aplicacion" title="Aplicaci�n - Uso Maya" Alt="Aplicaci�n - Uso Maya">Uso Maya</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>aplicacion" title="Aplicaci�n - Tarifas" Alt="Aplicaci�n - Tarifas">Tarifas</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>aplicacion" title="Aplicaci�n - Faqs" Alt="Aplicaci�n - Faqs">FAQS</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>aplicacion" title="Aplicaci�n - Contacta" Alt="Aplicaci�n - Contacto">Contacto</a></li>
	</ul>

</div>

<div class="cajapie">
	<div class="txtnaranja16"><a href="<?php echo $GLOBALS['raiz']; ?>no-maya" title="Uso Maya" Alt="Uso Maya">Uso otras aplicaciones</a></div>
	<ul>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>servicios" title="Uso Maya" Alt="Uso Maya">Uso otras aplicaciones</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>servicios" title="Uso otro Software - Tarifas" Alt="Uso Maya - Tarifas">Tarifas</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>servicios" title="Uso Maya - Faqs" Alt="Uso Maya - Faqs">FAQS</a></li>
		<li><a href="<?php echo $GLOBALS['raiz']; ?>servicios" title="Uso Maya - Contacta" Alt="Uso Maya - Contacta">Contacto</a></li>
	</ul>

</div>

<div class="cajapie">
	<div class="txtnaranja16">S�guenos</div>
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


