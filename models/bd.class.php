<?php
class bd{


  var $usuari='elios'; //nombre de usuario de la base de datos  //qhz480
  var $clau='alyusanna'; //contrase�a del usuario Guiapass01

  var $servidor='localhost'; 
  var $nomBD='yusanna'; //nombre de la base de datos //qhz480
  var $conn; //necesario para la conexion y desconexion de la base de datos
  var $debug; //modo depuracion, mostrara los errores y los querys

  function bd($debug=0){
    //para que en php 4 haya un destructor como en php 4
    register_shutdown_function(array(&$this, '__destruct'));

    //constructor
    $argcv = func_get_args();
    call_user_func_array(array(&$this, 'constructor_bd'), $argcv);
  }

  function x(){
  //para cerrar la conexion mysql
  //debes utlizarla SIEMPRE al final de tu documento
    if(isset($this->conn))@mysql_close($this->conn);
  }
  
  function error_mysql($msg,$query=''){
  //muestra el error
    if($this->debug==1 && !empty($query)) $msg .= '<br><b />QUERY:</b><br />'.$query;
    $this->enmarcar($msg);
    $this->x();
    die();
  }

  function enmarcar($str){
  //para mostrar los errores dentro de un rectangulo
    echo '<span style="display:block;border:1px red solid;padding:5px;">',$str,'</span>';
  }

  function f( $valor ){
  /*
  funcion para evitar ataques sql-injection, debes utilizarla cuando hagas querys
  Ejemplo:
  $query1 = new query("select * from usuarios where nombre='".$bd->f($_POST['nombre'])."' and password='".$bd->f($_POST['password'])."'",$bd);
  */
     if(get_magic_quotes_gpc())
            $valor = stripslashes($valor);
    if( function_exists('mysql_real_escape_string') )
      return mysql_real_escape_string( $valor );
    else //per PHP inferior a 4.3.0
      return addslashes( $valor );
  }

  function __destruct(){
    //el destructor se ejecuta antes de cerrar la ejecucion y con esto cerramos la conexion a la base de datos
    $this->x();
  }


  public function constructor_bd($debug=0)
  {
    //al llamarla conecta directametne a la base de datos
    $this->debug = $debug;
    $this->conn = @mysql_connect($this->servidor, $this->usuari, $this->clau) or $this->error_mysql(mysql_error());
    mysql_select_db($this->nomBD) or $this->error_mysql(mysql_error());

  }
}



?>