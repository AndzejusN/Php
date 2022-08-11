<?php

// https://www.php.net/manual/en/function.file-get-contents.php

$data = file_get_contents('data/users.json');

// var_dump($data);

// var_dump(file_get_contents('../../2021-12-16/session/cli.php'));

// var_dump(file_get_contents('/etc/locale.gen'));

$data = file_get_contents('/etc/locale.gen');
$data = explode("\n", $data);
$data = array_filter($data, function($line) {
	return strpos($line , '#') !== 0 && strlen($line) > 0;
});

var_dump($data);

// https://www.php.net/manual/en/function.file-put-contents.php

// file_put_contents('data/locale.gen', implode("\n", $data));

$places = file_get_contents('https://api.meteo.lt/v1/places');
$places = json_decode($places, TRUE);

file_put_contents('data/places.json', json_encode($places, JSON_PRETTY_PRINT));

file_put_contents('data/index.html', file_get_contents('https://15min.lt'));

// https://www.php.net/manual/en/function.file.php
$data = file('data/locale.gen');
$data = array_map('trim', $data);

var_dump($data);

file_put_contents('data/locale.gen', implode("\n", $data) . PHP_EOL, FILE_APPEND);