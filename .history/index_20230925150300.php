<?php

require __DIR__.'/vendor/autoload.php';
use AfricasTalking\SDK\AfricasTalking;

$username = 'sandbox'; // use 'sandbox' for development in the test environment
$apiKey = 'b48d3fcc54ff33303301bc602f64d3cde00f85c988e9bbd8fc5e2346ad7d68c0'; // use your sandbox app API key for development in the test environment
$AT = new AfricasTalking($username, $apiKey);

$recipients = [
  '+254701694441',
  '+256701062172',
  '+254798391255',
];
// Get one of the services
$sms = $AT->sms();

// Use the service
$result = $sms->send([
    'to' => $recipients,
    'message' => 'Hello World! OCTAGONAFRICA',
]);
if ($result['status'] === 'success') {
    echo "Message sent to all recipients: {$result['message']}\n";
    echo json_encode($result);
} else {
    echo "Message sent to all recipients:\n";
    echo json_encode($result);
}
