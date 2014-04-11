<?php
//autoload
require_once('models/autoload.php'); 

function controller_exist($rcontroller){
  if (file_exists(__SITE_PATH.'/'.$rcontroller)) return true;
}

function f_controller ($rcontroller)
{ 
	$ccontroller='controllers/'.$rcontroller.'Controller.php';
	if 	(controller_exist($ccontroller)) 
	{	
		if ($rcontroller=="aplicacion-app") require_once('application/zone/app.php');
		else require_once('application/zone/site.php'); 
		//require_once(__SITE_PATH.'/'.$ccontroller);
		
	}else{
   		//revisar si existe cliente
        $ccontroller='controllers/siteController.php';
    }
}

function render($rviews, $resultado=null, $resultado2=null,$resultado3=null, $resultado4=null,$resultado5=null,$resultado6=null,$resultado7=null,$resultado8=null){
	 require('themes/views/'.$rviews.'.php');
}




//recoge el contralador ($r1), sino existe el controlador es home.
if (isset($_GET['r1'])) $contr=$_GET['r1'];
else $contr='home';


f_controller($contr);

?>