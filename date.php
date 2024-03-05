<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>
<?php
//ex 1 mensagem de bom dia/ boa tarde/boa noite
/*
date_default_timezone_set('america/sao_paulo');
$hora = date("H:i:s");
echo($hora); 

if($hora > 0 && $hora < 12){
    echo("<br><b>Bom Dia</b>");
}

else if($hora >=12 && $hora < 18){
    echo("<br><b>Boa Tarde</b>");
}

else{
    echo("<br><b>Boa Noite</b>");
}*/

//ex2 data por extenço
header('Content-type: text/html; charset=ISO-8859-1');
setlocale(LC_TIME, 'portuguese');
date_default_timezone_set('America/Sao_Paulo');

$date = date('Y-m-d');
echo strftime("%A, %d de %B de %Y", strtotime($date));

$dia_semana = "";
$dia = date('d'); 
$dia_mes = "";
$ano = date('Y');

$mes = date("m");
switch($mes){
    case '01':
        $dia_mes = "Janeiro"; 
        break;	
        $dia_mes = "Fevereiro"; 
        break;
    case '03':
        $dia_mes = "Março"; 
        break;
    case '04':
        $dia_mes = "Abril"; 
        break;
    case '05':
        $dia_mes = "Maio"; 
        break;	
    case '06':
        $dia_mes = "Junho"; 
        break;
    case '07':
        $dia_mes = "Julho"; 
        break;
    case '08':
        $dia_mes = "Agosto";
    case '09':
        $dia_mes = "Setembro"; 
        break;	 
    case '10':
        $dia_mes = "Outrubro"; 
        break;
    case '11':
        $dia_mes = "Novembro"; 
        break;
    case '12':
        $dia_mes = "Dezembro";  
        default:
			echo ("A operação escolhida não é valida");
	}
   
$semana = date("N");
switch($mes){
    case '02':
        $dia_semana = "Segunda"; 
        break;	
    case '03':
        $dia_semana = "Terça"; 
        break;
    case '04':
        $dia_semana = "Quarta"; 
        break;
    case '05':
        $dia_semana = "Quinta"; 
        break;
    case '06':
        $dia_semana = "Sexta"; 
        break;	
    case '07':
        $dia_semana = "Sábado"; 
        break;
    case '01':
        $dia_semana = "Domingo"; 
        break; 
        default:
			echo ("A operação escolhida não é valida");
	}

echo("<br>".$dia_semana.", ".$dia." de ".$dia_mes." de ".$ano);
?>