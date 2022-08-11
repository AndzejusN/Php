<?php

// https://www.php.net/manual/en/language.operators.string.php

$a = 'Hello';
$b = 'World!';

$br = '<br>';

$line = $a . ' ' . $b;

echo $line, '<br>';
echo $line, $br;

echo $line . '<br>';
echo $line . $br;

$otherLine = $a;
$otherLine .= ' ';
$otherLine .= $b;
$otherLine .= $br;

echo $otherLine;