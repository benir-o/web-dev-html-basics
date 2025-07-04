<?php
// Database credentials
$host = "localhost";      // Replace if using a remote server
$username = "root";       // Default XAMPP/WAMP username
$password = "Kenya254";
//$database = "company_db_2";           // Default XAMPP/WAMP password (empty)
// Replace with your database name

// Create connection
$conn = mysqli_connect($host, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
    //echo "Could not connect";
} else {
    echo "You are connected";
}
