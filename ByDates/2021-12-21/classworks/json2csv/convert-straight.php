<?php

$data = file_get_contents('https://randomuser.me/api');
$data = json_decode($data, TRUE);

$user = $data['results'][0];

// var_dump($data);

$handle = fopen('data/converted-straight.csv', 'w');

// https://www.php.net/manual/en/function.fputcsv.php

// var_dump($data, array_keys($data));


foreach ($user as $key => $value) {
    if (is_array($value)) {
        $user[$key] = '[' . serialize($value) . ']';
    }
}

fputcsv($handle, array_keys($user));
fputcsv($handle, $user, ",", "'");

fclose($handle);