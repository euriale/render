<?php
session_start();  
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
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8/jquery.min.js"></script>
<script language="javascript" src="themes/js/codigo.js" charset="ISO-8859-1"></script>

<?php 
$GLOBALS['raiz']='/render/';
?>
<link rel="STYLESHEET" type="text/css" href="themes/css/estilos.css"></link>


</head>

<body>
<?php
	require_once(__SITE_PATH.'/controllers/Content.php');
?>
 
</body>
</html>