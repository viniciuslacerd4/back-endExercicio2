<?php


function criptografar($linha) {
    $texto = "";

    for ($i = 0; $i < strlen($linha); $i++) {
        $char = $linha[$i];
        if (ctype_alpha($char)) {
            $char = chr((ord($char) + 3 - (ctype_upper($char) ? 65 : 97)) % 26 + (ctype_upper($char) ? 65 : 97));
        }
        $texto .= $char;
    }


    $texto = strrev($texto);

    $metade = strlen($texto) / 2;
    for ($i = $metade; $i < strlen($texto); $i++) {
        $char = $texto[$i];
        if (ctype_alpha($char)) {
            $char = chr((ord($char) - 1 - (ctype_upper($char) ? 65 : 97) + 26) % 26 + (ctype_upper($char) ? 65 : 97));
        }
        $texto[$i] = $char;
    }

    return $texto;
}


while (($n = intval(fgets(STDIN)))) {
    for ($i = 0; $i < $n; $i++) {
        $linha = trim(fgets(STDIN));
        echo criptografar($linha) . "\n";
    }
}

?>
