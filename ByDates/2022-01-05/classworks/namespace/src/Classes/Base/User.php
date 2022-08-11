<?php

namespace App\Classes\Base;

class User {

	private $name;
	private $age;

	function __construct($name, $age)
	{
		// $this->name = $name;
		// $this->age  = $age;

		$this->setName($name);
		$this->setAge($age);
	}

	public function setName($name)
	{
		$this->name = ucfirst($name);
	}

	public function setAge($age)
	{
		$this->age = $age;
	}

	public function getName()
	{
		return $this->name;
	}

	public function getAge()
	{
		return $this->age;
	}
}