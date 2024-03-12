<?php
	// aula4_array.php

	// forma 1 de se criar um array
	$estudante1 = ["João", 17, 68.9, "17/06/2006", "Estudante"];

	echo ("Nome: " . $estudante1[0] . "<br>");
	echo ("Idade: " . $estudante1[1] . "<br>");
	echo ("Peso: " . $estudante1[2] . "<br>");
	echo ("Nascimento: " . $estudante1[3] . "<br>");
	echo ("Ocuparação: " . $estudante1[4] . "<br>");

	// forma 2 de se criar um array
	$estudante2 = array("Mateus", 18, 71.8, "28/01/2004", "Técnico em informática");

	echo ("Nome:  $estudante2[0] <br>");
	echo ("Idade: $estudante2[1] <br>");
	echo ("Peso:  $estudante2[2] <br>");
	echo ("Nascimento:  $estudante2[3] <br>");
	echo ("Ocuparação:  $estudante2[4] <br>");

	// adicionando outras informações a um array
	$estudante2[] = 2807.58; // valor que representa sálario

	echo("Salário: $estudante2[5]<br>");

	$estudante2[10] = "Rua Frederico Augusto Timmenn";
	echo("Endereço: $estudante2[10]<br>");

	//percorrer o array
	$turma_info = ["Monique ", "Laura ", "Isabela ", "Maria ", "Matheus ", "Victor "];

	//adicionando a Ana
	$turma_info[7]= "Ana";
	echo("<br>percorrendo o array ");

	print_r($turma_info);
	//quantos elementos tem o array?
	$qtd= count($turma_info);

	$turma_info[6]= "Pablo";
	for ($i=0; $i < $qtd; $i++){
		echo($turma_info[$i]);
	}

	//usando o foreach para percorrer o array
	foreach($turma_info as $aluno){
		echo("<br>Estudante: $aluno");
	}

	//array associativo
	$func1 = ["nome" =>"Tiago", 
	"nascimento" =>"25/06/2009",
	"cidade" => "Parobé",
	"profissao"=>"Técnico em Informática"];

	//acessando um array associativo
	echo("<br>Mostrando os dados do funcionário<br>");
	echo("Nome: <b>$func1[nome]</b><br>");
	echo("Nascimento: <b>$func1[nascimento]</b><br>");
	echo("Cidade: <b>$func1[cidade]</b><br>");
	echo("Profissão: <b>$func1[profissao]</b><br>");

	//ex1 algoritmo que analise um array com 10 num e mostre o maior

	$num = array(1,2,3,580,5,6,7,8,9,10);
	echo(max($num));

	$maior=$num[0];

	foreach($num as $n){
		if ($n > $maior)
			$maior = $n;
	}

	echo($maior);

	//ex2 lista de 5 frutas numeradas


	$frutas= [
		"fru1" => "maça",
		"fru2" => "pera",
		"fru3" => "uva",
		"fru4" => "mamão",
		"fru5" => "abacaxi"
	];
	echo("<ol>");
	foreach($frutas as $f){
		echo("<li>$f</li>");
	}
	echo("</ol>");
	//ex3 quantas vezes aparece uma palavra no array

	$cont = 0;
	$words= array("a", "aa", "a");
	$procurado = "a";
	foreach($words as $word){
		if($word == $procurado)
			$cont++;
	}
	echo($cont);
?>