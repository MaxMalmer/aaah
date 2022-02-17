<?php
/*
 * Kattis problem: https://open.kattis.com/problems/aaah
 * Author: Max Malmer, maxmalmer@live.se
 */

$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%[^\n]", $first_ah);
fscanf($stdin, "%[^\n]", $second_ah);

if (strlen($first_ah) >= strlen($second_ah)) {
    echo "go";
} else {
    echo "no";
}
?>