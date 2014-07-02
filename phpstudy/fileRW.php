<?php 

$file = 'readme.txt';

if(file_exists($file)){
	if(is_readable($file)){
		echo file_get_contents($file);
	}
	if(is_writeable($file)){
		file_put_contents($file, "<br />i hate coding");
	}
	echo file_get_contents($file);
}

?>