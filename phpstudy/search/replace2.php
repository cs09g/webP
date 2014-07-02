<?php 
$string = 'The quick b
rown fox jumped over the lazy dog';
$patterns = array('~quick~', '~brown~', '~fox~');
$replacements = array('slow', 'black', 'bear');
echo $string.'<br />';
echo preg_replace($patterns, $replacements, $string);
?>