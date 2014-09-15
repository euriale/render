<?php	
session_start();  
require_once('../../../../models/bd.class.php');
require_once('../../../../models/query.class.php');

if ($_SERVER['HTTP_HOST']=="www.renderdrive.com") $raiz='http://www.renderdrive.com/';
else $GLOBALS['raiz']='/render/';


	$nombre='';
	if(isset($_GET['nombre'])) $nombre=$_GET['nombre'];
	$apellidos='';
	if(isset($_GET['apellidos'])) $apellidos=$_GET['apellidos'];
	$empresa='';
	if(isset($_GET['empresa'])) $empresa=$_GET['empresa'];
	$motivo='';
	if(isset($_GET['motivo'])) $motivo=$_GET['motivo'];
	$consulta='';
	if(isset($_GET['consulta'])) $consulta=$_GET['consulta'];
	$email='';
	if(isset($_GET['email'])) $email=$_GET['email'];
	$pais='';
	if(isset($_GET['pais'])) $pais=$_GET['pais'];
	$telefono='';
	if(isset($_GET['telefono'])) $telefono=$_GET['telefono'];
	$idaplicacion='';
	if(isset($_GET['idaplicacion'])) $idaplicacion=$_GET['idaplicacion'];	
		$otraaplicacion='';
	if(isset($_GET['otraaplicacion'])) $otraaplicacion=$_GET['otraaplicacion'];	
	$versiones='';
	if(isset($_GET['versiones'])) $versiones=$_GET['versiones'];
	$motor='';
	if(isset($_GET['motor'])) $motor=$_GET['motor'];
	$plugin='';
	if(isset($_GET['plugin'])) $plugin=$_GET['plugin'];	
	$equipo='';
	if(isset($_GET['equipo'])) $equipo=$_GET['equipo'];	
	$procesador='';
	if(isset($_GET['procesador'])) $procesador=$_GET['procesador'];	
	$numframes='';
	if(isset($_GET['numframes'])) $numframes=$_GET['numframes'];	
	$tframes='';
	if(isset($_GET['tframes'])) $tframes=$_GET['tframes'];		
		
	

	$bd = new bd();
	$query1 = new query('insert into clientes (nombre, apellidos,telefono,empresa,consulta,email,motivo,pais, idaplicacion,otraaplicacion,idversion,motor,plugin,equipo,procesador,numframes,tframes) values ("'.$nombre.'", "'.$apellidos.'","'.$telefono.'","'.$empresa.'","'.$consulta.'","'.$email.'","'.$motivo.'","'.$pais.'","'.$idaplicacion.'","'.$otraaplicacion.'","'.$versiones.'","'.$motor.'","'.$plugin.'","'.$equipo.'","'.$procesador.'","'.$numframes.'","'.$tframes.'")',$bd);
	
	echo 'La consulta se ha enviado correctamente. ';
	$bd = new bd();
	
	$aplicacion='';
	if ($idaplicacion!=''){
		$query5 = new query('SELECT aplicaciones from aplicaciones where idaplicaciones="'.$idaplicacion.'"',$bd);
		if($query5->n){
			foreach ($query5->v as $fila5){
				$aplicacion=$fila5->aplicaciones;
			}
		}
	}
	$version='';
	if ($versiones!=''){
		$query6 = new query('SELECT version from version_aplicaciones where idversion_aplicacion="'.$versiones.'"',$bd);
		if($query6->n){
			foreach ($query6->v as $fila6){
				$version=$fila6->version;
			}
		}
	}
/*---------------------Correo a info@renderdrive.com-----------------------*/
$destinatario = 'info@renderdrive.com';
$asunto = "Consulta realizada en RenderDrive";
$cuerpo = '
	<html>
	<head>
	   <title>Consulta realizada en RenderDrive </title>
	</head>
	<body>
	<p>
	Nombre: '.$nombre.'<br>
	Apellidos: '.$apellidos.'<br>
	Email: '.$email.'<br>
	Telefono: '.$telefono.'<br>
	Empresa: '.$empresa.'<br>
	Motivo: '.$motivo.'<br>	
	Pa�s: '.$pais.'<br>
	Consulta: '.$consulta.'<br>
	--------- <br>
	Aplicaci�n: '.$idaplicacion.' '.$aplicacion.' '.$otraaplicacion.' <br>
	Versi�n: '.$version.'<br>
	Motor: '.$motor.'<br>
	Plugin: '.$plugin.'<br>
	Equipo: '.$equipo.'<br>
	Procesador:'.$procesador.'<br>
	N�mero de Frames:'.$numframes.'<br>
	Tiempo por Frame: '.$tframes.'<br>
	</p>
	</body>
	</html>
	';

//para el env�o en formato HTML
	$headers = "MIME-Version: 1.0\r\n";
	$headers .= "Content-type: text/html; charset=iso-8859-1\r\n";

//direcci�n del remitente
	$headers .= "From: Render Drive <info@renderdrive.com>\r\n";

//direcci�n de respuesta, si queremos que sea distinta que la del remitente
	$headers .= "Reply-To: info@renderdrive.com\r\n";


mail($destinatario,$asunto,$cuerpo,$headers);


?> 








