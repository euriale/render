<?php	
if (!isset($_SESSION['idusuario'])){ 
	header("Location:".$raiz."registro");
}
else 
{
	if (!isset($_GET['r2'])){
		render('crear-encuesta/pag1');
	}else{
	echo '<div class="central">
			<div class="txt20gristitulo">Crear Encuesta</div>
			
<div class="txt13naranja" style="margin:15px;"><img src="../themes/img/nota.png" style="margin-right:7px;">'.latin1('Podrás aplicar el diseño a la encuesta y crear páginas en un paso siguiente').'</div>
			<div class="postcentral">
			<div class="cabecerapostcentral"><div style="padding:8px">Paso 2: A&ntilde;adir las preguntas de la encuesta</div></div>';
		//render('crear-encuesta/vistaprevia');
		$nuevaencuesta=new encuesta($_GET['r2']);
		$nuevaencuesta->encuesta_por_id();
		$resultado=$nuevaencuesta->getTodo();
		render('crear-encuesta/pag2');
		render('crear-encuesta/encuesta',$resultado);
		
		
		
		
	
		//render('encuesta/edicion');
	
		
		$laspreguntas=new tablapregunta('','',$_GET['r2']);
		$listadopreguntas=$laspreguntas->lista_preguntas();
		if ($listadopreguntas>0){	
		echo '<ul>';
		foreach ($listadopreguntas as $fila){ 
			$pregunta=$fila->pregunta;
			$idpregunta=$fila->idpregunta;
			$orden=$fila->orden;
			render('crear-encuesta/pregunta',$pregunta,$idpregunta,$orden);
			
			if ($fila->idtipoelemento==3){ 
				// 6 --> input
				if ($fila->posicion==6) render('crear-encuesta/inputrespuesta',$fila->posicion,$fila->obligatorio,$fila->idpregunta);
				// 7 --> textarea
				if ($fila->posicion==7) render('crear-encuesta/arearespuesta',$fila->posicion,$fila->obligatorio,$fila->idpregunta);
			}	
			else {
				$losenunciados=new tablarespuesta('',$idpregunta);
				$listadorespuestas=$losenunciados->lista_respuestas();
			
				if ($listadorespuestas>0){
					$cuantasrespuestas=count($listadorespuestas);
					echo '<div class="respre'.$idpregunta.'">';
					foreach ($listadorespuestas as $filax){ 
						$enunciado=$filax->respuesta;
						// 1 --> radio
						if ($fila->idtipoelemento==1) render('crear-encuesta/radiorespuesta',$fila->posicion,$fila->obligatorio,$filax->respuesta,$filax->idrespuesta,$filax->imagen,$cuantasrespuestas,$filax->idpregunta);
						// 2 --> checkbox
						else if ($fila->idtipoelemento==2) render('crear-encuesta/checkrespuesta',$fila->posicion,$fila->obligatorio,$filax->respuesta,$filax->idrespuesta,$filax->imagen,$cuantasrespuestas);
						
					
					}echo '</div>';	
				}else echo 'Sin Enunciados';
			} 
			
			 echo '<div style="clear:both;"></div>';
		}	
		echo '</ul>';
	}	
echo '</div>';
	}	
}	
echo '</div>';
?>






