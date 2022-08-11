<?php

// https://www.php.net/manual/en/language.constants.php

define('PI', 3.14);

echo PI, "\n";

$pi = PI;
$pi *= 2;

var_dump(PI, $pi);

// define('PI', 5.15);

// echo PI, "\n";

const VE = 123;

var_dump(VE);

// const VE = 123;

// https://www.php.net/manual/en/reserved.constants.php
var_dump(PHP_VERSION);
var_dump(PHP_OS);

// https://www.php.net/manual/en/language.constants.magic.php
var_dump(__LINE__);
var_dump(__FILE__);
var_dump(__FUNCTION__);

function myCustomFunctionName()
{
	var_dump(__FUNCTION__);

	return 'bar';
}

myCustomFunctionName();
