<?php
// Database configuration
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'fashionfinds_store';

// Create a new MySQLi object
$mysqli = new mysqli($host, $username, $password, $database);

// Check if the connection was successful
if ($mysqli->connect_errno) {
    die('Failed to connect to MySQL: ' . $mysqli->connect_error);
}

// Connection successful
//echo 'Connected to MySQL';
?>
