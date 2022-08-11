<?php

// https://www.php.net/manual/en/language.oop5.abstract.php

abstract class AbstractClass
{
	abstract protected function getClassName();
	// abstract protected function getValue();

	// Common method
    public function greetings() {
        return 'Hello World';
    }

    public function getAutomaticClassName()
    {
    	return __CLASS__;
    }
}

class FirstClass extends AbstractClass
{
	public function getClassName()
	{
		return 'FirstClass';
	}

	// public function getAutomaticClassName()
 //    {
 //    	return __CLASS__;
 //    }
}

class SecondClass extends AbstractClass
{
	public function getClassName()
	{
		return 'SecondClass';
	}
}

$obj = new FirstClass;

var_dump($obj->getClassName());
var_dump($obj->greetings());
var_dump($obj->getAutomaticClassName());

$obj2 = new SecondClass;

var_dump($obj2->getClassName());
var_dump($obj2->greetings());
var_dump($obj2->getAutomaticClassName());