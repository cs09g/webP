<?php 
header('content-type: png'); // usually 'header' needs to to be before print out.
$string = $_GET['text'];
$im = imagecreatefrompng('image.png'); // create canvas (png name)
$co = imagecolorallocate($im, 60, 87, 156); // RGB
$px = (imagesx($im) - 7.5 * strlen($string)) / 2; // imagesx($im) : length of canvas
// imagestring(canvas, font, start point of horizen, start point of vertical, contents, color)
imagestring($im, 4, $px, 9, $string, $co); 
imagepng($im); // 
imagedestroy($im);
?>