<?php
class area {
  private $atributos;
  private $value;
  private $oblig;
  private $name;

  
  function area($name=null,$atributos=null, $valor=null,$oblig=null){
    if ($atributos) $this->atributos = $atributos;
    if ($valor) $this->value = $valor;
    if ($oblig) $this->oblig = $oblig;
	if ($name) $this->name = $name;
  }
  
  function crearArea(){
	   $ob='';
       if ($this->oblig) $ob='_oblig';
       echo '<div class="elementoarea'.$ob.'"><textarea name="'.$this->name.'" id="'.$this->name.'"' .$this->atributos.'>'.htmlentities($this->value).'</textarea></div><div style="clear:both"></div>';
  }
  
  function editorHtml(){
	echo '<script type="text/javascript" src="http://localhost/metodoonline/themes/js/ckeditor/config_guias.js"></script>';
	echo '<script type="text/javascript">
	window.onload = function()
	{
		CKEDITOR.replace( "'.$this->name.'" ,
			{
			customConfig : \'http://localhost/metodoonline/themes/js/ckeditor/config_guias.js\'
		}
		);
		

	};
	</script>';
	
  
  }
}


?>

