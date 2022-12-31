<?php

$handle = fopen('input.txt', 'r');
$calories = 0;
$sum = 0;
$counter = 1;

while($line = fgets($handle)) {
    $line = trim($line);

    if(strlen($line) > 0) {
        $sum += $line;
    } else {
        $calories = $sum > $calories ? $sum : $calories;
        $sum = 0;
    }
}
echo $calories . PHP_EOL;