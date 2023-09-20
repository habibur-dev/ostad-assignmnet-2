<?php
//Task 3: Break on Condition
echo "\n\n=============Task 3=============\n";

$limit = 10;
$a = 0;
$b = 1;

for ($i = 0; $i < $limit; $i++) {
    
    $next = $a + $b;
    
    if ($next > 100) {
        break; // Break out of the loop
    }

    echo $next . " ";

    $a = $b;
    $b = $next;
}