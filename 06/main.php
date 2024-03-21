<?php


$num1 = intval(trim(fgets(STDIN)));
$num2 = intval(trim(fgets(STDIN)));


$somaImpa = 0;


$min = min($num1, $num2);
$max = max($num1, $num2);

for ($i = $min + 1; $i < $max; $i++) {
    if ($i % 2 != 0) {
        $somaImpa += $i;
    }
}

echo $somaImpa . "\n";

?>
