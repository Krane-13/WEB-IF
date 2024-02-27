<?php
	//exemplo do comando switch

	$numero1 = 10;
	$numero2 =20;
	$operador = '*';

	if($operador == '+')
		echo("A soma de $numero1 e do $numero2 é ". $numero1 + $numero2);
	else if($operador == '-')
		echo("A subtração de $numero1 e do $numero2 é ". $numero1 - $numero2);
	else if($operador == '*')
		echo("A multriplicação de $numero1 e do $numero2 é ". $numero1 * $numero2);
	else if($operador == '/ ')
		echo("A divicao de $numero1 e do $numero2 é ". $numero1 / $numero2);

	switch($operador){

		case '+':
			echo("A soma de $numero1 e do $numero2 é ". $numero1 + $numero2);
		break;
		case '-':
			echo("A subtração de $numero1 e do $numero2 é ". $numero1 - $numero2);
		break;
		case '*':
			echo("A multriplicação de $numero1 e do $numero2 é ". $numero1 * $numero2);
		break;
		case '/':
			echo("A divicao de $numero1 e do $numero2 é ". $numero1 / $numero2);
		break;
		default:
		echo("A operação esolhida não é valida");
	}
?>