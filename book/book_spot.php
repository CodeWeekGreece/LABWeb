<?php

include_once('connection.php');

	if(isset($_POST['book_spot'])){
		$guest_fullname=$_POST['guest_fullname'];
		$guest_email=$_POST['guest_email'];
		$guest_phone=$_POST['guest_phone'];
		$rantevou_date=$_POST['rantevou_date'];
		$rantevou_hour=$_POST['rantevou_hour'];
		$rantebou_timing=$_POST['rantebou_timing'];
		$rantebou_comments=$_POST['rantebou_comments'];
		$business_id=$_POST['business_id'];
		$sql = "INSERT INTO appointments (guest_fullname, guest_email, guest_phone, rantevou_date, rantevou_hour, rantebou_timing, rantebou_comments, business_id) VALUES 
		('$guest_fullname', '$guest_email', '$guest_phone', '$rantevou_date', '$rantevou_hour', '$rantebou_timing', '$rantebou_comments', '$business_id')";
    
		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Booking has been confirmed successfully';
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

//	header('location: booking.php');
?>