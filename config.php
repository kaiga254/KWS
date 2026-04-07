<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'register');
define('DB_PORT', 3308);
 
/* Attempt to connect to MySQL database */
try {
    $conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
} catch (Exception $e) {
    $conn = null;
}
 
// Check connection
if ($conn === false || $conn === null) {
    // Optionally log or handle gracefully without throwing a 500 error for all pages
    $conn = null;
}
// Secret key for encrypting Google Sheets payloads (optional)
$secret = 'k9X@2pL!7qR#8mZ$4vT^1bN&6cD*9sW';

/* Google Sheets integration (optional) */
define('GOOGLE_SHEETS_WEBHOOK_URL', 'https://script.google.com/macros/s/AKfycbzx5VeNB2QZ9-tUHkrniTzeD9lyVz2teuDzhORuYANa_I6rjB1G76EYFo2f6hLPFdHq2Q/exec');
define('GOOGLE_SHEETS_SHARED_SECRET', $secret);
define('GOOGLE_SHEETS_TIMEOUT', 10);