<?php 
$str = 'foobar: 2008';

// back reference
preg_match('~(?P<name>\w+): (?<number>\d+)~', $str, $matches);
print_r($matches);
?>