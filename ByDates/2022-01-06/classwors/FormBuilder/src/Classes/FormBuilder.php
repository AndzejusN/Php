<?php

namespace App\Classes;

// // v1
use App\Traits;

// // v2
// use App\Traits\{Button, Input, Label};

class FormBuilder
{
	// v1
	use Traits\Button;
	use Traits\Input;
	use Traits\Label;
	
	// // v2
	// use Button, Input, Label;

	public function open(string $action, string $method = 'GET') : string
	{
		return "<form action=\"{$action}\" method=\"{$method}\">";
	}

	public function close() : string
	{
		return '</form>';
	}
}