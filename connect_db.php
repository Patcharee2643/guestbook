<?php
$servername = "localhost";
$username = "cpe2643";
$password = "Jaoliu@1002";
$db_name = "cpe2643";

// Create connection
$conn = new mysqli($servername, $username, $password, $db_name);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>