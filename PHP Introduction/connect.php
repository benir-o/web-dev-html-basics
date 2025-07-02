<?php
// Database credentials
$host = "localhost";      // Replace if using a remote server
$username = "root";       // Default XAMPP/WAMP username
$password = "";           // Default XAMPP/WAMP password (empty)
$database = "base_data_1"; // Replace with your database name

// Create connection
$conn = mysqli_connect($host, $username, $password, $database);

// Check connection
if ($conn) {
    //die("Connection failed: " . mysqli_connect_error());
    echo "You are connected";
} else {
    echo "Could not connect";
}
