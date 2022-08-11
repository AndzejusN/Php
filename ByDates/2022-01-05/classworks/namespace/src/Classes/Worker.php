<?php

namespace App\Classes;

use App\Classes\Base\User;

abstract class Worker extends User {
	protected $salary;

	function __construct($name, $age, $salary = NULL)
	{
		// parent::__construct($name, $age);
		
		$this->setName($name);
		$this->setAge($age);

		if ($salary) {
			$this->setSalary($salary);
		}
	}

	public function setSalary($salary)
	{
		$this->salary = $salary;
	}

	public function getSalary()
	{
		return $this->salary;
	}

	public abstract function countSalary();
}