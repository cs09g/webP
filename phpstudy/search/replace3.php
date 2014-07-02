<?php 
// {startDate} = 1999-5-27 ==> $startDate = 5/27/1999

$patterns = array('~(19|20)(\d{2})-(\d{1,2})-(\d{1,2})~', '~^\s*{(\w+)}\s*=\s*~');
$replacements = array('\3/\4/\1\2', '$\1 = ');

echo preg_replace($patterns, $replacements, '{startDate} = 1999-5-27');
?>