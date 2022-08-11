<?php

namespace App\Traits;

trait Button {

	public function button(string $title, string $type = 'button') : string
	{
		return "<button type=\"{$type}\">{$title}</button>";
	}
	
}