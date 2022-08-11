<?php

require_once 'Person.php';

class Teacher extends Person
{
    public function __construct($name)
    {
        parent::__construct($name);
    }

    public function greetings()
    {
        return "Hello students, I'm " . $this->name;
    }
}