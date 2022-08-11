<?php

require_once 'Interfaces/CarTemplate.php';

class Garage
{
	private $garage = [];

	public function add(CarTemplate $car)
	{
		$this->garage[] = $car;
	}

	public function count()
	{
		return count($this->garage);
	}

	public function getAll()
	{
		return $this->garage;
	}

	public function getCar(int $id) : ?CarTemplate
	{
		return array_key_exists($id, $this->garage) ? $this->garage[$id] : NULL;
	}
}