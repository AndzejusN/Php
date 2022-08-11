<?php

// $exception = new Exception;
// $exception = new Exception('Įvyko nežinoma klaida', 123);

// throw $exception;

function getUser($userId)
{
	return $userId < 3 ? TRUE : FALSE;
}

try {
	var_dump(getUser(1));
	var_dump(getUser(2));

	if (!getUser(3)) {
		throw new Exception('Vartotojas nerastas', 123);
	}

	echo "Hello 3\n";
	echo "Hello 4\n";
	echo "Hello 5\n";
	echo "Hello 6\n";
	echo "Hello 7\n";
} catch (Exception $excp) {
	// echo sprintf("Exception message: %s, code: %d\n", $excp->getMessage(), $excp->getCode());
	echo sprintf("Atsiprašome, įvyko klaida: \"%s\". Klaidos kodas: %d \n", $excp->getMessage(), $excp->getCode());
}

echo "Hello World";