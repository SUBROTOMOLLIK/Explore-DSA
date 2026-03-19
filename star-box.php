<?php


// create star full box

$number = rand(1, 5);

for ($i=1; $i <= $number; $i++) { 

    for ($j = 1; $j <= $number; $j++) { 
        echo '*';
    }

    echo "</br>";
}


//create triangle star box

$num = rand(1, 10);

for($i = 1; $i <= $num; $i++ ){

    for($j = 1; $j <= $i; $j++ ){
        echo "*";
    }

    echo '</br>';
} 
