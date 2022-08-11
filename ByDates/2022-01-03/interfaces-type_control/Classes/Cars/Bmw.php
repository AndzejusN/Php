<?php

require_once 'Interfaces/CarTemplate.php';

class Bmw implements CarTemplate
{
	private $number;

	public function getId()
	{
		return uniqid();
	}

	public function setNumber($number)
	{
		$this->number = $number;
	}

	public function getNumber() : string
	{
		return $this->number;
	}
}
