<?php

function isHappy($n) {
    $seen = [];

    while ($n != 1 && !isset($seen[$n])) {
        $seen[$n] = true;
        $n = sumOfSquares($n);
    }

    return $n === 1;
}

function sumOfSquares($num) {
    $sum = 0;
    while ($num > 0) {
        $digit = $num % 10;
        $sum += $digit * $digit;
        $num = intdiv($num, 10);
    }
    return $sum;
}
