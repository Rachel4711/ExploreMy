<?php

// --- Database Configuration ---
$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "ExploreMY_db"; 

// --- Create the Connection Object ---
$conn = new mysqli($servername, $username, $password, $dbname);

// --- Check for Connection Errors ---
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
