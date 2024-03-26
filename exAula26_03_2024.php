<?php
#1
// $num = 5;
// if($num < 0){
//     echo("$num é Negativo");
// } else if($num > 0){
//     echo("$num é Positivo");
// }else{
//     echo("$num é Zero");
// }


// #2
// $valor = 0;
// for($i=1; $i<=10; $i++){
//     if($i % 2 == 0){
//         $valor += $i;
//     }
// }
// echo($valor);

// #3
// $altura_chico = 0.8;
// $cresc_chico = 0.06;
// $altura_juca = 0.6;
// $cresc_juca = 0.09;

// $anos = 0;

// while ($altura_chico >= $altura_juca) {
//     $altura_chico += $cresc_chico;
//     $altura_juca += $cresc_juca;
//     $anos++;
// }
// echo ("ira demorar $anos anos para que juca seja maior que chico");

#4
// $linhas= 5;
// for($i=1; $i <= $linhas; $i++){
//     for($j = 1; $j<= $i; $j++){
//         echo("*");
//     }
//     echo("<br>");
// }

#5
// $numPrimo = 5;

// for($i=2; $i<=100; $i++){
//     $ehPrimo = true;
//     for ($j=2; $j<$i; $j++){
//         if($i % $j == 0){
//             $ehPrimo = false;
//         }
//     }
//     if ($ehPrimo == true){
//         echo("$i ");
//     }

// }

$x=15;
$count=0;
$num=2;
while($count < $x){
    for($i =2;$i<= $num/2; $i++){
        if($num % $i == 0){
            break;
        }
    }
    if($i > $num/2){
        echo("$num <br>");
        $count++;
    }
    $num++;
}
