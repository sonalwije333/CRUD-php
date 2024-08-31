<?php
$servername = "localhost";
$username = "root";
$password = "";
$dBName = "student_db";

// Create connection
$conn = new mysqli($servername, $username, $password , $dBName);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";
