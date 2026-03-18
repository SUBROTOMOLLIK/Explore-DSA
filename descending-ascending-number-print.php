<?php


// Descending 1 to 1000 Number Print

$i = 1000;
$count = 0;

for($i ; $i >= 1; $i--){
    echo $i . ", ";
    $count ++;
    // after 5 number print new line
    if($count % 5 === 0){
        echo "</br>";
    }
}


echo "<br></br>".".............. New Program ................"."<br></br>";

// Ascending 1 to 1000 Number Print

$number = 1000;
$count = 0;

for($i = 1; $i <= $number; $i++){
    echo $i . ", ";
    $count ++;
    // after 10 number print new line
    if($count % 10 === 0){
        echo "<br>";
    }
}