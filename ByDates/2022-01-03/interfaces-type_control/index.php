<?php

// https://www.php.net/manual/en/language.oop5.interfaces.php
// https://www.php.net/manual/en/language.types.declarations.php
// 
require_once 'Classes/Garage.php';
require_once 'Classes/Cars/Bmw.php';
require_once 'Classes/Cars/Ford.php';

$garage = new Garage;

$car = new Bmw;

// var_dump($car->getId());
// var_dump($car->setModel(123, 456));
// 
$car->setNumber('LTU123');
// $car->setNumber([123]);

$garage->add($car);

$car = new Ford;
$car->setNumber('LTU456');

$garage->add($car);
// $garage->add();

// $garage->add(123);

var_dump($garage);


foreach ($garage->getAll() as $car) {
	var_dump($car->getNumber());
}


var_dump($garage->getCar(5));
var_dump($garage->getCar(1));