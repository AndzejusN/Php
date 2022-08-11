<?php

// https://www.php.net/manual/en/language.types.php
//  
// // https://www.php.net/manual/en/language.types.type-juggling.php

$foo = "1";
$foo *= 2; 

var_dump($foo);

$foo = $foo * 1.3;

var_dump($foo);

// $foo = 5 * "10 Little Piggies";

// var_dump($foo);

$foo = 10;
$bar = (boolean) $foo;

var_dump($bar);

$foo = -10;
$bar = (boolean) $foo;

var_dump($bar);

$bar = (boolean) 0;

var_dump($bar);

$bar = (boolean) -1;

var_dump($bar);

var_dump((int) '101');

var_dump((object) []);