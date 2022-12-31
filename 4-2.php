<?php
$handler = fopen("input.txt", "r");
$count = 0;
while($line = fgets($handler)) {
	$line = trim($line);
	[$elve1, $elve2] = explode(",", $line);
	$elve1 = explode("-", $elve1);
	$elve2 = explode("-", $elve2);

	$intersect = array_intersect(range($elve1[0], $elve1[1]), range($elve2[0], $elve2[1]));
	$count = (count($intersect) > 0) ? ++$count : $count;
}
echo $count . PHP_EOL;