<?php

// https://www.php.net/manual/en/language.oop5.static.php

class MyClass
{
	private static $name = 'K';
	public static $city = 'Klaipeda';

	public static function getName()
	{
		return self::$name;
	}

	// ==================== //
	
	private $lastName = 'Ch';

	public function getLastName()
	{
		return $this->lastName;
	}

	public function getFirtName()
	{
		return MyClass::$name;
	}
}

var_dump(MyClass::$city);
var_dump(MyClass::getName());
// var_dump(MyClass::getLastName());

$obj = new MyClass;

var_dump($obj->getLastName());
// var_dump($obj->getName());
var_dump($obj->getFirtName());