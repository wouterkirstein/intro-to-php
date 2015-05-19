<!DOCTYPE html>

	<?php
		$var1 = 3;
		$var2 = 4;
	?>

	<body>
	</body>
	

	<?php 
	// do the math
	echo $a = (($var1 + $var2)) ?> <br>
	<?php echo $b = (($var1 - $var2)) ?> <br>
	<?php echo $c = (($var1 * $var2)) ?> <br>
	<?php echo $d = (($var1 / $var2)) ?> <br>

	

	<?php
	// make an array
		$arr = array ($a, $b, $c, $d);
		echo json_encode ($arr);
	?>



	</body>

</html>