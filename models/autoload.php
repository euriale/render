<?php
  function __autoload($class_name) {
    $filename = strtolower($class_name) . '.class.php';
    $file = __SITE_PATH . '/models/' . $filename;

    if (file_exists($file) == false)
    {
        $filename = strtolower($class_name) . '.class.php';
		$filebd = __SITE_PATH . '/models/bd/' . $filename;

		if (file_exists($filebd) == false)
		{
			return false;
		} else {
			include ($filebd);
		}	
    } else {
		include ($file);
	}		
}


?>