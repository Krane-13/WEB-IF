<?php
//Faça um algoritmo que tenha 3 variáveis, que representam 3 notas e calcule a média aritmética, no entanto, o algoritmo não deve considerar notas inválidas (valores negativos ou maiores que dez). 

$nota1 = 11;
$nota2 = 9;
$nota3 = 10;

$total_nota = 0; 
$soma_nota = 0;

if($nota1 <=10 && $nota1 >= 0){
	$total_nota ++ ; 
	$soma_nota += $nota1;}
if($nota2 <=10 && $nota2 >= 0){
	$total_nota ++ ; 
	$soma_nota += $nota2;}
if($nota3 <=10 && $nota3 >= 0){
	$total_nota ++ ; 
	$soma_nota += $nota3;}

if($soma_nota > 0){
	$media = $soma_nota / $total_nota;
	echo("A média das notas é:".$media);
}
else{
	echo("Não há notas vali0das para calcular média");
}

?>