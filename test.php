<?php
$mysqli = new mysqli("127.0.0.1", "root", "root", "laravel-learn");

if ($mysqli->connect_error) {
    die("Connection failed: " . $mysqli->connect_error);
}
echo "Connected successfully";
?>
