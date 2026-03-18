<?php 

/***** random number odd even ******/


    $number  = rand(1, 1000); 

    if ($number % 2 == 0) { 
        echo "The number $number is even."; 
    } else { 
        echo "The number $number is odd."; 
    }



 // 1 to 100 odd even

    $num = 100;

    for($i = 1; $i <= $num; $i++){

        if($i % 2 === 0){
            echo "$i is even <br>";
        }else{
            echo "$i is odd <br>";
        }
    } 


// specific number odd even


    $specific_number = 53;

    if($specific_number % 2 === 0){
        echo "$specific_number is even";
    }else{
        echo "$specific_number is odd";
    }


?>