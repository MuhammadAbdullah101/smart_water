<?php
include_once 'source_files/connection.php';
header("content-type: application/json");
require('C:/Users/Abdul/vendor/autoload.php') ;


$x_readTime  = mysqli_query($conn, 'SELECT reading_time from departments WHERE  department_id =1 ORDER BY ID DESC  ');
$ph_val   = mysqli_query($conn, 'SELECT phvalue FROM departments  WHERE  department_id =1 ORDER BY ID DESC  ');

while($time = mysqli_fetch_assoc($x_readTime)):

			$x[] =  strtotime($time['reading_time'])*1000;

			
while($ph = mysqli_fetch_assoc($ph_val)):

		$y[] = doubleval($ph['phvalue']);	

 	endwhile;
 endwhile;

 $ret = array($x, $y);
echo json_encode($ret);

?>