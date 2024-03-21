<?php

function decifraCesar($texto, $deslocamento) {
    $resultado = '';

    $tamanhoAlfabeto = 26;

    foreach (str_split($texto) as $letra) {
      
        if (!ctype_upper($letra)) {
            $resultado .= $letra;
            continue;
        }


        $novoCodigo = ord($letra) - $deslocamento;
        if ($novoCodigo < ord('A')) {
            $novoCodigo += $tamanhoAlfabeto;
        }

        $resultado .= chr($novoCodigo);
    }

    return $resultado;
}


$n = intval(fgets(STDIN));


for ($i = 0; $i < $n; $i++) {
    
    $textoCodificado = trim(fgets(STDIN));
    $deslocamento = intval(trim(fgets(STDIN)));


    $textoDecifrado = decifraCesar($textoCodificado, $deslocamento);

    echo $textoDecifrado . "\n";
}

?>
