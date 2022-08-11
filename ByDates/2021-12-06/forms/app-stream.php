<?php

// https://www.php.net/manual/en/wrappers.php.php

$content = trim(file_get_contents('php://input'));

$decoded = json_decode($content, true);

var_dump($decoded);
