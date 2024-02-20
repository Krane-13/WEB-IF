<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
		$num= 4;
		$resto = $num %2;

		echo("Número escolhido foi o: $num <br>");
		if($resto == 0)
			echo("Esse número é <b>Par</b>");
		else
			echo("Esse número é <b>Ímpar</b>");
	?>
</body>
</html>
