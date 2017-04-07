<?php
require_once("../TODOLISTFRAMEWORK/databaseframework.php");

$sql = "UPDATE todoitem SET task=0 WHERE id=2";

if ($conn->query($sql)===TRUE) {
    echo "Table myusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close()
