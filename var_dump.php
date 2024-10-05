<?php include 'error.php' ?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Debugging</title>
</head>
<body>
	<pre><?php
			var_dump('In process of debugging');
			var_dump(123);
			var_dump(123.76);
			var_dump('a ' . 123.76);
		?>
	</pre>
</body>
</html>