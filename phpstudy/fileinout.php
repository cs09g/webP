<?php 
$file = 'readme.txt';
$newfile = 'read.txt.bak';

if(!copy($file, $newfile)){
	echo "failed to copy $file ...\n"; // if it's failed
}
?>