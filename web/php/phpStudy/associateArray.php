<?php 
$arr1 = array(
    'title'=>'JavaScript',
    'content'=>'javascript is...'
);
$arr2 = array(
    'title'=>'CSS',
    'content'=>'CSS is...'
);
$arr3 = array(
    'title'=>'HTML',
    'content'=>'HTML is...'
);

$arr = array($arr1, $arr2, $arr3);
for($i=0;$i<count($arr);$i++){
    echo $arr[$i]['title']."<br />";
}
?>