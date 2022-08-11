<?php

$t = 'test';

function square($num)
{
	$squareResult = $num * $num;

	return $squareResult;
}

echo square(5) + square(2), "\n";

function hello($value = 'World')
{
	return "Hello {$value}!\n";
}

echo hello();
echo hello('Kiril');
echo hello(1);

// https://www.php.net/manual/en/functions.arrow.php

$y = 1;
 
$fn1 = fn($x) => $x + $y;

// equivalent to using $y by value:
$fn2 = function ($x) use ($y) {
    return $x + $y;
};