<?php

$valor = trim(fgets(STDIN));

echo $valor . "\n";

echo intdiv($valor, 100) . " nota(s) de R$ 100,00\n";
$valor = $valor %= 100;

echo intdiv($valor, 50) . " nota(s) de R$ 50,00\n";
$valor = $valor %= 50;

echo intdiv($valor, 20) . " nota(s) de R$ 20,00\n";
$valor = $valor %= 20;

echo intdiv($valor, 10) . " nota(s) de R$ 10,00\n";
$valor = $valor %= 10;

echo intdiv($valor, 5) . " nota(s) de R$ 5,00\n";
$valor = $valor %= 5;

echo intdiv($valor, 2) . " nota(s) de R$ 2,00\n";
$valor = $valor %= 2;

echo intdiv($valor, 1) . " nota(s) de R$ 1,00\n";
$valor = $valor %= 1

?>