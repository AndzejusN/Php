<?php

if (file_exists('vendor/autoload.php') == FALSE) {
	exit;
}

require_once 'vendor/autoload.php';

use App\Classes\Workable\{Driver, Pilot, Pilot as SuperJetPilot};

// $student = new Student('petras', 23, 200, 2);
$student = new App\Classes\Student('petras', 23, 200, 2);
$driver  = new Driver('rokas', 37, 200, 2, 'A');

var_dump($student);
var_dump($driver);

use App\Classes\Student;

$student2 = new Student('petras', 23);

$student2->setScholarship(200);
$student2->setCourse(200);

var_dump($student2);

// // new Driver('rokas', 37, 200, 2, 'CE');

$pilot = new SuperJetPilot('tomas', 25, 200);

var_dump($driver->countSalary(), $pilot->countSalary());

$pilot = new Pilot('tomas', 25, 200);
