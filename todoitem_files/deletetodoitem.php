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

//$postalservice= ($_POST["name"]);

// sql to delete a record
$sql = "DELETE FROM todolist WHERE id=1";

if ($conn->query($sql)===TRUE) {
    echo "Table myusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
