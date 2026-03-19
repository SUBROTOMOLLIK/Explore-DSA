<?php 

$number = rand(1, 100);

for ($i=1; $i <= $number; $i++) { 

    // print divisor
    if($number % $i === 0){
        echo $i . " ";
    }

}