<?php

class User
{
	protected $firstName;
	protected $lastName;

	private $age = 30;

	public $arr = ['one', 2, 'three' => 3];

	const CONSTANT = 'some-value';
	const CONSTANT2 = 2 + 2;
	const CONSTANT3 = ['one', 2, 'three' => 3];

	function __construct($firstName = 'NO_NAME', $lastName = 'NO_SURNAME')
	{
		// var_dump('__construct', $firstName, $lastName);
		$this->firstName = $firstName;
		$this->lastName  = $lastName;
	}

	function __destruct()
	{
		// var_dump('__destruct');
	}

	public function setFirstName($name)
	{
		$this->firstName = $name;
	}

	public function setLastName($name)
	{
		$this->lastName = $name;
	}

	public function getFullName()
	{
		return "{$this->firstName} {$this->lastName}";
	}

	public function useConsts()
	{
		var_dump(User::CONSTANT);
		var_dump(User::CONSTANT2);
		var_dump(User::CONSTANT3);

		var_dump(self::CONSTANT);
		var_dump(self::CONSTANT2);
		var_dump(self::CONSTANT3);
	}

	public function getAge()
	{
		return $this->age;
	}

	protected function setAge($age)
	{
		$this->age = 60;
	}
}