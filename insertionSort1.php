<?php

function insertionSort1($n, $arr) {
    $key = $arr[$n - 1]; 
    $i = $n - 2;

    while ($i >= 0 && $arr[$i] > $key) {
        $arr[$i + 1] = $arr[$i]; 
        echo implode(" ", $arr) . "\n"; 
        $i--;
    }

    $arr[$i + 1] = $key; 
    echo implode(" ", $arr) . "\n"; 
}


$n = intval(trim(fgets(STDIN)));
$arr = array_map('intval', explode(' ', fgets(STDIN)));
insertionSort1($n, $arr);

?>
