<?php
//for é um laço de repetição simples
//tem três condições:
//1° inicialização da variavel 
//2° condição de saida 
//3° incremento da variavel de controle

    for($i=0; $i<10; $i=$i+3){
        echo($i );
    }

    $status = true;

    $j = 0;
    while($status == true){
        echo("$j");
    
    //criando a cond. de saida 
    if($j == 10){
        //$status =false;
        break;
    }
    $j++;
    }
    $encontrado = false;

    $k = 0;
    
    do{
        echo("$k");
        if($k == 10){
            $encontrado = true;
        }
        $k++;
    }while($encontrado == false);
    
?>