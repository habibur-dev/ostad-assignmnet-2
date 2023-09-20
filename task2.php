<?php

//Task 2: Skip Multiples of 5
echo "\n\n=============Task 2=============\n";
function skipFiveMultiple($start, $end, $skip){
    for($i = $start; $i <= $end; $i++){

        if($i % $skip == 0){
            continue;
        }

        echo $i." ";
    }
}

skipFiveMultiple(1, 50, 5);