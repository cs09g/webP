<?php 
$stamp = imagecreatefrompng('text.png');
$im = imagecreatefrompng('background.png');

$marge_right = 10;
$marge_bottom = 10;
$sx = imagesx($stamp);
$sy = imagesx($stamp);

// imagecopy(to, from, x position of text, y position of text, start x point of image, start y point of image, width, height)
imagecopy($im, $stamp, imagesx($im) - $sx - $marge_right, imagesx($im) - $sy - $marge_bottom, 0, 0, imagesx($stamp), imagesy($stamp));

header('Content-type: image/png');
imagepng($im);
imagedestroy($im);
?>