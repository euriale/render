<?php
class login{
  private $usuario;
  private $clave;
  private $idusuario;
  
  function login($user=null,$password=null){
    if ($user){$this->usuario = $user;}
    if ($password){$this->clave = md5($password);}
  }

  function validar_usuario(){
	if ($this->usuario!=''){
		$bd = new bd();
		$query1 = new query('SELECT idusuario from usuario where username="'.$this->usuario. '" and activo=1',$bd);
		if($query1->n){
			foreach ($query1->v as $filax){
				$this->idusuario=$filax->idusuario;
			}
			return true;
		} else return false;
    } else return false;
  }
  function validar_clave(){
	if ($this->clave!=''){
		$bd = new bd();
		$query1 = new query('SELECT password from usuario where idusuario="'.$this->idusuario.'"',$bd);
		if($query1->n){
			foreach ($query1->v as $filax){
				$password=$filax->password;
			}
			if ($this->clave==$password) return true;
			else return false;
				
		} else return false;
	}else return false;
    }	
 
 function variablesdesesion(){
	$bd = new bd();
	$query1 = new query('SELECT * FROM usuario WHERE idusuario="'.$this->idusuario.'"',$bd);
	if($query1->n){
		$edm = $query1->v[0];
		foreach ($edm as $nombrevariablesesion => $valor){
			$_SESSION[$nombrevariablesesion] = $valor;
		}
	}	
  }
  
 
} 
?>