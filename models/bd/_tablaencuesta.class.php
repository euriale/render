<?php
class tablaencuesta{
  private $idencuesta;
  private $encuesta;
  private $idempresa;
  private $imagen;
  private $descripcion;
  private $activo;
  private $escabecera;
  private $urlredireccion;
  private $fechacierre;
  private $barraprogreso;
  private $logo;
  private $idcss;
  private $aviso;
  private $url;
  
  function tablaencuesta($idencuesta=null,$encuesta=null,$descripcion=null,$imagen=null){
    $this->idencuesta=$idencuesta;
	$this->encuesta=$encuesta;
	$this->descripcion=$descripcion;
	$this->imagen=$imagen;
	$this->idempresa='';
	$this->activo='';
	$this->escabecera='';
	$this->urlredireccion='';
	$this->fechacierre='';
	$this->barraprogreso='';
	$this->idcss='';
	$this->logo='';
	$this->aviso='';
	$this->url='';
  }

  function crear_encuesta(){
		$bd = new bd();
		$nombre_file='';
		if ($this->imagen!=''){
			$nombremin=strtolower($_FILES['imagen']['name']);
			$nombreimagen=time().$nombremin;
			$this->imagen=$nombreimagen;
			$img_type=$_FILES['imagen']['type'];
			if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
					move_uploaded_file($_FILES['imagen']['tmp_name'],'../../content/'.$nombreimagen);
			} else $this->imagen='';	
		}
		
		$query1 = new query('insert into encuesta (encuesta,idempresa,descripcion,imagen,activo,url) values ("'.$this->encuesta.'",'.$_SESSION['idempresa'].',"'.$this->descripcion.'","'.$this->imagen.'",0,"'.$this->url.'") ',$bd);
		$this->idencuesta=mysql_insert_id();
		return $this->idencuesta;
	}
function crear_url_amigable(){
	$url=$this->encuesta;
	$url = strtolower($url);
	$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
	$repl = array('a', 'e', 'i', 'o', 'u', 'n');
	$url = str_replace ($find, $repl, $url);
	$find = array(' ', '&', '\r\n', '\n', '+');
	$url = str_replace ($find, '-', $url);
	$find = array('/[^a-z0-9\-<>]/', '/[\-]+/', '/<[^>]*>/');
	$repl = array('', '-', '');
	$url = preg_replace ($find, $repl, $url);
	$this->url=$url;
}

  function devuelve_encuesta_por_id(){
  		$bd = new bd();
		$query1 = new query('SELECT * from encuesta where idencuesta="'.$this->idencuesta.'"',$bd);
		if($query1->n){
			foreach ($query1->v as $filax){
				$this->encuesta=$filax->encuesta;
				$this->idempresa=$filax->idempresa;
				$this->descripcion=$filax->descripcion;
				$this->imagen=$filax->imagen;
				$this->activo=$filax->activo;
				$this->escabecera=$filax->escabecera;
				$this->urlredireccion=$filax->urlredireccion;
				$this->fechacierre=$filax->fechacierre;
				$this->barraprogreso=$filax->barraprogreso;
				$this->idcss=$filax->idcss;
				$this->logo=$filax->logo;
			
			}
		}  
	} 
	
	function lista_encuestas_por_empresa(){
		$bd = new bd();
		$query1 = new query('SELECT * from encuesta where idempresa="'.$_SESSION['idempresa'].'" order by idencuesta',$bd);
		if($query1->n){
			$resultado=$query1->v;
			return $resultado;			
		}  
	
	
	}
	
	function comprabar_encuesta_usuario(){
		$bd = new bd();	
		$query1 = new query('SELECT * from encuesta where idempresa="'.$_SESSION['idempresa'].'" and idencuesta="'.$this->idencuesta.'" ',$bd);
		if($query1->n){
			return $query1->n;			
		}  
	}
	function modificar_titulo_encuesta(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET encuesta="'.$this->encuesta.'", url="'.$this->url.'" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
	}
	function modificar_imagen_encuesta(){
		$bd = new bd();
		$nombre_file='';
		if ($this->imagen!=''){
			$nombremin=strtolower($_FILES['imagen']['name']);
			$nombreimagen=time().$nombremin;
			$this->imagen=$nombreimagen;
			$img_type=$_FILES['imagen']['type'];
			if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
					move_uploaded_file($_FILES['imagen']['tmp_name'],'../../content/'.$nombreimagen);
			} else $this->imagen='';	
		}
		$query1 = new query('UPDATE encuesta SET imagen="'.$this->imagen.'" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);		
	}
	
	function modificar_descripcion_encuesta(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET descripcion="'.$this->descripcion.'" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
	}
	function eliminar_imagen_encuesta(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET imagen="" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
		
	}
	function eliminar_imagenfisica_encuesta(){
		if(file_exists($GLOBALS['raiz'].'/content/'.$this->imagen)) unlink($GLOBALS['raiz'].'/content/'.$this->imagen);
	}
	function activar_encuesta(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET activo="1" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
	}
	function desactivar_encuesta(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET activo="0" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
		//var_dump($query1);
	}
	function escabecera($escabecera){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET escabecera="'.$escabecera.'" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
	}
	function noescabecera(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET escabecera="0" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
		//var_dump($query1);
	}
	
	function configurar_encuesta(){
		$bd = new bd();
		$query1 = new query('UPDATE encuesta SET urlredireccion="'.$this->urlredireccion.'",fechacierre="'.$this->fechacierre.'",barraprogreso="'.$this->barraprogreso.'",escabecera="'.$this->escabecera.'",aviso="'.$this->aviso.'" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);
		
	}
	
	function disenyo_encuesta(){
	//var_dump($this);
		$bd = new bd();
		$nombre_file='';
		$idcss=$this->idcss;
		if ($this->logo!=''){
			$nombremin=strtolower($_FILES['logo']['name']);
			$nombreimagen=time().$nombremin;
			$this->logo=$nombreimagen;
			$img_type=$_FILES['logo']['type'];
			if (((strpos($img_type, "gif") || strpos($img_type, "jpeg") || strpos($img_type,"jpg")) || strpos($img_type,"png") )){
					move_uploaded_file($_FILES['logo']['tmp_name'],'../../content/logo/'.$nombreimagen);
			} else $this->logo='';	
		}
		$query1 = new query('UPDATE encuesta SET logo="'.$this->logo.'", idcss="'.$this->idcss.'" WHERE idencuesta="'.$this->idencuesta.'" ',$bd);		
	}
	
	function getEncuesta(){
		return $this->encuesta;
	}
	function getDescripcion(){
		return $this->descripcion;
	}
	function getImagen(){
		return $this->imagen;
	}
	function getEscabecera(){
		return $this->escabecera;
	}
	

	function setUrlredireccion($urlredireccion=null){
		$this->urlredireccion=$urlredireccion;
	}
	function setFechacierre($fechacierre=null){
		$this->fechacierre=$fechacierre;
	}
	function setBarraprogreso($barraprogreso=null){
		$this->barraprogreso=$barraprogreso;
	}
	function setEscabecera($escabecera=null){
		$this->escabecera=$escabecera;
	}
	function setLogo($logo=null){
		$this->logo=$logo;
	}
	function setIdcss($idcss=null){
		$this->idcss=$idcss;
	}
	function setAviso($aviso=null){
		$this->aviso=$aviso;
	}
	
 }
?>