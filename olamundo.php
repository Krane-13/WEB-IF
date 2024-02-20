<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<?php
	//função echo é para escrever na tela
		echo("ola mundo <br>");
		//declaração de variaveis

		$status_aula = true ;

		$sexo= "Masculino";
		$nome = "Matheus";

		$idade = 30;
		$peso = 80;

		//exibindo as informações na tela
		echo("Nome: $nome Idade: $idade <b>Peso: $peso kg</b>");

		if($status_aula == true){
			echo("<br>A aula <b>não</b> acabou<br>");
		}else {
			echo("<br>Podem sair para o intervalo<br>");
		}

		//exemplo ,aioridade
		//condição: ter mais ou igual a 18 anos
		if($idade >= 18)
			echo("É maior de idade");
		else
			echo("É menor de idade");
	?>
</body>
</html>
