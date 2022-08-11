<?php

namespace App\Modules;

class Index {

	// public function _perform()
	// {
	// 	$questions = file_get_contents(ROOT_PATH . '/data/quiz.json');
	// 	$questions = json_decode($questions, TRUE);

	// 	return view('index', ['questions' => $questions]);
	// }

	public function perform()
	{
		return view('index');
	}
	
}

