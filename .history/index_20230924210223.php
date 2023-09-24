<?php

require __DIR__.'/vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'sandbox'; // use 'sandbox' for development in the test environment
$apiKey = 'b3aa70ace9f3c5e9458fac4ce13affa4854b810be6f500a866784d01fc74a7d4'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

// List of recipients
$recipients = [
    '+254701694441', // Recipient 1
    '+254701694442', // Recipient 2
    // Add more recipient phone numbers here
];

// Message to send to all recipients
$message = 'Hello World!';

// Get the SMS service
$sms = $AT->sms();

// Send the same message to all recipients
$result = $sms->send([
    'to' => $recipients,
    'message' => $message,
]);

// Check the result for success or failure
if ($result['status'] === 'success') {
    echo "Message sent to all recipients: {$result['message']}\n";
} else {
    echo "Failed to send message to all recipients: {$result['message']}\n";
}
