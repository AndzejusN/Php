<?php

// d1f4206da365a7c8202b4f0537424cbe
if (php_sapi_name() == 'cli' && isset($argv[1])) {
    session_id($argv[1]);
}

session_start();

var_dump($_SESSION, session_name(), session_id());

