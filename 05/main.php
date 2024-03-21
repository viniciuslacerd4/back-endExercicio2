<?php

while (true) {
    
    if (!($numLesmas = trim(fgets(STDIN)))) {
        break;
    }

    $velocidades = explode(" ", trim(fgets(STDIN)));


    $velocidadeMax = 0;


    foreach ($velocidades as $velocidade) {
        $velocidade_maxima = max($velocidade_maxima, $velocidade);
    }

    if ($velocidade_maxima < 10) {
        echo "1\n";
    } elseif ($velocidade_maxima < 20) {
        echo "2\n"; 
    } else {
        echo "3\n"; 
    }
}

?>