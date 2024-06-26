<?php

// Database Configuration.
$servername = "localhost";
$username = "root";
$password = "";
$database = "personal_db";

// Creating Connection.
$conn = new mysqli($servername, $username, $password, $database);

// Check Connection.
if ($conn->connect_error) {

    // Connection Failure;
    die("Connection Failed: " . $conn->connect_error);
}
// Connection Successful;

// Close Connection.
$conn->close();
