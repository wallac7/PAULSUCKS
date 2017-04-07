<?php
$returnarray= array();
require_once("../TODOLISTFRAMEWORK/databaseframework.php");

$sql= "SELECT * from todolist";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    while($row = $result->fetch_assoc()) {
      $temparray= array(
        "id" => $row["id"],
        "task" => $row["task"],
        "status"=> $row["regdate"],
        "deadline"=> $row["deadline"],
      );
      $returnarray[] = $temparray;
    }

    echo json_encode($returnarray);
} else {
    echo "0 results";
}


$conn->close()
