<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['edit'])){
		$business_id = $_POST['business_id'];
		$business_name=$_POST['business_name'];
		$business_category=$_POST['business_category'];
		$business_nomos=$_POST['business_nomos'];
		$business_perifereia=$_POST['business_perifereia'];
		$bwh_start=$_POST['bwh_start'];
		$bwh_end=$_POST['bwh_end']; 
		$business_email=$_POST['business_email'];
		$business_website=$_POST['business_website'];
		$business_address=$_POST['business_address'];
		$business_phone=$_POST['business_phone'];
		$business_administrator=$_POST['business_administrator'];
		$sql = "UPDATE businesses SET business_name = '$business_name', business_category = '$business_category', business_nomos = '$business_nomos', 
		business_perifereia = '$business_perifereia', bwh_start = '$bwh_start', bwh_end = '$bwh_end', business_email = '$business_email',
		business_website = '$business_website', business_address = '$business_address', business_phone = '$business_phone',
		business_administrator = '$business_administrator' WHERE business_id = '$business_id'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Your business details has been successfully updated!';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member updated successfully';
		// }
		///////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong in updating member';
		}
	}
	else{
		$_SESSION['error'] = 'Select member to edit first';
	}

	header('location: index.php');

?>