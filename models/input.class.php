<?php
class input{
  private $type;
  private $atributos;
  private $value;
  private $oblig;
  private $evento;
  
  function input($tipo='text',$atributos=null,$valor=null,$oblig=null,$evento=null){

    if ($tipo){$this->type = $tipo;}
    if ($atributos){$this->atributos = $atributos;}
    if ($valor){$this->value = $valor;}
    if ($oblig){$this->oblig = $oblig;}
    if ($evento){$this->evento = $evento;}
  }
 
  function crearInput(){
    
    $valor='value="'.$this->value.'"';
    $evento=$this->evento;
    if ($this->type=='checkbox'){
        if($this->value==1) $valor='checked';
        else $valor='';  
    }
    $ob='';
	$class_aux='elemento';
	$fil='';
	
	if ($this->type=='submit' || $this->type=='button' ) $class_aux='elementoboton';
	if ($this->type=='hidden') $class_aux='';
    if ($this->oblig) $ob='_oblig';
	if ($this->type=='file' && $this->value!=''){
		$file_aux=explode("/", $this->value);
		$fil='<input type="hidden" name="file_delete" id="file_delete" value="0"><div class="linkfile"><div id="linkfil"><a  href="'.$this->value.'" target=_blank>'.$file_aux[3].'</a></div>  <div id="delete">Eliminar</div></div>';
	}	
    echo '<div class="'.$class_aux.$this->type.$ob.'"><input type="'.$this->type.'" '.$this->atributos.' '.$valor.'  '.$evento.' />'.$fil.'</div>';
	//if ($class_aux!='elementoboton') echo '<div style="clear:both;"></div>';
  }

}?>