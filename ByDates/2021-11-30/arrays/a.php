<?php

// https://www.php.net/manual/en/language.types.array.php

$fruits = ['apples', 'limes', 'oranges', 'bannana'];

var_dump($fruits);

var_dump($fruits[1]);
var_dump($fruits[3]);

// first array element
var_dump($fruits[0]);

// last array element
var_dump($fruits[count($fruits) - 1]);

// https://www.php.net/manual/en/ref.array.php

array_push($fruits, 'cherry');

var_dump($fruits);

$fruits[] = 'Apricots'; // array push

var_dump($fruits);

array_unshift($fruits, 'raspberry');

var_dump($fruits);

var_dump(array_keys($fruits));

var_dump($fruits);

var_dump(array_pop($fruits));

var_dump($fruits);