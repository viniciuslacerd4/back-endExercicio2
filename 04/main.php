<?php

while(True) {
  $numeros = trim(fgets(STDIN));
  $ler = explode(" ", $numeros);
  $num1 = $ler[0];
  $num2 = $ler[1];
  $conta = 0;
  $min = min($num1, $num2);
  $max = max($num1, $num2);

  if ($num1 == 0 && $num2 == 0){
    break;
  }


  if ($num1 != 0 && $num2 != 0) {
      for ($i = $min; $i <= $max; $i++) {
          echo $i . " ";
          $conta += $i;
      }

      echo "Sum=" . $conta . "\n";
  } 
}
  

?>
