<?php

function minimumNumber($n, $password) {
    $missingTypes = 0;

    if (!preg_match('/[0-9]/', $password)) {
        $missingTypes++;
    }

    if (!preg_match('/[a-z]/', $password)) {
        $missingTypes++;
    }

    if (!preg_match('/[A-Z]/', $password)) {
        $missingTypes++;
    }

    if (!preg_match('/[!@#$%^&*()\-+]/', $password)) {
        $missingTypes++;
    }

   
    $requiredLength = max(6 - $n, 0);

 
    return max($missingTypes, $requiredLength);
}

fscanf(STDIN, "%d", $n);
$password = trim(fgets(STDIN));

echo minimumNumber($n, $password) . "\n";
