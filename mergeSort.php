<?php

function mergeSort(array $arr): array {
    $n = count($arr);

 
    if ($n <= 1) {
        return $arr;
    }

    /
    $middle = intdiv($n, 2);
    $left = array_slice($arr, 0, $middle);
    $right = array_slice($arr, $middle);

    $leftSorted = mergeSort($left);
    $rightSorted = mergeSort($right);

   
    return merge($leftSorted, $rightSorted);
}

function merge(array $left, array $right): array {
    $result = [];

    while (count($left) > 0 && count($right) > 0) {
        if ($left[0] <= $right[0]) {
            $result[] = array_shift($left); 
        } else {
            $result[] = array_shift($right); 
        }
    }

 
    return array_merge($result, $left, $right);
}


$unsorted = [38, 27, 43, 3, 9, 82, 10];
$sorted = mergeSort($unsorted);

echo "Arreglo ordenado: " . implode(", ", $sorted) . "\n";

?>
