<?php

// https://www.php.net/manual/en/function.glob.php

$files = glob('*');

var_dump($files);

foreach ($files as $file) {
    // var_dump(is_dir($file));

    if (is_dir($file)) {
        var_dump(glob($file . '/*'));
        
        var_dump(glob($file . '/*.html'));
        var_dump(glob($file . '/*.json'));
        var_dump(glob($file . '/index*'));
    }
}