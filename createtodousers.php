<?php
$servername = "localhost:3306";
$username = "root";
$password = "";
$database= "WaltersDatabase";


$newusernamepart1= $_GET["firstname"];
$newusernamepart2= $_GET["lastname"];
#$newpassword= $_GET["password"];
$newemail= $_GET["email"];

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$sql= "INSERT INTO myusers (firstname, lastname, email)
VALUES ('" .$newusernamepart1 . "', '".$newusernamepart2 ."', '".$newemail."')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
