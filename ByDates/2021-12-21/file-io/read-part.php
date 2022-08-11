<?php

$handle = fopen('https://15min.lt', 'r');

if (FALSE === $handle) {
    exit('Failed to open stream to URL');
}

$contents = '';

$i = 0;

while (!feof($handle)) {
	$i++;

    $chunk = fread($handle, 250);

    $contents .= $chunk;

    if (strpos($contents, "ga('create', 'UA-5421911-1', 'auto')") !== FALSE) {
        var_dump($chunk);

    	break;
    }
}

fclose($handle);

var_dump($i);

file_put_contents('data/index-part.html', $contents);