<?php
require 'api_ip.php';
$id = $_GET["nama"];
$url = $link . 'api/JobPosting?id=' . $id;

$ch = curl_init();

// Set cURL options
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_HTTPGET, 1);
// Correct option for specifying GET method
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Execute cURL session
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'Curl error: ' . curl_error($ch);
}

// Close cURL session
curl_close($ch);

// Output the response

$data = json_decode($response);
echo $response;


?>