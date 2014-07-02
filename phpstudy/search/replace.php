<?php 
$string = 'April 15, 2003';
$pattern = '~(\w+) (\d+), (\d+)~i';
preg_match($pattern, $string, $matches);
echo "$matches[1] $matches[2], $matches[3]";
$replacement = '\1 1, $3'; // $number, \number : same value with [number]. [1] 1, [3]
echo '<br />';
echo preg_replace($pattern, $replacement, $string);
?>