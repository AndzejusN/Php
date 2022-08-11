<?php

// // create a new cURL resource
// $ch = curl_init();

// // set URL and other appropriate options
// curl_setopt($ch, CURLOPT_URL, 'http://15min.lt');
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
// curl_setopt($ch, CURLOPT_HEADER, TRUE);

// // grab URL and pass it to the browser
// $body = curl_exec($ch);

// // close cURL resource, and free up system resources
// curl_close($ch);

// // var_dump($body);

require_once 'functions.php';

// var_dump(getContent('http://15min.lt'));
var_dump(getContent('http://example.com'));