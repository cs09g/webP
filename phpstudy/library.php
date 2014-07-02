<?php 
$page = $_SERVER['PHP_SELF'];

echo date('Y-n-j H:m:s');
?>
<html>
	<body>
		<a href="<?= $page;?>">refresh the clock</a>
	</body>
</html>