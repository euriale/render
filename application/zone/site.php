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
		<li><a href="#inicio" class="ancla"><?php echo INICIO; ?></a></li>
		<li><a href="maya">MAYA</a></li>
		<li><a href="no-maya">NO MAYA</a></li>
		<li><a href="#ventajas" class="ancla" >VENTAJAS</a></li>
   </ul>		
   </div>

</div>	

<?php 
require_once(__SITE_PATH.'/'.$ccontroller);
?>

	
<!--
<div id="pie">
<div id="subpie"></div>

</div>-->
