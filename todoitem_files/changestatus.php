<?php

require_once("../TODOLISTFRAMEWORK/databaseframework.php");
$sql = "UPDATE todolist SET status = IF(status=1, 0, 1) WHERE id=2";

if ($conn->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
  echo "Error updating record: " . $conn->error;
}
$conn->close();
?>
