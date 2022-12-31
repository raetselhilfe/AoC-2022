<?php

class Aoc31
{
    public $alpha;
    public $points;
    
    public function __construct() {
        $this->alpha = array_merge(range("a", "z"), range("A", "Z"));
        $points = 0;
    }
    
    public function index() {
        $handler = fopen('input.txt', "r");
        while($line = fgets($handler)) {
            $line = trim($line);
            $first = substr($line, 0, strlen($line) / 2);
            $second = substr($line, strlen($first));
            $first_array = str_split($first);
            $second_array = str_split($second);

            $diff = array_intersect($first_array, $second_array);
            //print_r($diff);
            $this->points += array_search(array_shift($diff), $this->alpha) + 1;
        }
        //echo PHP_EOL;
    }
}
$aoc = new Aoc31();
$aoc->index();
echo $aoc->points . PHP_EOL;