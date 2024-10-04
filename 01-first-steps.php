<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Document</title>
	<style>
		.color-1 {color: orange}
		.color-2 {color: darkred}
		.color-3 {color: yellow}
		.color-4 {color: darkgreen}
		.color-5 {color: cornflowerblue}
		.color-6 {color: deeppink}
	</style>
</head>
<body class='color-<?php echo rand(1,6)?>'>
	<h1>Hello! This is my first php file!</h1>
	<h1><?php echo 'Test' ?></h1>
	<h1><?php echo rand(1, 6); ?></h1>
</body>
</html>