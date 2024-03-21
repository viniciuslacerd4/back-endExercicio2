<?php
$linha = trim(fgets(STDIN));
$valores = explode(" ", $linha);

$num1 = $valores[0];
$num2 = $valores[1];
$num3 = $valores[2];

function conta1($num1, $num2){
  $conta1 = ($num1 + $num2 + abs($num1 - $num2)) / 2;
  return $conta1;
}

function conta2($conta1, $num3){
  $conta2 = ($conta1 + $num3 + abs($conta1 - $num3)) / 2;
  return $conta2;
}

$oMaior = conta2(conta1($num1, $num2), $num3);
echo $oMaior. " eh o maior\n";

?>