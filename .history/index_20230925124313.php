<?php
require __DIR__ 'vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'sandbox'; // use 'sandbox' for development in the test environment
$apiKey = '5de9213740c67da1b0439f4a67a9299710d41f7d5f648c9abf2dd5589433b2fa'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms = $AT->sms();

// Use the service
$result = $sms->send([
    'to' => '+254701694441',
    'message' => 'Hello World! OCTAGONAFRICA',
]);

print_r($result);
