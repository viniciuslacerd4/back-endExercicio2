<?php

function calcularTamanhoPilha($figuras1, $figuras2) {

    while ($figuras2 != 0) {
        $temp = $figuras2;
        $figuras2 = $figuras1 % $figuras2;
        $figuras1 = $temp;
    }

    return $figuras1;
}

$casosTeste = intval(fgets(STDIN));


for ($i = 0; $i < $casosTeste; $i++) {

    list($figuras1, $figuras2) = array_map('intval', explode(' ', fgets(STDIN)));


    $tamanhoPilha = calcularTamanhoPilha($figuras1, $figuras2);

    echo $tamanhoPilha . "\n";
}

?>
