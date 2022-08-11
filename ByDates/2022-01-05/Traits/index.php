<?php

if (file_exists('vendor/autoload.php') == FALSE) {
	exit;
}

require_once 'vendor/autoload.php';

use App\Classes\Student;
use App\Classes\Workable\{Driver, Pilot};

$student = new App\Classes\Student('petras', 23, 200, 2);
$driver  = new Driver('rokas', 37, 200, 2, 'A');
$pilot   = new Pilot('tomas', 25, 200);

var_dump($student->greetings());
var_dump($student->ask());
var_dump($driver->greetings());
var_dump($driver->ask());
var_dump($pilot->greetings());
var_dump($pilot->ask());