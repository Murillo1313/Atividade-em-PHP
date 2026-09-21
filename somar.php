<?php

$num1 = $_POST["num1"];

$operacao = $_POST["operacao"];

$num2 = $_POST["num2"];

//$resultado = ($num1 + $num2);

//echo $resultado;

if ($operacao == "+"){
   $resultado = $num1 + $num2;
    echo $resultado;
}

