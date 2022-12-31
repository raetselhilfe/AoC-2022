<?php

class Aoc31
{
    public $alpha;
    public $points;
    public $lines;
    
    public function __construct() {
        $this->alpha = array_merge(range("a", "z"), range("A", "Z"));
        $this->points = 0;
        $this->lines = 0;
    }
    
    public function index() {
        $handler = fopen('input.txt', "r");
        $line_array = [];
        
        while($line = fgets($handler)) {
            $line = trim($line);
            $line_array[] = str_split($line);
            $this->lines++;
            if ($this->lines % 3 == 0) {
                $intersect = array_intersect($line_array[0], $line_array[1], $line_array[2]);
                $line_array = [];
                $this->points += array_search(array_shift($intersect), $this->alpha) + 1;
            }
        }
        //echo PHP_EOL;
    }
}
$aoc = new Aoc31();
$aoc->index();
echo $aoc->points . PHP_EOL;