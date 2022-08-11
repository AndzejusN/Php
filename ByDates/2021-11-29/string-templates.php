<?php

// Basic
$name = 'Kiril';

echo 'My name is ', $name, '<br>';

// Template
echo 'My name is $name <br>';
echo "My name is $name <br>";
echo "My name is getName() <br>";


$text = 'news';

echo "Where is my {$text}paper?<br>";

// https://www.php.net/manual/en/function.sprintf.php

echo sprintf('Where is my %spaper?<br>', $text);

$year = 2021;
// $year = 'a';
$month = 11;
$day = 1;

$isodate = sprintf("
	%d-%d-%d <br>\n
	%s-%s-%s <br>\n
	%04d-%02d-%02d <br>\n
	%04d-%02d-%02d <br>\n
	%04d-%02d-%02d <br>\n",

	$year, $month, $day, 
	$year, $month, $day, 
	$year, $month, $day, 
	$year, $name, $day, 
	'a', 12345, false
);

echo $isodate;

$apples = 5;

$fruits = 'apples';

echo 'Apples amount: ', $$fruits, "<br>\n";
echo "Apples amount: ${$fruits}";