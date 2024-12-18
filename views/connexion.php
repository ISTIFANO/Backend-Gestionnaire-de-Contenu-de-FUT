<?php
$servername = "db";
$username = "root";
$password = "rootpassword";
$database ="gestionnaire";
$conn = mysqli_connect($servername, $username, $password,$database);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//  echo "Connected successfully";


?>

