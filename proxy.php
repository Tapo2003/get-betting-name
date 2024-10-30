<?php
// Extract POST data
extract($_POST);

$proxy = '31.40.248.2:8080'; // Targeted proxy IP
$url = $searchbet; // Target search URL
echo "Target URL: " . htmlspecialchars($url); // Debugging output

// Initialize cURL session
$ch = curl_init($url);
curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true); // Follow redirects
curl_setopt($ch, CURLOPT_TIMEOUT, 10); // Set a timeout

// Optional: Disable SSL verification (not recommended for production)
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);

// Execute the cURL request
$response = curl_exec($ch);

// Check for cURL errors
if (curl_errno($ch)) {
    echo 'cURL Error: ' . curl_error($ch);
} else {
    // Get HTTP response code
    $http_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);
    echo "HTTP Response Code: " . $http_code . "<br>"; // Print HTTP response code

    if ($response === false) {
        echo "No response received.";
    } else {
        echo "Response received: <br>";
        echo htmlspecialchars($response); // Output the response
    }
}

// Close cURL session
curl_close($ch);
?>
