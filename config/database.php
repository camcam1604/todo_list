<?php
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME','tasks');

$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if ($mysqli->connect_errno) {
    echo "Connection failed: ". $mysqli->connect_error;
    exit();
}

//echo 'Success: A proper connection to MySQL was made.';
//echo '<br>';
//echo 'Host information: ' . $mysqli->host_info;
//echo '<br>';
//echo 'Protocol version: ' . $mysqli->protocol_version;

$mysqli->close();
?>
