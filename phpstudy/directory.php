<?php 
#echo getcwd().'<br />';
chdir('../');
echo getcwd().'<br />';

$dir = './';
$files1 = scandir($dir); // . .. a b c ....
$files2 = scandir($dir, 1); // z y x .... .. . 

print_r($files1);
echo '<br />';
print_r($files2);
echo '<br />';

echo getcwd();
mkdir('1/2/3/4', 0700, true); // path, permission, if the path is not exist then make.

?>