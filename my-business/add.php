<?php
	session_start();
	include_once('connection.php');

	if(isset($_POST['add'])){
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
		$sql = "INSERT INTO businesses (business_name, business_category, business_nomos, business_perifereia, bwh_start, bwh_end, business_email, business_website, business_address, business_phone, business_administrator) VALUES 
		('$business_name', '$business_category', '$business_nomos', '$business_perifereia', '$bwh_start', '$bwh_end', '$business_email', '$business_website', '$business_address', '$business_phone', '$business_administrator')";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Your Business has been successfully created!';
		}
		///////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member added successfully';
		// }
		//////////////
		
		else{
			$_SESSION['error'] = 'Something went wrong while adding';
		}
	}
	else{
		$_SESSION['error'] = 'Fill up add form first';
	}

	header('location: index.php');
?>