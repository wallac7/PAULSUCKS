<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database= "WaltersDatabase";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

?>
