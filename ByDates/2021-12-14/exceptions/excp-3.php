<?php

function func1()
{
	throw new Exception;
}

function func2()
{
	throw new RuntimeException;
}

function getWorkerPriceRange($work, $price)
{
	if ($price > 1000) {
		throw new RangeException;
	}
}

class MyOwnException extends Exception
{
	
}

function myOwnException()
{
	throw new MyOwnException;
}

try {
	// func2();

	// getWorkerPriceRange('make shop', 10000);

	myOwnException();
} catch (RangeException $e) {
	// echo "catch RangeException: {$e->getMessage()}\n";
	echo "Price too big\n";
} catch (RuntimeException $e) {
	echo "catch RuntimeException: {$e->getMessage()}\n";
} catch (MyOwnException $e) {
	echo "my own exception\n";
} catch (Exception $e) {
	echo "catch Exception: {$e->getMessage()}\n";
}