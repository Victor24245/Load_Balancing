<?php
$conn = new mysqli("db", "myuser", "mypassword", "mydatabase");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected to MySQL successfully!";
?>

