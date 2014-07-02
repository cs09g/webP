<?php 
function get_member(){
	return array('chase', 'cherie');
}

$unme = get_member();
for($i=0;$i<count($unme);$i++){
	echo ucfirst($unme[$i])."<br />"; // upper case with first character
}
?>