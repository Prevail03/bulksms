<?php

// Define your API endpoint and parameters
$apiEndpoint = 'https://api.sandbox.africastalking.com/version1/messaging';
$apiKey = '661d0a784b877afd9f882e7ffedc792eefbfc1522be32e5e6fb7a13f093e1427';
$username = 'octagon';
$to = '+254701694441,+254796469879';
$message = 'Hello World!';
$from = 'OCTAGON';

// Create an array of POST data
$postData = [
    'username' => $username,
    'to' => $to,
    'message' => $message,
    'from' => $from,
];

// Initialize cURL session
$ch = curl_init($apiEndpoint);

// Set cURL options
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postData));
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'Accept: application/json',
    'Content-Type: application/x-www-form-urlencoded',
    'apiKey: '.$apiKey,
]);

// Execute cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL error: '.curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Display the response from the API
echo $response;
