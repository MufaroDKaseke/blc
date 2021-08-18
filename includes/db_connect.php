<?php
$server_name = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "blc";

// Create connection
$conn = mysqli_connect($server_name, $db_username, $db_password, $db_name);
// Check connection
if (!$conn) {
    die("Connection failed: " . $conn->connect_error);
} 

/* else {
  echo "Connection Sucessfull!!!";
} */

?>