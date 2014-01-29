<?php
class select { 
  private $name;
  private $atributos;
  private $table;
  private $condition;
  private $valueOption;
  private $fieldOption;
  private $valorPorDefecto;
  private $oblig;
  
  
  function Select ($name=null,$atributos=null,$tabla=null,$campoOption=null,$valorOption=null,$valorPorDefecto=null,$condicion='1=1',$oblig=null){
    if ($name){$this->name=$name;}  
    if ($atributos){$this->atributos=$atributos;}
    if ($tabla){$this->table=$tabla;}
    if ($condicion){$this->condition=$condicion;}
    if ($valorOption){$this->valueOption=$valorOption;}
    if ($campoOption){$this->fieldOption=$campoOption;}
    if ($valorPorDefecto){$this->valorPorDefecto=$valorPorDefecto;}
    if ($oblig){$this->oblig = $oblig;}
   }
  
  function crearSelect(){
    $atributs=$this->atributos;
	$elwhere=$this->condition;
    $latabla=$this->table;
    $valorPorDefecto=$this->valorPorDefecto;
    $ob='';
    if ($this->oblig) $ob='_oblig';
	
    $camp1=$this->fieldOption;
    $auxcamp=explode(".",$this->fieldOption);
    if (isset($auxcamp[1])) $campo1=$auxcamp[1];
    else $campo1=$auxcamp[0];   
   
    $camp2=$this->valueOption;
    $auxcamp2=explode(".",$this->valueOption);
    if (isset($auxcamp2[1])) $campo2=$auxcamp2[1];
    else $campo2=$auxcamp2[0]; 
    //var_dump('select '.$camp1.' as '.$campo1.','.$camp2.' as '.$campo2.' from '.$latabla.' where '.$elwhere);
	echo '<div class="elementoselect'.$ob.'"><select name=\''.$this->name.'\' '.$this->atributos.'>';
    $bd = new bd();
    $sel='';
	echo '<option value=""> -- Seleccionar --</option>';
    $query1 = new query('select '.$camp1.' as '.$campo1.','.$camp2.' as '.$campo2.' from '.$latabla.' where '.$elwhere,$bd);
    if($query1->n){
      
      foreach ($query1->v as $fila) {
        
        if ($fila->$campo2==$this->valorPorDefecto) $sel='selected';
        echo '<option value="'.$fila->$campo2.'"  '.$sel.'>'.$fila->$campo1.'</option>';
        $sel='';
      }
    }       
    echo '</select></div><div style="clear:both"></div>';
  }   
}?>
