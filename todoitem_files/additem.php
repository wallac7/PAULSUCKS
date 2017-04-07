<?php
require_once("../TODOLISTFRAMEWORK/databaseframework.php");
$postalservice= ($_POST["name"]);

// sql to create table

$sql = "INSERT INTO todolist (task)
VALUES ('".$postalservice."');";

if ($conn->query($sql)===TRUE) {
    echo "Table myusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
