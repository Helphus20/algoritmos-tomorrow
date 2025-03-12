<?php
/*
    PROBLEM 1066
    Make a program that reads five integer values. Count how many of these values are even, odd, positive and negative.
    Print these information like following example.

    Input
    The input will be 5 integer values.

    Output
    Print a message like the following example with all letters in lowercase, indicating how many of these values ​​are even, odd, positive and negative.

    Input Sample	Output Sample
    -5
    0
    -3
    -4
    12

    3 valor(es) par(es)
    2 valor(es) impar(es)
    1 valor(es) positivo(s)
    3 valor(es) negativo(s)
*/


//recebe os valores
function recebeValores()
{
    $valores = [];
    for ($i = 0; $i < 5; $i++){
        $valor = readline();
        $valores[] = $valor;
    }
    return $valores;
}

function main ()
{
    $valores = recebevalores();
    $countPares = 0;
    $countImpares = 0;
    $countPositivos = 0;
    $countNegativos = 0;

    foreach ($valores as $num ) {
        $num > 0 ? $countPositivos++ : $countNegativos++;
        $num % 2 == 0 ? $countPares++ : $countImpares++;
    }
    echo PHP_EOL;
    echo "$countPares valor(es) par(es)\n";
    echo "$countImpares valor(es) impar(es)\n";
    echo "$countPositivos valor(es) positivo(s)\n";
    echo "$countNegativos valor(es) negativo(s)\n";

}

main();