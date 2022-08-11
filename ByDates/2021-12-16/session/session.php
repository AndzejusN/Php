<?php
// session_save_path('/home/code-academy/PHP/2021-12-16/session/session-from-run-time');

session_start();

if (!isset($_SESSION['username']) || isset($_GET['force'])) {
	$_SESSION['username']  = $_GET['username'] ?? 'unknown'; 
	$_SESSION['browser']   = $_SERVER['HTTP_USER_AGENT'] ?? 'unknown';

	$_SESSION['timestamp'] = time(); 
	$_SESSION['user_id']   = 256;

	$_SESSION['pets']    = ['cats', 'dogs', 'birds'];
	$_SESSION['objects'] = [new stdClass, new stdClass];
}

var_dump($_SESSION, session_name(), session_id());

// $_SESSION['!'] = '!';