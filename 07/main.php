<?php

while (true) {
    $entrada = explode(" ", trim(fgets(STDIN)));
    list($h1, $m1, $h2, $m2) = $entrada;

    if ($h1 == 0 && $m1 == 0 && $h2 == 0 && $m2 == 0) {
        break;
    }

    $totalMinAtual = $h1 * 60 + $m1;
    $totalMinAlarme = $h2 * 60 + $m2;

    $difeMinu = ($total_minutos_alarme - $total_minutos_atual + 24 * 60) % (24 * 60);

    echo $difeMinu . "\n";
}

?>
