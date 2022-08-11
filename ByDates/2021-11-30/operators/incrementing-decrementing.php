<?php

// https://www.php.net/manual/en/language.operators.increment.php

$a = $b = $c = $d = 2; 

echo ++$a, '<br>'; // Pre-increment
echo $b++, ' ',  $b, '<br>'; // Post-increment
echo --$c, '<br>'; // Pre-decrement
echo $d--, ' ', $d, '<br>'; // Post-decrement

$a += 5;
$a += 5;
$a += 5;
$a += 5;
$a += 5;

echo $a;