<?php 
		include_once 'source_files/connection.php';	

	
			$request = $conn->query("SELECT * FROM departments where department_id ='1'  ORDER BY ID ");	
	
				$response  = array();
			header("content-type: application/json");		
			while($row = mysqli_fetch_assoc($request)):

				$response['ph'] =  doubleval($row["phvalue"]);
				$response['trb'] = intval($row["turbidityvalue"]);
				$response['tds'] = intval($row["tdsvalue"]);


			endwhile;

			echo json_encode($response);
		

?>