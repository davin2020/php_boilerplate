<!DOCTYPE html>
<html lang="en">

	<head>
		<title>Boiler Plate Template</title>
	</head>

	<body>
		<h1>Boiler Plate Template</h1>

		<pre>

		<?php  
		require 'BoilerPlate.php';

		echo '<p>Hello Boiler Plate World<p>';
		$boiler = new BoilerPlate();
		$result = $boiler->addSomething(2, 5);
		print_r('Result is: ' . $result);
		?>

		</pre>

	</body>
</html>
