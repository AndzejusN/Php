<?php

abstract class Person {
	public $name;

	function __construct($name = NULL)
	{
		$this->name = $name;
	}
	
	abstract public function greetings();
}

class Programmer extends Person {
	public function setName($name)
	{
		$this->name = $name;

		return $this;
	}

	public function one()
	{
		return $this;
	}

	public function two()
	{
		return $this;
	}

	public function greetings()
	{
		return "Hello world! I'm {$this->name} \n";
	}
}

class Student extends Person {
	public function greetings()
	{
		return "Hello, I'm {$this->name} \n";
	}
}

class Teacher extends Person {
	public function greetings()
	{
		return "Hello students, I'm {$this->name} \n";
	}
}


echo (new Programmer)->one()->setName('Kiril')->two()->greetings();

$student = new Student('Kiril');

echo $student->greetings();

$teacher = new Teacher;

$teacher->name = 'Kiril';

echo $teacher->greetings();