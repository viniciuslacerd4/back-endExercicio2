<?php

function ledsParaDigito($digito) {

    $leds_por_digito = array(
        0 => 6, 1 => 2, 2 => 5, 3 => 5, 4 => 4,
        5 => 5, 6 => 6, 7 => 3, 8 => 7, 9 => 6
    );
    return $leds_por_digito[$digito];
}

function ledsParaNumero($numero) {

    $numero_str = strval($numero);

 
    $total_leds = 0;


    for ($i = 0; $i < strlen($numero_str); $i++) {
        $digito = intval($numero_str[$i]);
        $total_leds += ledsParaDigito($digito);
    }


    return $total_leds;
}

$n = intval(trim(fgets(STDIN)));

for ($i = 0; $i < $n; $i++) {

    $valor = intval(trim(fgets(STDIN)));

    echo ledsParaNumero($valor) . " leds\n";
}

?>
