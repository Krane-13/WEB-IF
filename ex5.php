<?php
// Elabore um algoritmo que lê duas informações: peso e altura de um indivíduo e em seguida, calcule o Índice de Massa Corpórea do indivíduo, apresentando o resultado na tela, por exemplo, “Seu IMC é 22,3 sendo considerado normal”. A fórmula para cálculo do IMC é (0,6)

$altura = 176;
$peso = 80;
$imc = ($peso / ($altura * $altura)*10000);

if($imc < 18.5){
	echo("$imc : Magreza");
}
else if($imc >=18.5 && $imc < 25){
	echo("$imc : Normal");
}
else if($imc >= 25 && $imc < 30){
	echo("$imc : Sobrepeso");
}
else if($imc >=30 && $imc <40){
	echo("$imc : Obesidade");
}
else{
	echo("$imc : Obesidade Grave");
}
?>