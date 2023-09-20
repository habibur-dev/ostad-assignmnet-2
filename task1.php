<?php
//Task 1: Looping with Increment using a Function
//For loop
echo "=============For Loop=============\n";
function evenNumbersForLoop($start, $end, $step) {
    
    if($start % 2 !== 0){
        $start++;
    }
    
    for ($i = $start; $i <= $end; $i += $step) {
        echo $i . " ";
    }
}

evenNumbersForLoop(1, 20, 2);


//While loop
echo "\n\n=============While Loop=============\n";
function evenNumbersWhileLoop($start, $end, $step) {
    
    if($start % 2 !== 0){
        $start++;
    }
    
    $i = $start;

    while($i <= $end){
        echo $i." ";
        $i += $step;
    }
}

evenNumbersWhileLoop(1, 20, 2);

//Do While loop
echo "\n\n=============Do While Loop=============\n";
function evenNumbersDoWhileLoop($start, $end, $step) {
    
    if($start % 2 !== 0){
        $start++;
    }
    
    $i = $start;

    do{
        echo $i." ";
        $i += $step;
    }
    while($i <= $end);
}

evenNumbersDoWhileLoop(1, 20, 2);


