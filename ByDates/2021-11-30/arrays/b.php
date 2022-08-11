<?php

// https://www.php.net/manual/en/language.types.array.php

// index array
$fruits = ['apples', 'limes', 'oranges', 'bannana'];

$fruits[16] = 'cherry';

// var_dump($fruits, count($fruits), $fruits[0]);

// associative array
$user = [
	'name' => 'K',
	'surname' => 'C',
	'age' => 31
];

// var_dump($user, count($user), $user['name'], $user['surname']);

// var_dump(array_keys($fruits), array_keys($user));

// var_dump(json_encode($user));

// $all = array_merge($fruits, $user);

// var_dump($all);
// var_dump($all[2]);
// var_dump($all['name']);

$all = compact('fruits', 'user');

var_dump($all);
var_dump($all['fruits'][3]);
var_dump($all['user']['age']);

$temp = 'age';

var_dump($all['user'][$temp]);

foreach ($all as $mainKey => $mainValue) {
	var_dump($mainKey, $mainValue);
	echo "---\n";
}

for ($i=0; $i < count($all['fruits']) - 1; $i++) { 
	var_dump($i, $all['fruits'][$i]);
	echo "---\n";
}