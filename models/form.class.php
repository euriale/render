<?php

class form
{
  private $method;
  private $action;   
  private $clase;   
  private $name;
  private $atributs;
 
  function form($metodo=null,$accion=null,$clase=null, $atributos=null,$nombre='formulario'){
    if ($metodo){$this->method = $metodo;}
    if ($accion){$this->action = $accion;}
    if ($clase){$this->clase = $clase;}
    if ($nombre){$this->name = $nombre;}
    if ($atributos){$this->atributs = $atributos;}
  
  }
  function crearFormulario(){
    echo '<form name="'.$this->name.'" id="'.$this->name.'" method="'.$this->method.'" class="'.$this->clase.'" action="'.$this->action.'" '.$this->atributs.'>';
  }
  function cerrarFormulario(){
    echo '</form>';
  }
}




