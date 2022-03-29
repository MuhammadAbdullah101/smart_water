<?php
include_once 'source_files/connection.php';
header("content-type: application/json");
require('C:/Users/Abdul/vendor/autoload.php') ;


$isFirstTime=$_GET["data_to_server"];

if($isFirstTime=="true"){
  $data  = mysqli_query($conn, 'SELECT reading_time, turbidityvalue from departments WHERE  department_id =1 ORDER BY ID');

} else {
  $data  = mysqli_query($conn, 'SELECT reading_time, turbidityvalue from departments WHERE  department_id =1 ORDER BY ID DESC  LIMIT 1');

}
$ret = array();
while($time = mysqli_fetch_assoc($data)):

    
      $x=doubleval($time['turbidityvalue']);
      $y=strtotime($time['reading_time'])*1000;
      array_push($ret, array($y, $x));

endwhile;
echo json_encode($ret);


?>