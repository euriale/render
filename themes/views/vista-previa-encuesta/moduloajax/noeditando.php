<?php
session_start();  
$salto=0;
if (isset($_GET['accion']) && $_GET['accion']=='saltos') $salto=1;

if ($salto==0) $_SESSION['estado'] = 'noeditando';
if ($salto==1) $_SESSION['estado'] = 'noeditandosaltos';
?>