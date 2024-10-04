<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="styles/global.css" type="text/css" />
	<title>Document</title>
</head>
<body>
<div>
	<?php
		$greeting = "I'm a string";
		echo $greeting . ' !!!';
		
		echo '<br>';
		$name = 'Zaur';
		$subject = 'PHP';
		//difference between single and double quotes
		echo 'Hello, I\'m ' . $name . ' and I am learning ' . $subject . '!';
		echo '<br>';
		echo "Hello, I'm $name and I am learning $subject!";
		
		$string = "const name = 'Zaur';
		
		if (name === 'Zaur') {
			console.log('Hello, Zaur!');
		}";
		
		$heredoc = <<<HEREDOC
		"const name = 'Zaur';
		
		if (name === 'Zaur') {
			console.log('Hello, Zaur!');
		}";
		HEREDOC;

//		echo '<br>';
//		echo $string;
//		echo '<br>';
//		echo $string;
		echo '<br>';
		$promoCode = 'SUMMER_SALE';
		echo "Seasonal Offer! 🤑 Use \"{$promoCode}\" for an exclusive discount.";
	?>
	
	<textarea><?php echo $heredoc; ?></textarea>
</div>
</body>
</html>
