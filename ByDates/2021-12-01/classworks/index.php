<?php

// Parašykite kodą kuris skaičiuoja sekundžių skaičių per dieną/parą (24h).

echo 60 * 60 * 24, "<br>\n"; // seconds * minutes * hours

// Sukurkite kintamąjį $hl ir priskirkite jam reikšmę „hello“. Naudodami atskirus šios eilutės simbolius, ekrane atspausdinkite „h“, „e“, „o“.

$hl = 'hello';

echo "\"{$hl[0]}\",\"{$hl[1]}\",\"{$hl[4]}\"<br>\n";

// Sukurkite masyvą $arr iš reikšmių: '!', 'Hello', 'world'. Naudodami sukurtą masyvą priskirti reikšme 'Hello, world!' naujam kintamajam ir atspausdinkite jį ekrane.

$arr = ['!', 'Hello, ', 'world'];
$hello = $arr[1] . ', ' . $arr[2] . $arr[0] . "<br>\n";

echo $hello;

// "Nupieškite" tokio tipo piramidę ekrane:
// 1
// 22
// 333
// 4444
// 55555
// 666666
// 7777777
// 88888888
// 999999999

for ($i=1; $i <= 9; $i++) { 
	for ($j=0; $j < $i; $j++) { 
		echo $i;
	}

	echo "<br>\n";
}

$i = 1;

while ($i <= 9) {
    echo str_repeat($i, $i), "<br>\n";

    $i++;
}
