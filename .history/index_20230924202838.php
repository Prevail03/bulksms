<?php

require __DIR__.'/vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'sandbox'; // use 'sandbox' for development in the test environment
$apiKey = 'b3aa70ace9f3c5e9458fac4ce13affa4854b810be6f500a866784d01fc74a7d4'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms = $AT->sms();

// Use the service
$result = $sms->send([
    'to' => '+254701694441',
    'message' => 'Hello World!',
]);

print_r($result);
