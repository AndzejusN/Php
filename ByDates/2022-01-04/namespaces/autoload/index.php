<?php

require 'vendor/autoload.php';

$weddingCustomer = new App\Projects\Wedding\Customer;

echo $weddingCustomer->getFlowers() . "\n";
echo $weddingCustomer->getCakes() . "\n";
echo $weddingCustomer->getBalloons() . "\n";
echo $weddingCustomer->getPlayList() . "\n";
echo $weddingCustomer->getTaxi() . "\n";