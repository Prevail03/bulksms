<?php

use AfricasTalking\SDK\AfricasTalking;

$username = 'YOUR_USERNAME'; // use 'sandbox' for development in the test environment
$apiKey = 'YOUR_API_KEY'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

// Get one of the services
$sms = $AT->sms();

// Use the service
$result = $sms->send([
    'to' => '+254701694441',
    'message' => 'Hello World! OCTAGONAFRICA',
]);

print_r($result);
