<?php

$pagina=$resultado->pagina;
$idpagina=$resultado->idpagina;

$idpregunta='';

echo '<div class="saltopag" id="pag'.$idpagina.'" style="float:left;">'.$pagina.'</div>';

echo '<div class="saltoeditar" id="pgi'.$idpagina.'" style="margin-top:2px;">[Editar Página]</div>';
echo '<div class="saltoguardar" id="pin'.$idpagina.'" style="margin-top:2px;">[ok]</div>';
echo '<div class="saltoeliminar" id="elp'.$idpagina.'" style="margin-top:2px;color:red;">[Eliminar]</div>';



?>
