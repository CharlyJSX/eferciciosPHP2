<?php

function marsExploration($s) {
    $expected = "SOS";
    $changed = 0;

    for ($i = 0; $i < strlen($s); $i++) {
        if ($s[$i] !== $expected[$i % 3]) {
            $changed++;
        }
    }

    return $changed;
}

$s = trim(fgets(STDIN));
echo marsExploration($s) . "\n";
