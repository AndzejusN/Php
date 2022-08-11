<?php

// https://www.php.net/manual/en/language.namespaces.php

namespace BusinessProject;

class BusinessProjectClass {}

function User() {
	return 'Tomas';
}

namespace WeddingProject;

function User() {
	return 'Andrius';
}

namespace EducationProject;

function User() {
	return 'Kiril';
}

var_dump(\BusinessProject\User());
var_dump(\WeddingProject\User());
var_dump(User());

var_dump(new \BusinessProject\BusinessProjectClass);