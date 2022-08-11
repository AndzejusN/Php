<?php

// https://www.php.net/manual/en/control-structures.for.php

for ($i=0; $i < 10; $i++) {
	echo $i, "\n";
}

echo "\n";

// https://www.php.net/manual/en/control-structures.continue.php
for ($i=0; $i < 10; $i++) {
	// continue;

	if ($i % 2 == 0) {
		echo "continue\n";

		continue;
	}
	
	echo $i, "\n";
}

var_dump($i);

echo "\n";

for ($i=10; $i > 0; $i--) { 
	echo $i, "\n";
}

echo "\n";

// https://www.php.net/manual/en/control-structures.break.php
for ($i=10; $i > 0; $i--) {
	echo $i, "\n";

	if ($i == 7) {
		echo "break\n";

		break;
	}
}