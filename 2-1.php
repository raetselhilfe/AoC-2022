<?php
$file = fopen("input.txt", "r");
$game = [
    "A" => "rock",
    "B" => "paper",
    "C" => "scissor",
    "X" => "rock",
    "Y" => "paper",
    "Z" => "scissor",
];

$me = ["X" => 1, "Y" => 2, "Z" => 3];
$points = 0;

while ($line = fgets($file)) {
    [$o, $m] = explode(" ", trim($line));

    $points += $me[$m];
    
    if ($game[$o] == $game[$m]) {
        $points += 3;
    }
    
    if ($game[$m] == "paper" && $game[$o] == "rock") {
        $points += 6;
        continue;
    }

    if ($game[$m] == "scissor" && $game[$o] == "paper") {
        $points += 6;
        continue;
    }

    if($game[$m] == "rock" && $game[$o] == "scissor") {
        $points += 6;
        continue;
    }
}
echo $points . PHP_EOL;
