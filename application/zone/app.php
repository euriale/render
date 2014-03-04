<!--
<div id="inicio"></div>
<div id="cabecera2">
	<div class="logo">
		<h1><a href="<?php echo $GLOBALS['raiz']; ?>">Render <span class="drive">Drive</span></a></h1>	
	</div>	
	<div class="dreta">	
	<div class="idiomas">
		<a href="<?php echo $GLOBALS['raiz'].'idioma/ES';?>"><img src="themes/img/sp.png" alt="" title="" border=0></a>
		<a href="<?php echo $GLOBALS['raiz'].'idioma/EN';?>"><img src="themes/img/uk.png" alt="" title="" border=0></a>
		<a href="<?php echo $GLOBALS['raiz'].'idioma/FR';?>"><img src="themes/img/fr.png" alt="" title="" border=0></a>
	</div>

	
	
	
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
-->
<?php 
require_once(__SITE_PATH.'/'.$ccontroller);
?>

	