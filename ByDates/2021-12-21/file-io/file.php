<?php

// https://www.php.net/manual/en/function.fopen.php

$filename = 'data/users.json';

$handle = fopen('data/users.json', 'r');

$contents = fread($handle, filesize($filename));

fclose($handle);

// var_dump($handle, $contents, filesize($filename));

$handle = fopen('https://15min.lt', 'r');

if (FALSE === $handle) {
    exit('Failed to open stream to URL');
}

$contents = '';
$i = 0;

while (!feof($handle)) {
	$i++;

    $contents .= fread($handle, 1000);
}

fclose($handle);

var_dump($i);

$handle = fopen('data/index.html', 'w');

if (fwrite($handle, $contents) === FALSE) {
    echo "Cannot write to file ($filename)";
    exit;
}

fclose($handle);