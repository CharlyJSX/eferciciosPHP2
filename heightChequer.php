<?php

function heightChecker($heights) {
   
    $count = array_fill(0, 101, 0); 

    foreach ($heights as $height) {
        $count[$height]++;
    }

    $index = 0;
    $diffCount = 0;

    for ($height = 1; $height <= 100; $height++) {
        while ($count[$height] > 0) {
            if ($heights[$index] != $height) {
                $diffCount++;
            }
            $index++;
            $count[$height]--;
        }
    }

    return $diffCount;
}
