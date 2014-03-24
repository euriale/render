<?php
class tarifa{
  private $slots;
  private $valor;
  
  
  function tarifa($slots=null,$valor=null){
    $this->slots=$slots;
	$this->valor=$valor;
 }

  function devuelve_tarifa(){
  		$bd = new bd();
		$query1 = new query('SELECT * from tarifas where slots="'.$this->slots.'"',$bd);
		if($query1->n){
			foreach ($query1->v as $filax){
				$this->valor=$filax->valor;
			}
		}  
	} 
	
	function getValor(){
		return $this->valor;
	}
}
?>