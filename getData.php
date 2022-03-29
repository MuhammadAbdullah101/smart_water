<?php
include_once 'source_files/connection.php';
header("content-type: application/json");
require('C:/Users/Abdul/vendor/autoload.php') ;


$x_readTime  = mysqli_query($conn, 'SELECT reading_time from departments WHERE  department_id =1 ORDER BY ID DESC  LIMIT 1');
$ph_val   = mysqli_query($conn, 'SELECT phvalue FROM departments  WHERE  department_id =1 ORDER BY ID DESC  LIMIT 1');

while($time = mysqli_fetch_assoc($x_readTime)):

			$x =  strtotime($time['reading_time'])*1000;

			 endwhile;
while($ph = mysqli_fetch_assoc($ph_val)):

		$y = doubleval($ph['phvalue']);	

 
 endwhile;

 $ret = array($x, $y);
echo json_encode($ret);
//*************************SMS Work*****************************************
//   if ($y >8.5 ): {

// // Your Account SID and Auth Token from twilio.com/console
// $account_sid = 'AC322a874684978d7d70c9ea1ed82931fc';
// $auth_token = 'c54caf19154a5be5e26ec2b54d6cac55';
// $twilio_number = "+12052936017";
// $client = new Twilio\Rest\Client($account_sid, $auth_token);
// $client->messages->create(
    
//     '+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Water Quality is bad '
//     )
// );

//   }
// endif;
//*************************SMS Work END*****************************************

?>