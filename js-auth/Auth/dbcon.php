<?php  
$servername = "localhost"; // Replace with your database server name
$username = "root";       // Replace with your database username
$password = "";       // Replace with your database password
$dbname = "tool_traditions";    // Replace with your database name

// Create a connection
$db = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}