<?php
class query{
  var $bd;//conexion mysql, requerido para llamar funciones de la classe bd
  var $q; //query introducida
  var $n;//numero de resultados
  var $v;//los resultados en una tabla de objetos
  var $a;//numero de filas afectadas por la query

  function query($query,$bd){
    //constructor
    $argcv = func_get_args();
    call_user_func_array(array(&$this, 'constructor'), $argcv);
  }

  public function constructor($query,$bd)
  {
    
  //ejecuta la query y rellena las propiedades del objeto
    $this->q = $query;
    $this->bd = $bd;
    $mysql_result = @mysql_query($query) or $this->bd->error_mysql(mysql_error(),$query);
    $this->n = @mysql_num_rows($mysql_result);
    $this->a = @mysql_affected_rows();
    if($this->n)
      for($i=0;$i<$this->n;$i++) $taula[$i] = @mysql_fetch_object($mysql_result);
    else $taula = null;
    $this->v = $taula;
    if(  $this->n > 0  ) mysql_free_result($mysql_result);
  }
  
}?>