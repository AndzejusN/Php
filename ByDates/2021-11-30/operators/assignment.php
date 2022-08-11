<?php

// https://www.php.net/manual/en/language.operators.assignment.php

$fruits = 14;

echo $fruits, '<br>';

$a = $b = $c = 3;

echo $a, $b, $c, '<br>';

$a = ($b = 4) + 5;

echo $a, $b, '<br>';

$a = $b = 4 + 5;

echo $a, $b, '<br>';

// +=
// -=
// /=
// .=
// %=
// &=
// |=
// ^=
// <=
// >=

$a = 3;
$b = &$a;

var_dump($a);
var_dump($b);

$a = 4;

var_dump($a);
var_dump($b);