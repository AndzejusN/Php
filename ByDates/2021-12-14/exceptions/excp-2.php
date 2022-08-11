<?php

function func1()
{	
	throw new Exception("func1 Exception", 1);
	
	var_dump(__FUNCTION__);
}

function func2()
{
	// func1();

	try {
		func1();
	} catch (Exception $e) {
		var_dump($e->getMessage());

		// throw new Exception("Error Processing Request", 100);
	}

	var_dump(__FUNCTION__);

	throw new Exception("func2 Exception", 2);
}

function func3()
{
	func2();

	var_dump(__FUNCTION__);
}

try {
	func3();
} catch (Exception $e) {
	var_dump($e->getMessage());
	// var_dump($e->getTrace());
}