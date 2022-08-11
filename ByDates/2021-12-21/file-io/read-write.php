<?php

define('CHUNK_SIZE', 1000);

$localFile = 'data/index.html';

$localHandle = fopen($localFile, 'w');
$remoteHandle = fopen('https://15min.lt', 'r');

if (FALSE === $remoteHandle) {
    exit('Failed to open stream to URL');
}

while (!feof($remoteHandle)) {
    $contents = fread($remoteHandle, CHUNK_SIZE);

    if (fwrite($localHandle, $contents, CHUNK_SIZE) === FALSE) {
        echo "Cannot write to file ({$localFile})";
        exit;
    }
}

fclose($localHandle);
fclose($remoteHandle);