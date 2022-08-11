<?php

ob_start();

echo "Hello 1\n";
sleep(1);
echo "Hello 2\n";
sleep(1);
echo "Hello 3\n";
sleep(1);
echo "Hello 4\n";
sleep(1);
echo "Hello 5\n";

$out1 = ob_get_contents();

sleep(1);
echo "Hello 6\n";
sleep(1);
echo "Hello 7\n";

$out2 = ob_get_contents();

ob_end_clean();

sleep(1);
echo "Hello 8\n";
sleep(1);

echo $out2;
echo $out1;