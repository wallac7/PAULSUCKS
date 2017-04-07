<?php
require_once("../TODOLISTFRAMEWORK/databaseframework.php");

$postalservice= ($_POST["name"]);

// sql to delete a record
$sql = "DELETE FROM todolist WHERE id=1";

if ($conn->query($sql)===TRUE) {
    echo "Table myusers created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();

?>
