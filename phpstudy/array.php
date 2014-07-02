<?php 
$arr = array('a', 'b','c','g','i');
echo 'array : ';
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />array_merge : ';
$arr = array_merge($arr, array('e','f')); // it's not a merge sort. just appending.
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />array_shift : ';
array_shift($arr); // remove from the first
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />array_unshift : ';
array_unshift($arr, 'p'); // insert to the first. can't insert as an array.
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />array_splice : ';
array_splice($arr, 3, 0, array('A','B')); // insert values into the offset with the length space 
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />array_pop : ';
array_pop($arr); // remove from the last
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />array_push : ';
array_push($arr, 'k'); // append to the last
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />sort : ';
sort($arr); // sorting. upper cases have an advantage
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}

echo '<br />rsort : ';
rsort($arr); // reverse sorting
for($i=0;$i<count($arr);$i++){
	echo $arr[$i]." ";
}
?>