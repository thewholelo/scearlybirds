<?php


$servername = "localhost";
$username = "twl0987";
$password = "twl0987";
$dbname = "scEarlyBirds";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection, and provide message to user if there is a problem
if ($conn->connect_errno) {
    echo "I'm having some trouble connecting to the database, please contact Lo " . $conn->connect_error;
}
