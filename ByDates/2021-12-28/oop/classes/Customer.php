<?php

require_once 'User.php';

class Customer extends User
{

	function __construct($firstName = 'NO_CUSTOMER_NAME', $lastName = 'NO_CUSTOMER_SURNAME')
	{
		parent::__construct($firstName, $lastName);

		$this->setAge(60);
	}

	public function getCustomerFullName()
	{
		$this->firstName = 'Customer: ' . $this->firstName;
		$this->lastName = 'Customer: ' . $this->lastName;

		return "{$this->firstName} {$this->lastName}";
	}	
}