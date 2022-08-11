<?php

// https://www.php.net/manual/en/language.operators.execution.php

$output = `ls -al`;

echo "<pre>{$output}</pre>";

$output = `pwd`;

echo $output;