<?php 
if(preg_match("/\bweb\b/i", 'web programing')){ // \b 
	echo 'found';
}
else{
	echo 'not found';
}
echo '<br />';
if(preg_match("/\bweb\b/i", 'website')){
	echo 'found';
}
else{
	echo 'not found';
}
echo '<br />';

$subject = 'coding everybody http://opentutorials.org chase@chase.com 010-0000-0000';
preg_match('~(http://\w+\.\w+)\s(\w+@\w+\.\w+)~', $subject, $match); 
// $match[0] : whole pattern
// $match[1] : first ()
// $match[2] : second ()
// ....

echo 'homepage : '.$match[1].'<br />';
echo 'email : '.$match[2].'<br />';
?>
<html>
	<body>
		move to <a href="<?= $match[1];?>"><?php echo $match[1];?></a>
	</body>
</html>