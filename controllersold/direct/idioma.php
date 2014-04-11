<?php	
	session_start();  
	if (isset($_GET['r2'])) $_SESSION['idioma']=$_GET['r2'];
	header ("Location: ../..");
?>






