<?php

function multiArrayToSingle($arr, $map = [], $parentKey = NULL){
    foreach ($arr as $key => $value) {
        if ($parentKey) {
            $key = $parentKey . '.' . $key;
        }

        if (is_array($value)) {
            $map = multiArrayToSingle($value, $map, $key);
        } else {
            $map[$key] = $value;
        }
    }

    return $map;
}

$data = file_get_contents('https://randomuser.me/api');
$data = json_decode($data, TRUE);
$data = multiArrayToSingle($data['results'][0]);

// var_dump($data);

$handle = fopen('data/converted.csv', 'w');

// https://www.php.net/manual/en/function.fputcsv.php

// var_dump($data, array_keys($data));

fputcsv($handle, array_keys($data));
fputcsv($handle, $data);

fclose($handle);