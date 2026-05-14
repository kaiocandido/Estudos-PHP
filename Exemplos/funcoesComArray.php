<?php

function somarArray ( array $x){
    return array_sum($x);
}

$test = [1, 2, 4, 5];

echo somarArray($test);