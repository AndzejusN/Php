<?php

require_once 'Interfaces/CarTemplate.php';

class Ford implements CarTemplate
{
	private $number;

	public function getId()
	{
		return uniqid();
	}

	public function setNumber(string $number)
	{
		$this->number = $number;
	}

	public function getNumber() : string
	{
		return $this->number;
	}
}
