<?php

function birthdayCakeCandles($candles) {
    $max = max($candles);              
    $count = 0;

    foreach ($candles as $candle) {
        if ($candle == $max) {
            $count++;                 
        }
    }

    return $count;
}


fscanf(STDIN, "%d", $n);
$candles = array_map('intval', explode(' ', trim(fgets(STDIN))));

$result = birthdayCakeCandles($candles);
echo $result . "\n";
