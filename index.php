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

<link href="themes/css/estilosmovil.css" rel="stylesheet" type="text/css" media="handheld, only screen and (max-device-width: 480px)" />

<!--calculadora-->
 <link rel="stylesheet" href="themes/css/jquery-ui.css">
<script src="themes/js/jquery-1.9.1.js"></script>
<script src="themes/js/jquery-ui.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-49480574-1', 'renderdrive.com');
  ga('send', 'pageview');

</script>
<script type="text/javascript">
var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-xxxxx-y']);
_gaq.push(['_trackPageview']);
(function() {
var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true; 

ga.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'stats.g.doubleclick.net/dc.js';

var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
})();
</script>
 
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

<div id="respuesta"><div class="iconclose" style="float:right;"></div><div style="clear:both"></div><div id="respuestaaux"></div></div>
				<div style="clear:both"></div>
<?php
	require_once(__SITE_PATH.'/controllers/Content.php');
?>
 
</body>
</html>