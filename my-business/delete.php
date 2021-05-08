<?php
	session_start();
	include_once('connection.php');

	if(isset($_GET['business_id'])){
		$sql = "DELETE FROM businesses WHERE business_id = '".$_GET['business_id']."'";

		//use for MySQLi OOP
		if($conn->query($sql)){
			$_SESSION['success'] = 'Your business has been successfully deleted permanently!';
		}
		////////////////

		//use for MySQLi Procedural
		// if(mysqli_query($conn, $sql)){
		// 	$_SESSION['success'] = 'Member deleted successfully';
		// }
		/////////////////
		
		else{
			$_SESSION['error'] = 'Βρέθηκε σφάλμα στην διαγραφή της καταχώρησης';
		}
	}
	else{
		$_SESSION['error'] = 'Διαλέξτε μια καταχώρηση για να την διαγράψετε πρώτα';
	}

	header('location: index.php');
?>