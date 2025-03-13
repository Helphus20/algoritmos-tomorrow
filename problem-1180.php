<?php

/*
beecrowd | 1180
Lowest Number and Position
Adapted by Neilor Tonin, URI  Brazil

Timelimit: 1
Write a program that reads a number N. This N is the size of a array X[N]. Next, read each of the numbers of X, find the smallest element of this array and its position within the array, printing this information.

Input
The first line of input contains one integer N (1 < N <1000), indicating the number of elements that should be read to an array X[N] of integer numbers. The second row contains each of the N values, separated by a space. Remember that no input will have repeated numbers.

Output
The first line displays the message “Menor valor:” followed by a space and the lowest number read in the input. The second line displays the message “Posicao:” followed by a space and the array position in which the lowest number is, remembering that the array starts at the zero position.

Input Sample	Output Sample
10
1 2 3 4 -5 6 7 8 9 10

Menor valor: -5
Posicao: 4
*/
$posicoes = readline();
$numeros = readline();

//separando os espaços dos números
$numeros = explode(" ", $numeros);

//convertendo para inteiros
foreach($numeros as $indice => $number){
    $numeros[$indice] = intval($number);
}

for ($i = 0; $i < $posicoes; $i++){
    $indiceMenorValor = $i;
    for($j = $i + 1; $j < $posicoes ; $j++){
        if ($numeros[$j] < $numeros[$indiceMenorValor]){
            $indiceMenorValor = $j;
        }
    }
}

$menorValor = $numeros[$indiceMenorValor];
echo "Menor valor: $menorValor";
echo "\nPosicao: $indiceMenorValor";