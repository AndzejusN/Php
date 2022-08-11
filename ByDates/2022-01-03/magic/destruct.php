<?php

class User {
	function __destruct()
	{
		var_dump('__destruct');
	}
}

echo "BEFORE \"User\" \n";

// new User;

$u = new User;

echo "AFTER \"User\" \n";

unset($u);

// 
$a = 2 + 2;
// 
echo "a = {$a} \n";