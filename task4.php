<?php
//Task 4: Fibonacci Series printing using a Function
echo "\n\n=============Task 4=============\n";

function printFibonacciSeries($count) {
    $a = 0;
    $b = 1;

    for ($i = 0; $i < $count; $i++) {
        echo $a . " ";

        $next = $a + $b;

        $a = $b;
        $b = $next;
    }
}

printFibonacciSeries(15);