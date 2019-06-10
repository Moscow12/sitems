<?php 
session_start();

$response = array();

if (isset($_POST['register'])) {
	
	//validate form
	if (!empty($_POST['registration_number'])) {

		if (!$_POST['course'] == 0) {
			//return true
			$response["error"] = false;
			$_SESSION['registration_number']=$_POST['registration_number'];
			$_SESSION['course']=$_POST['course'];
			include('saveFPrints.php');
			header('location:saveFPrints.php');

		}else{
			//echo "please select course";
			$response["error"] = true;
			$response["message"] = "please select student course";
		}
	
	}else{
		//echo "empty reg";
		    $response["error"] = true;
			$response["message"] = "Student registration number required..";
	}

	echo json_encode($response["message"]);
}


 ?>