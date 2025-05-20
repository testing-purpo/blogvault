<?php
$host = 'db'; // Docker service name for MySQL
$dbname = 'blogvault';
$user = 'bloguser';
$pass = 'blogpass';

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
