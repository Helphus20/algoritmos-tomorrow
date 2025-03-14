<?php

$casosDeTeste = readline();
$numerosCasos;

for ($i = 0; $i < $casosDeTeste; $i++) {
    $numeros = readline();

    //separando os espaços dos números, e retornando num array
    $numeros = explode(" ", $numeros);

    foreach ($numeros as $numero) {
        $populacaoETaxas[] = $numero;
    }

    $numerosCasos[$i] = $populacaoETaxas;

    //esvazia array
    unset($populacaoETaxas);
}

for($i = 0; $i < $casosDeTeste; $i++){
    if(($numerosCasos[$i][0] || $numerosCasos[$i][1] > 100) || ($numerosCasos[$i][0] || $numerosCasos[$i][1] < 1000000))
    {
        if ( $numerosCasos[$i][2] > $numerosCasos[$i][3] )
        {
            $populacaoA = $numerosCasos[$i][0];
            $populacaoB = $numerosCasos[$i][1];
            $taxaA = ($numerosCasos[$i][2])/100;
            $taxaB = ($numerosCasos[$i][3])/100;
            $anos = 0;

            while($populacaoB > $populacaoA){
                $populacaoA += $populacaoA * $taxaA;
                $populacaoB += $populacaoB * $taxaB;                
                $anos++;
            }

            if ($anos > 100){
                echo "Mais de 1 seculo.\n";
            }else{
                echo "$anos anos.\n";
            }
        }
    }
}