<?php

// https://www.php.net/manual/en/control-structures.foreach.php

$fruits = ['apples', 'limes', 'oranges', 'bannana'];

// foreach (array as $value) statement 
// foreach (array as $key => $value) statement

foreach ($fruits as $fruit) {
	echo $fruit, "\n";
}

foreach ($fruits as $fi => $fruit) {
	echo $fi, ' => ', $fruit, "\n";
}

foreach ($fruits as $fruit) {
	$fruit = 'tomato';

	echo $fruit, "\n";
}

var_dump($fruits);

foreach ($fruits as $key => $fruit) {
	$fruits[$key] = 'tomato';

	echo $fruit, "\n";
}

var_dump($fruits);

$fruits = ['apples', 'limes', 'oranges', 'bannana'];

foreach ($fruits as & $fruit) {
	$fruit = 'tomato';

	echo $fruit, "\n";
}

var_dump($fruits);