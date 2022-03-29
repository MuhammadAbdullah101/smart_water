<?php 
		include_once 'source_files/connection.php';	
		header("content-type: application/json");
		require('C:/Users/Abdul/vendor/autoload.php') ;

		$id=$_POST['id'];

		if( $id == "phvalue"):
			$request = $conn->query("SELECT phvalue  FROM departments WHERE department_id =1  ORDER BY id DESC limit 1");
	    elseif( $id == "turbidityvalue"):
			$request = $conn->query("SELECT turbidityvalue  FROM departments WHERE department_id =1  ORDER BY id DESC limit 1");
		elseif($id=='tdsvalue'):
			$request = $conn->query("SELECT tdsvalue  FROM departments WHERE department_id =1  ORDER BY id DESC limit 1");	
		else:	
			echo('Invalid');
			
		endif;
			$response  = array();
			
			while($row = mysqli_fetch_assoc($request)):

				$response['value'] = $row[$id];

			endwhile;

			echo json_encode($response);
		

?>