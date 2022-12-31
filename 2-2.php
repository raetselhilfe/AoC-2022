<?php

class Aoc
{
    public $game = [
    	"A" => "rock",
    	"B" => "paper",
    	"C" => "scissor",
    	"X" => "rock",
    	"Y" => "paper",
    	"Z" => "scissor",
    ];
    public $opponent = ["A" => 1, "B" => 2, "C" => 3];
    public $me = ["X" => 1, "Y" => 2, "Z" => 3];
    public $points = 0;

    public function index()
    {
        $file = fopen("input.txt", "r");
        while ($line = fgets($file)) {
            [$o, $m] = explode(" ", trim($line));
            $this->points += $this->getPoints($o, $m);    
        }
        echo "---------------------" . PHP_EOL;
        echo "Endstand: " . $this->points . PHP_EOL;
    }

    function getPoints($o, $m)
    {
        switch ($m) {
            case "Y":
                return $this->opponent[$o] + 3;
            case "X":
                switch ($this->game[$o]) {
                    case "rock":
                        return $this->me["Z"];
                    case "paper":
                        return $this->me["X"];
                    case "scissor":
                        return $this->me["Y"];
                }
            case "Z":
                switch ($this->game[$o]) {
                    case "rock":
                        return $this->me["Y"] + 6;
                    case "paper":
                        return $this->me["Z"] + 6;
                    case "scissor":
                        return $this->me["X"] + 6;
                }
        }
    }
}
$aoc = new Aoc();
$aoc->index();
