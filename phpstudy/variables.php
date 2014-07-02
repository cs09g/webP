<html>
	<body>
		<?php 
		$a = 1;
		echo ($a+1)."<br />".($a+3);

		$b = 'hello';
		echo "<br />".$b."world<br />";


		define('TITLE', 'PHP');
		echo TITLE."<br />";
		# define('TITLE', 'Study'); // error

		echo gettype($a)."<br />";
		settype($a, 'double');
		if(is_int($a)){
			echo $a+2;
		}
		else echo $a;
		echo "<br />";

		// variable variables
		$variable = 'var';
		$$variable = 'varvar';
		echo $var;
		?>
	</body>
</html>