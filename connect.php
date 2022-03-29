<html>
<body>

<?php

// $account_sid = 'AC322a874684978d7d70c9ea1ed82931fc';
// $auth_token = 'c54caf19154a5be5e26ec2b54d6cac55';
// $twilio_number = "+12052936017";
// $client = new Twilio\Rest\Client($account_sid, $auth_token);

$dbname = 'esp_data';
$dbuser = 'root';  
$dbpass = ''; 
$dbhost = 'localhost'; 

$connect = @mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if(!$connect){
	echo "Error: " . mysqli_connect_error();
	exit();
}

echo "Connection Success!<br><br>";

 $turbidity  = $_GET["turbidityValue"];
 $phval      = $_GET["phValue"]; 
 $temperature= $_GET["waterTemperature"];

$query = "INSERT INTO departments (phvalue, turbidityvalue,tdsvalue,tempvalue,department_id) VALUES ($phval,$turbidity ,'250',$temperature,'1')";
$result = mysqli_query($connect,$query);

echo "Insertion Success!<br>";
// *************************SMS Work*****************************************
// if ($phval <=6.5 ): {

// $client->messages->create('+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'PH level is: '.$phval.' water acidity inceasing'
//     )
// );

//   }
//   elseif ($phval >=8.5) {
//   	$client->messages->create('+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Ph  level is: '.$phval.' Water Alklinity increasing'
//     )
// );

//   }
// endif;

//   if ($turbidity ==2 ): {

// $client->messages->create('+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Turbidity level is: '.$turbidity.' Water  is getting Muddy'
//     )
// );

//   }
//   elseif ($turbidity ==3) {
//   	$client->messages->create('+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Turbidity level is: '.$turbidity.' Water  is Muddy'
//     )
// );

//   }
//   elseif ($turbidity >=4) {
//   	$client->messages->create('+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Turbidity level is: '.$turbidity.' Water  is very Muddy'
//     )
// );

//   }
// endif;

// if ($temperature<=10.0) {
// 		$client->messages->create( '+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Water Temperature is getting down : '.$turbidity.
//     )
// );
// 	}
// 	elseif ($temperature>=35.50) {
// 			$client->messages->create('+923134773487',
//     array(
//         'from' => $twilio_number,
//         'body' => 'Water Temperature is getting up : '.$turbidity.
//     )
// );
// 	}

// endif;
// //*************************SMS Work END*****************************************

?>
</body>
</html>