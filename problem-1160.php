<?php

$casosDeTeste = intval(readline());
$anosPorCidade = [];

for ($i = 0; $i < $casosDeTeste; $i++) {
    // Lê e separa os valores de entrada
    $numeros = explode(" ", readline());

    // Converte os valores corretamente
    $populacaoA = intval($numeros[0]);
    $populacaoB = intval($numeros[1]);
    $taxaA = floatval($numeros[2]) / 100;
    $taxaB = floatval($numeros[3]) / 100;

    // Valida as restrições do problema
    if ($populacaoA >= 100 && $populacaoA < 1000000 &&
        $populacaoB >= 100 && $populacaoB <= 1000000 &&
        $populacaoA < $populacaoB &&
        $taxaA > $taxaB) {

        $anos = 0;

        // Enquanto a população de A for menor que B, calculamos o crescimento
        while ($populacaoA <= $populacaoB) {
            //floor arredonda as frações para baixo
            $populacaoA += floor($populacaoA * $taxaA);
            $populacaoB += floor($populacaoB * $taxaB);
            $anos++;

            // Interrompe se o tempo for maior que 100 anos
            if ($anos > 100) {
                $anos = 101;
                array_push($anosPorCidade, $anos);
                break;
            }
        }
    
        // Se ainda não imprimimos a saída, significa que encontramos um valor dentro do limite
        if ($anos <= 100) {
            array_push($anosPorCidade, $anos);
        }
    }
}

function output($anosPorCidade)
{
    foreach ($anosPorCidade as $item){
        if ($item <= 100){
            echo "$item anos.\n";
        }
        if ($item === 101){
            echo "Mais de 1 seculo.\n";
        }
    }
}

output($anosPorCidade);
