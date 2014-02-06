
<div class="cajablancabase">
<div class="cajarobot"></div>
<div class="logo"><h1><a href="<?php echo $GLOBALS['raiz']; ?>">Render <span class="drive">Drive</span></a></h1></div>	
<div id="cabecera">

<div class="menu">
      <ul class="navigation">
        <li><a href="#inicio" class="ancla" ><?php echo INICIO; ?> </a></li>
        <li><a href="#servicios" class="ancla" > <?php echo SERVICIOS_RENDER; ?> </a></li>
		<li><a href="#tarifas" class="ancla" ><?php echo TARIFAS; ?> </a></li>
        <li><a href="#contacto" class="ancla" ><?php echo CONTACTO; ?> </a></li>
		<li><a href="#faq" class="ancla" ><?php echo FAQ; ?> </a></li>
        <li><a href="tutorial" target="_blank" ><?php echo TUTORIAL; ?></a></li>
      </ul>
</div>
<div class="idiomas">
	<a href="<?php echo $GLOBALS['raiz'].'idioma/ES';?>">ES</a>
	<a href="<?php echo $GLOBALS['raiz'].'idioma/EN';?>">EN</a>
	<a href="<?php echo $GLOBALS['raiz'].'idioma/FR';?>">FR</a>
</div> 
</div>
<div id="inicio"></div> 

<?php 
require_once(__SITE_PATH.'/'.$ccontroller);
?>

	
<!--
<div id="pie">
<div id="subpie"></div>

</div>-->
</div>