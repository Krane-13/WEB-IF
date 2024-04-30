<?php
$tem_erro = false;
if (isset($_GET["altura"]) && !empty($_GET["altura"])){
    $altura = $_GET["altura"];	
} else {
    echo ("Preencha altura <br>");	
    $tem_erro = true;	
}
if (isset($_GET["peso"]) && !empty($_GET["peso"])){
    $peso = $_GET["peso"];	
} else {
    echo ("Preencha o peso <br>");	
    $tem_erro = true;	
}

$imc = ($peso / ($altura * $altura))*10000;
if ($tem_erro == false) {
    echo ("Os dados enviados foram: <br>");
    echo ("Altura: $altura <br>");
    echo ("Peso: $peso <br>");
    echo ("IMC: $imc <br>");
}

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