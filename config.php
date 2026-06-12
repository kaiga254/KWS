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
    // Try connecting with custom port first (e.g. XAMPP custom port 3308)
    $conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME, DB_PORT);
    
    // If that fails, attempt connection using standard system port/socket (e.g. 3306 on cPanel)
    if ($conn === false || $conn === null) {
        $conn = @mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    }
} catch (Exception $e) {
    $conn = null;
}
 
// Check connection
if ($conn === false || $conn === null) {
    // Optionally log or handle gracefully without throwing a 500 error for all pages
    $conn = null;
}

/* Mail configuration for Contact/Registration forms */
define('MAIL_TO_EMAIL', 'emmanuelkaiga32@gmail.com');
define('MAIL_FROM_EMAIL', 'customersupport@kwsf.com');
define('MAIL_FROM_NAME', 'Kids With Solutions Foundation');

/* SMTP Configuration (Optional but recommended for cPanel/production hosting) */
define('SMTP_HOST', 'mail.kwsf.info');      // e.g. 'mail.kwsf.com' or 'smtp.gmail.com'
define('SMTP_PORT', 465);     // 465 (SSL) or 587 (TLS)
define('SMTP_USERNAME', 'customersupport@kwsf.com');  // e.g. 'customersupport@kwsf.com'
define('SMTP_PASSWORD', '%3Vh!0XJ[_iV6+22');  // your email account password
define('SMTP_SECURE', 'ssl'); // 'ssl' or 'tls' or ''