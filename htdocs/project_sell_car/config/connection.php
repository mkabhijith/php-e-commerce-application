<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname ="used_car"
// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);

$conn = mysqli_connect("localhost", "root", "", "used_car");
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}



?> 