<?php

require __DIR__.'/vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'sandbox'; // use 'sandbox' for development in the test environment
$apiKey = 'b3aa70ace9f3c5e9458fac4ce13affa4854b810be6f500a866784d01fc74a7d4'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

// List of recipients
$recipients = [
    '+254701694441',
    '+254796469879',
];

// Get the SMS service
$sms = $AT->sms();

// Send the same message to all recipients
$result = $sms->send([
    'to' => $recipients,
    'message' => 'Heloo World!',
]);

// Check the result for success or failure
if ($result['status'] === 'success') {
    echo "Message sent to all recipients: \n";
    echo json_encode($result);
} else {
    echo "Failed to send message to all recipients\n";
    echo json_encode($result);
}
