<?php

// https://www.php.net/manual/en/language.oop5.magic.php
// https://www.php.net/manual/en/language.oop5.overloading.php

class Overloading {
	// public $a;
	// public $b = 'public b';
	// public $c = 'public c';
	
	function __set($name, $value)
	{
		echo "__set, name: {$name}, value: {$value} \n";

		// throw new RuntimeException('property not alllowed');
	}

	function __get($name)
	{
		// echo "__get, property - {$name} \n";

		// return '__get';

		switch ($name) {
			case 'b':
				return 1 . "\n";
				break;

			case 'c':
				return 2 . "\n";
				break;

			case 'd':
				return $this->handleD();
				break;
			
			default:
				return -1 . "\n";
				break;
		}
	}

	function __call($name, $arguments)
	{
		echo "__call, name: {$name}, arguments: " . json_encode($arguments) . "\n";
	}

	private function handleD()
	{
		return 'd';
	}

	public static function __callStatic($name, $arguments)
    {
        echo "__callStatic, name: {$name}, arguments: " . json_encode($arguments) . "\n";
    }
}

$obj = new Overloading;

$obj->a = 1;

var_dump($obj);

echo $obj->b;
echo $obj->c;

var_dump($obj->b);
var_dump($obj->c);
var_dump($obj->d);
var_dump($obj->e);

$obj->methodA();
$obj->methodB(123);
$obj->methodC([123]);
$obj->methodC(['a' => 1, 'b' => 'C']);

Overloading::runTest('in static context');