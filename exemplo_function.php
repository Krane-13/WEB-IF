<?php
//arquivo exemplo_function.php
function somar($n1, $n2){
    $resultado = $n1 + $n2; //armazenar o resultado da operacao na variavel
    echo("$n1 + $n2 = $resultado");
}

$GLOBALS["n3"] = 12;
function somar2($n1,$n2){
    $resultado = $n1 + $n2 + $n3;
    return $resultado;
}

function subtrair($n1,$n2){
    return $n1-$n2;
}

somar(17, 13);

$result = somar2(10,15);
echo("$result");
echo("A soma de 77 + 64 é ".somar2(77,64));

echo(subtrair(5,2));

?>