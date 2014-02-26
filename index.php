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

<?php 
if ($_SERVER['HTTP_HOST']=="www.renderdrive.com") $raiz='http://www.renderdrive.com/';
elseif ($_SERVER['HTTP_HOST']=="renderdrive.com") $raiz='http://renderdrive.com/';
else $GLOBALS['raiz']='/render/';
?>
<link rel="STYLESHEET" type="text/css" href="themes/css/estilos.css" media="screen" />
<!--<link href="estilosmovil.css" rel="stylesheet" type="text/css" media="handheld" />-->


</head>

<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/es_ES/all.js#xfbml=1";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<?php
	require_once(__SITE_PATH.'/controllers/Content.php');
?>
 
</body>
</html>