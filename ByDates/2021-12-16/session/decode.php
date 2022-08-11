<?php

session_id(uniqid());

session_start();

$data = 'username|s:5:"kiril";browser|s:117:"Mozilla/5.0 (Macintosh; Intel Mac OS X 10_15_7) AppleWebKit/605.1.15 (KHTML, like Gecko) Version/15.1 Safari/605.1.15";timestamp|i:1639677341;user_id|i:256;pets|a:3:{i:0;s:4:"cats";i:1;s:4:"dogs";i:2;s:5:"birds";}objects|a:2:{i:0;O:8:"stdClass":0:{}i:1;O:8:"stdClass":0:{}}';

session_decode($data);

var_dump($_SESSION);

// sleep(5);

// session_destroy();