<?php


$servername = "localhost";
$username = "twl0987";
$password = "twl0987";
$dbname = "scEarlyBirds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
