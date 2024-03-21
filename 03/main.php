<?php

$num1 = intval(trim(fgets(STDIN)));
$num2 = intval(trim(fgets(STDIN)));


$min = min($num1, $num2);
$max = max($num1, $num2);


for ($i = $min + 1; $i < $max; $i++) {
    
    if ($i % 5 === 2 || $i % 5 === 3) {
        
        echo $i . "\n";
    }
}

?>