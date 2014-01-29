<?php
class label{
  private $for;
  private $value;
  private $oblig;
  private $atributos;
  
  function label($for=null,$value=null,$oblig=null, $atributos=null){
    if ($for){$this->for=$for;}  
    if ($value){$this->value=$value;}
    if ($oblig){$this->oblig=$oblig;}
	if ($atributos){$this->atributos=$atributos;}
  }
  
  function crearLabel(){
    $ob='';
	
    if((isset($this->oblig)) || $this->oblig==1) $ob='<span class="oblig">* </span>';
    echo '<span '.$this->atributos.'>'.$ob.'<label for="'.$this->for.'">'.$this->value.'</label></span>';
  }
}
?>