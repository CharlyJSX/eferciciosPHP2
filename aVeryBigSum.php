<?php

function aVeryBigSum($ar) {
    $sum = 0;
    foreach ($ar as $value) {
        $sum += $value;
    }
    return $sum;
}


fscanf(STDIN, "%d", $n);
$ar = array_map('intval', explode(' ', trim(fgets(STDIN))));

echo aVeryBigSum($ar) . "\n";
