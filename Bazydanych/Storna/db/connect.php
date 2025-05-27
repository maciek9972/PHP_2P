<?php
$servername = "localhost";
$username = "durlej";
$password = "korale1313";
$name = "durlej";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$name);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>