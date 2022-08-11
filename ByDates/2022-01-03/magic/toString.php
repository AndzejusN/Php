<?php

// https://www.php.net/manual/en/language.oop5.magic.php#object.tostring

class Garage
{
	private $garage = [];

	public function add(array $car)
	{
		$this->garage[] = $car;
	}

	function __toString()
	{
		// return 'hell world';
		return json_encode($this->garage);
		// return serialize($this->garage);
		// return implode(', ', array_column($this->garage, 'brand'));
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

echo $garage;

file_put_contents('garage.json', $garage);