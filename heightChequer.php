<?php

function heightChecker($heights) {
    // Step 1: Count frequency of each height
    $count = array_fill(0, 101, 0); // Since heights range from 1 to 100

    foreach ($heights as $height) {
        $count[$height]++;
    }

    // Step 2: Compare expected height (simulated sorted order) with original
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
