<?php
/*
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

$valores = [];

//recebe os valores
for ($i = 0; $i < 5; $i++){
    $valor = readline();
    if(filter_var($valor, FILTER_VALIDATE_INT)){
        $valores[] = $valor;
    }  else{
        echo "O valor precisa ser um inteiro\n";
    }
}

function main (){
    foreach ($num as $valores ) {
        # code...
    }
}

//var_dump($valores);