<?php
// OK cool - then let's create a new cURL resource handle
$ch = curl_init();

// Set URL to download
curl_setopt($ch, CURLOPT_URL, "http://washingtonpost.com");

// User agent
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Android; Mobile; rv:13.0) Gecko/13.0 Firefox/13.0");

// Include header in result? (0 = yes, 1 = no)
curl_setopt($ch, CURLOPT_HEADER, 0);

// Should cURL return or print out the data? (true = return, false = print)
curl_setopt($ch, CURLOPT_RETURNTRANSFER, false);

// Timeout in seconds
curl_setopt($ch, CURLOPT_TIMEOUT, 10);

// Download the given URL, and return output
$output = curl_exec($ch);

echo $output;

// Close the cURL resource, and free system resources
curl_close($ch);

?>