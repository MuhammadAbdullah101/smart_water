<?php
include_once 'source_files/connection.php';
header("content-type: application/json");

$Query  = $conn->query("SELECT * FROM departments where department_id=1 order by id limit 10");

while ($data = $Query->fetch_array(MYSQLI_ASSOC)){
    $sensor_data[] = $data;
}

  echo json_encode($sensor_data);

?>