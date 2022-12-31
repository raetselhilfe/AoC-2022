<?php
$handle = fopen("input.txt", "r");
$calories = 0;
$sum = 0;
$counter = 1;
$three = [];
$thre2 = [];

while ($line = fgets($handle)) {
    $line = trim($line);

    if (strlen($line) > 0) {
        $sum += $line;
    } else {
        $calories = $sum > $calories ? $sum : $calories;
        $three[] = $calories;
        $calories = 0;
        $sum = 0;
    }
}

arsort($three);
foreach($three as $t) {
    $thre2[] = $t;
}
print_r($thre2);
echo $thre2[0] + $thre2[1] + $thre2[2] . PHP_EOL;