<?php

// https://www.php.net/manual/en/language.oop5.magic.php#object.invoke

class Garage
{
	private $garage = [];

	public function add(array $car)
	{
		$this->garage[] = $car;
	}

	function __invoke($x)
	{
		// return $this->garage[$x] ?? 'Car not found';
		return $this->garage[$x] ?? NULL;
	}
}


$garage = new Garage;

$garage->add([
	'brand' => 'BMW',
	'number' => 'LTU123'
]);

$garage->add([
	'brand' => 'Ford',
	'number' => 'LTU456'
]);

var_dump($garage(1));
var_dump($garage(5));