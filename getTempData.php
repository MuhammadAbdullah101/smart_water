<?php
include_once 'source_files/connection.php';
header("content-type: application/json");
require('C:/Users/Abdul/vendor/autoload.php') ;
$temp_val   = mysqli_query($conn, 'SELECT tempvalue FROM departments  WHERE  department_id =1 ORDER BY ID DESC  LIMIT 1');

			
while($temperature = mysqli_fetch_assoc($temp_val)):

		$temp = doubleval($temperature['tempvalue']);	

 endwhile;


echo json_encode($temp);

?>