<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', 'wqmsreal');
define('DB_NAME', 'register');
 
/* Attempt to connect to MySQL database */
try {
    $conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
} catch (Exception $e) {
    $conn = null;
}
 
// Check connection
if ($conn === false || $conn === null) {
    // Optionally log or handle gracefully without throwing a 500 error for all pages
    $conn = null;
}