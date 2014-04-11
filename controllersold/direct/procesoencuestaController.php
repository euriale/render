<?php	
session_start();  
require_once('../../models/bd/tablaencuesta.class.php');
require_once('../../models/bd/tablapregunta.class.php');
require_once('../../models/bd/tablarespuesta.class.php');
require_once('../../models/bd/tablapagina.class.php');
require_once('../../models/query.class.php');	
require_once('../../models/bd.class.php');	

$GLOBALS['raiz']='/yusanna/';
if (isset($_POST['titulo'])){
	$imagen='';
	if (isset($_FILES['imagen']['name'])) $imagen=$_FILES['imagen']['name'];
		
	$nuevaencuesta = new tablaencuesta('',$_POST['titulo'],$_POST['descripcion'],$imagen);
	$nuevaencuesta->crear_url_amigable();
	$idencuesta=$nuevaencuesta->crear_encuesta();
	
	
	$nuevapagina=new tablapagina('','primera',1,$idencuesta);
	$nuevapagina->crear_pagina();
	
	
	header("Location:".$GLOBALS['raiz']."crear-encuesta/".$idencuesta);
	
}else{
	$idencuesta='';
	if(isset($_POST['idencuesta'])) $idencuesta=$_POST['idencuesta'];
	$idtipoelemento='';
	if(isset($_POST['idtipoelemento'])) $idtipoelemento=$_POST['idtipoelemento'];
	$posicion='';
	if(isset($_POST['posicion'])) $posicion=$_POST['posicion'];
	$obligatorio='';
	if(isset($_POST['obligatorio'])) $obligatorio=$_POST['obligatorio'];
	$pregunta='';
	if(isset($_POST['pregunta'])) $pregunta=$_POST['pregunta'];
	
	$paginaencuesta=new tablapagina('','','',$idencuesta);
	$paginaencuesta->devolver_paginaporencuesta();
	$idpagina=$paginaencuesta->getIdPagina();
	
	
	$anteriorpregunta = new tablapregunta('','',$idencuesta);
	$orden=$anteriorpregunta->ultima_pregunta();
	$nuevapregunta = new tablapregunta('',$pregunta,$idencuesta,$idtipoelemento,$obligatorio,$posicion,'',$orden,$idpagina);
	$idpregunta=$nuevapregunta->crear_pregunta();

	$cantidadrespuesta='';
	if(isset($_POST['cantidadrespuesta'])) $cantidadrespuesta=$_POST['cantidadrespuesta'];
	//comprueba si es una respuesta tipo texto o imagen
	if (isset($_FILES['imagen2'])){	
	echo 'Gauda imagen';
		for ($i=2;$i<=$cantidadrespuesta;$i++){
			$textoauxaux='imagen'.$i;
			$textoaux='enunciado'.$i;
			$respuesta=$_POST['enunciado'.$i];
			if ($_FILES[$textoauxaux]['name']!=''){
				$nuevarespuesta = new tablarespuesta($respuesta,$idpregunta);
				$nuevarespuesta->crear_respuesta_pregunta($textoauxaux);
			}
		}	
	}
	else if (isset($_POST['enunciado2'])){
		echo 'Gauda texto';
		for ($i=2;$i<=$cantidadrespuesta;$i++){
			$textoaux='enunciado'.$i;
			$respuesta=$_POST['enunciado'.$i];
			if ($respuesta!=''){
				$nuevarespuesta = new tablarespuesta($respuesta,$idpregunta);
				$nuevarespuesta->crear_respuesta();
			}	
		}
	}
	
	
	if (isset($_GET['vista']) and $_GET['vista']==1) header("Location:".$GLOBALS['raiz']."vista-previa-encuesta/".$idencuesta);
	else header("Location:".$GLOBALS['raiz']."crear-encuesta/".$idencuesta);
	
	}	

?>






