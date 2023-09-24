<?php

require __DIR__.'/vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'sandbox'; // use 'sandbox' for development in the test environment
$apiKey = 'b3aa70ace9f3c5e9458fac4ce13affa4854b810be6f500a866784d01fc74a7d4'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

// List of recipients and messages
$recipients = [
    '+254701694441' => 'Hello, John!',
    '+254701694442' => 'Hi, Jane!',
    // Add more recipients and messages here
];

// Get the SMS service
$sms = $AT->sms();

foreach ($recipients as $recipient => $message) {
    // Send SMS to each recipient
    $result = $sms->send([
        'to' => $recipient,
        'message' => $message,
    ]);

    // Check the result for success or failure
    if ($result['status'] === 'success') {
        echo "Message sent to $recipient: {$result['message']}\n";
    } else {
        echo "Failed to send message to $recipient: {$result['message']}\n";
    }
}
