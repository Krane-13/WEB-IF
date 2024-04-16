<?php
$num1 = $_GET["num1"];
$num2 = $_GET["num2"];
$oper = $_GET["operacao"];

if($oper == "som"){
    echo(($num1 + $num2));
}

if($oper == "sub"){
    echo(($num1 - $num2));
}

if($oper == "mul"){
    echo(($num1 * $num2));
}

if($oper == "div"){
    echo(($num1 / $num2));
}

?>