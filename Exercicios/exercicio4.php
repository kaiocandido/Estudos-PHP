<?php

declare(strict_types=1);

class ResistorColorTrio
{    
    public $list = [
    "black" => 0,
    "brown" => 1,
    "red" => 2,
    "orange" => 3,
    "yellow" => 4,
    "green" => 5,
    "blue" => 6,
    "violet" => 7,
    "grey" => 8,
    "white" => 9,
    ];
    
    public function label(array $colors): string {

        $optionOne = $colors[0];
        $optionTwo = $colors[1];
        $optionThree = $colors[2];

        $optionOne = $this->list[$optionOne];
        $optionTwo = $this->list[$optionTwo];
        $optionThree = $this->list[$optionThree];


       $result = $optionOne.  $optionTwo . str_repeat("0", $optionThree);
       
       if ($result >= 1000){
        return $result / 1000 . " kiloohms";
       }else if ($result >=  1000000) {
        return $result / 1000000 . " megaohms";
       }

       return $result. " ohms";
        
    }
}

$resistor = new ResistorColorTrio();

echo $resistor->label(["orange", "orange", "orange"]);





?>