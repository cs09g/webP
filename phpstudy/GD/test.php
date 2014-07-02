<?php 
$im = imagecreatefrompng('text.png');

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>