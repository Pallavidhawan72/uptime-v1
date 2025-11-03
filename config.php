<?php
define('DB_HOST', 'localhost');
define('DB_NAME', 'brickmmo_uptime');
define('DB_USER', 'root');
define('DB_PASS', '');

define('SITE_URL', 'http://uptime.brickmmo.com');
define('ADMIN_EMAIL', 'admin@brickmmo.com');
define('CHECK_INTERVAL', 300);
define('TIMEOUT', 30);

try {
    // XAMPP MySQL uses 127.0.0.1 with port 3306, or unix socket
    // Try 127.0.0.1 first, then localhost
    try {
        $pdo = new PDO("mysql:host=127.0.0.1;port=3306;dbname=" . DB_NAME, DB_USER, DB_PASS);
    } catch(PDOException $e) {
        // If that fails, try with unix socket for XAMPP
        $pdo = new PDO("mysql:unix_socket=/Applications/XAMPP/xamppfiles/var/mysql/mysql.sock;dbname=" . DB_NAME, DB_USER, DB_PASS);
    }
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec("set names utf8");
} catch(PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

session_start();

date_default_timezone_set('America/Toronto');

error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
