<?php
$handler = fopen("input.txt", "r");
if (file_exists("log.txt")) {
	unlink("log.txt");
}
$count = 0;
while($line = fgets($handler)) {
	$line = trim($line);
	[$elve1, $elve2] = explode(",", $line);
	$elve1 = explode("-", $elve1);
	$elve2 = explode("-", $elve2);

	if (($elve1[0] <= $elve2[0] && $elve1[1] >= $elve2[1]) || ($elve2[0] <= $elve1[0] && $elve2[1] >= $elve1[1])) {
		$count++;	
	}
}
echo $count . PHP_EOL;