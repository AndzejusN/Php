<?php

namespace App\Traits;

trait Label {

	public function label(string $for, string $text) : string
	{
		return "<label for=\"{$for}\">{$text}</label>";
	}
	
}