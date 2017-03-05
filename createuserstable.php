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

// sql to create table
$sql = "CREATE TABLE myusers(
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql)===TRUE) {
    echo "Table myusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
