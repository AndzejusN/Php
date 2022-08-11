<?php

require_once './classes/User.php';
require_once './classes/Customer.php';

$instance = new User;

// // var_dump($instance);

// unset($instance);

// $className = 'User';
// $instanceFromString = new $className;

// // var_dump($instanceFromString);

$user = new User('K', 'Ch');

var_dump($instance->getFullName());
var_dump($user->getFullName());

$user->setLastName('Ch v2');

var_dump($user->getFullName());
var_dump($user->getAge());

// $user->firstName = 'trololo';
// $user->lastName = 'trololo';

// var_dump($user->firstName);
// var_dump($user->lastName);

var_dump(User::CONSTANT);
var_dump(User::CONSTANT2);

$user->useConsts();
// $user->setAge(25);

$customer = new Customer('abc', 'def');

var_dump($customer->getCustomerFullName());
var_dump($customer->getAge());

$customer = new Customer;

var_dump($customer->getCustomerFullName());
var_dump($customer->getAge());

// $customer->setAge(25);