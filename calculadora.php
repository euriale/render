<?php
if(isset($_GET['r1']) && $_GET['r1']=='idioma') header ("Location: ../controllers/direct/idioma.php?r2=".$_GET['r2']);

session_start();  
if (!isset($_SESSION['idioma'])){
    $idioma =substr($_SERVER["HTTP_ACCEPT_LANGUAGE"],0,2); 
	$_SESSION['idioma']=$idioma;
} 
$idiomaaux=$_SESSION['idioma'];
$idiomaaux=strtoupper ($idiomaaux);
require_once("themes/langs/".$idiomaaux.".php");

error_reporting(E_ALL|E_STRICT);
$site_path = realpath(dirname(__FILE__));
define ('__SITE_PATH', $site_path);

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META charset="ISO 8859-1">
<title>Render Drive - Servicios de Render Online</title>
<script src="themes/js/jquery.js"></script>
<script language="javascript" src="themes/js/codigo.js" charset="ISO-8859-1"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300&amp;subset=latin-ext' rel='stylesheet'>


<link rel="STYLESHEET" type="text/css" href="themes/css/estilos.css" media="screen" />
<!--<link href="estilosmovil.css" rel="stylesheet" type="text/css" media="handheld" />-->
<!--calculadora-->
 <link rel="stylesheet" href="themes/css/jquery-ui.css">
<script src="themes/js/jquery-1.9.1.js"></script>
<script src="themes/js/jquery-ui.js"></script>


</head>

<body>
<div class="cajaminidoble">
<div class="tarifacal">
			Calcula tu presupuesto
		</div>
	<div class="calculadora">
		
		Cliente
	<p>
		<div class="txtcalcu">Cores:</div>
		<div id="elemcores" class="txtcalcunum">1</div>
		<div id="cores"></div>
		
		<div style="clear:both;"></div>
		
		<div class="txtcalcu">Frames:</div>
		<div id="elemframes" class="txtcalcunum">1</div>
		<div id="frames"></div>
		<div style="clear:both;"></div>
		
		
		<div class="txtcalcu">Tframe:</div>
		<div id="elemtemp" class="txtcalcunum">1</div>
		<div id="temp"></div>
		<div style="clear:both;"></div>
		
		Formulas Cliente:<br>
		<div style="display:inline-block">Potencia Cliente(Cores*3GHz)(Pc):</div><div id="pc" style="display:inline-block">3</div><br>
		<div style="display:inline-block">Trabajo Cliente(Pc*Frames*Tframe)(TC):</div><div id="tc" style="display:inline-block">0</div>
		<br><br>
		
		Formulas Summus:<br>
		<div style="display:inline-block">Num horas min.(TC/PotSummus max (200*20)):</div><div id="nhorasmin" style="display:inline-block">3</div><br>
		<div style="display:inline-block">Num horas max.(TC/PotSummus min (200*1)):</div><div id="nhorasmax" style="display:inline-block">3</div><br><br><br>
		Al mover los slots:<br>
		<div style="display:inline-block">Num de slots * 200:</div><div id="nnslots" style="display:inline-block">0</div><br>
	</p>
	<hr>
	
	Summus
	<p>
	    <div id="auxtmax">
		<div class="txtcalcu">T. Max:</div>
		<div id="elemtmax" class="txtcalcunum">200 </div><div style="clear:both;"></div>
		<div class="txtcalcunum">&nbsp;&nbsp;Min:</div><div id="elemtmaxmin" class="txtcalcunum">0</div>
		<div id="tmax"></div>
		<div class="txtcalcunum"> Max:</div><div id="elemtmaxmax" class="txtcalcunum">0</div>
		</div>
		<div style="clear:both;"></div>
		
		
		<div class="txtcalcu">Slots:</div>
		<div id="elemslots" class="txtcalcunum">20</div>
		<div id="slots"></div>
		<div style="clear:both;"></div>
		
		
		
	</p>	
	<div class="txtcalcu" id="caltotal">1</div></div>
	<div style="clear:both;"></div>
	</div>
</div>	

 
</body>
</html>