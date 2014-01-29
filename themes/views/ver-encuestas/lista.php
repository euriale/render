<?php
if ($resultado !=''){
	echo '<table border=1>';
	foreach ($resultado as $fila){ 
		echo '<tr>';
		echo '<td class="listaencuesta"><a href="'.$GLOBALS['raiz'].'vista-previa-encuesta/'.$fila->idencuesta.'">'.$fila->encuesta.'</a></td><td>'.$fila->activo.'</td>';
		echo '<td>';
		if ($fila->activo==1) echo '<a href="'.$GLOBALS['raiz'].'controllers/direct/desactivar-encuestaController.php?idencuesta='.$fila->idencuesta.'">Desactivar</a>';
		else echo '<a href="'.$GLOBALS['raiz'].'controllers/direct/activar-encuestaController.php?idencuesta='.$fila->idencuesta.'">Activar</a>';
		echo '</td>';
		echo '<td><a href="'.$GLOBALS['raiz'].'configurar-encuesta/'.$fila->idencuesta.'">Configurar</a></td>';
		echo '<td><a href="'.$GLOBALS['raiz'].'design-encuesta/'.$fila->idencuesta.'">Diseño</a></td>';
		echo '<td><a href="'.$GLOBALS['raiz'].'design-encuesta/'.$fila->idencuesta.'">Avisos</a></td>';
		echo '<td><a href="'.$GLOBALS['raiz'].'design-encuesta/'.$fila->idencuesta.'">Resultados</a></td>';
		
		echo '</tr>';
	}	
	echo '</table>';
}

?>
