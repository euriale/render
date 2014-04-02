<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" 
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<title>Render Drive  Servicios de Render Online</title>
<meta http-equiv="Content-Type" content="text/html;charset=iso-8859-1" />



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


<script src="themes/js/jquery.js" type="text/javascript" ></script>
<script type="text/javascript" src="themes/js/codigo.js" charset="ISO-8859-1"></script>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,700|Roboto:300&amp;subset=latin-ext' rel='stylesheet' />

<?php 

if ($_SERVER['HTTP_HOST']=="www.renderdrive.com") $raiz='http://www.renderdrive.com/';
elseif ($_SERVER['HTTP_HOST']=="renderdrive.com") $raiz='http://renderdrive.com/';
else $GLOBALS['raiz']='/render/';
?>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

<link rel="STYLESHEET" type="text/css" href="themes/css/estilos.css" media="screen and (min-width: 481px)" />
<link href="themes/css/estilosmovil.css" rel="stylesheet" type="text/css" media="handheld, only screen and (max-width: 480px)" />




<!--calculadora-->
 <link rel="stylesheet" href="themes/css/jquery-ui.css" />
<script src="themes/js/jquery-1.9.1.js" type="text/javascript"></script>
<script src="themes/js/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript">
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49480574-1', 'renderdrive.com');
  ga('send', 'pageview');

</script>
<!-- Place this tag in your head or just before your close body tag. -->
<script type="text/javascript" src="https://apis.google.com/js/platform.js">
  {lang: 'es'}
</script>
</head>

<body>
<div id="fb-root"></div>
<script type="text/javascript">(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="respuesta">
	<div class="iconclose" style="float:right;"></div>
	<div style="clear:both;"></div>
	<div id="respuestaaux"></div>
</div>
<div style="clear:both;"></div>
<?php
	require_once(__SITE_PATH.'/controllers/Content.php');
?>
 
</body>
</html>