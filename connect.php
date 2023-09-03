<?php

$hostname = 'localhost';         
$username = 'cop4710ProjectAdmin';    
$password = '@Database';     
$db = 'cop4710';    

// Create a database connection
$conn = new mysqli($hostname, $username, $password, $db);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Connection successful!
echo "Connected to database successfully.";




?>