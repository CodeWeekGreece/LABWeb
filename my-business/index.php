<?php
// Initialize the session

session_start();



$username = $_SESSION['username'];
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>
<!DOCTYPE html>
<html>
<?php include('head.php') ?>

<body>
<?php include('sidebar.php') ?>

<div class="container">
	<h1 class="page-header text-center">Utter | My Businesses<br>	<?=$username?><br>
 </h1>
	<div class="row">
		<div class="col-sm-8 col-sm-offset-2">
			<div class="row">
			<?php
				if(isset($_SESSION['error'])){
					echo
					"
					<div class='alert alert-danger text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['error']."
					</div>
					";
					unset($_SESSION['error']);
				}
				if(isset($_SESSION['success'])){
					echo
					"
					<div class='alert alert-success text-center'>
						<button class='close'>&times;</button>
						".$_SESSION['success']."
					</div>
					";
					unset($_SESSION['success']);
				}
			?>
			</div>
			<div class="row">
				<a href="#addnew" data-toggle="modal" class="btn btn-primary pull-right"><span class="glyphicon glyphicon-plus"></span> Create a new Bussiness</a><br>
			</div>
			<hr>
			<div class="height10">
			</div>
			<div class="row">
				<table id="myTable" class="table table-bordered table-striped table-responsive">
					<thead>
						<th>ID</th>
						<th>Name</th>
						<th>Category</th>
						<th>Prefecture</th>
						<th>Region</th>
						<th>Management</th>
					</thead>
					<tbody>
						<?php
							include_once('connection.php');
							$sql = "SELECT * FROM businesses WHERE business_administrator = '$username'";

							//use for MySQLi-OOP
							$query = $conn->query($sql);
							while($row = $query->fetch_assoc()){
								echo 
								"<tr>
									<td>".$row['business_id']."</td>
									<td>".$row['business_name']."</td>
									<td>".$row['business_category']."</td>
									<td>".$row['business_nomos']."</td>
									<td>".$row['business_perifereia']."</td>
									<td>
										<a href='#edit_".$row['business_id']."' class='btn btn-success btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-edit'></span></a>
										<a href='delete.php?business_id=".$row['business_id']."' class='btn btn-danger btn-sm' data-toggle='modal'><span class='glyphicon glyphicon-trash'></span></a>
									</td>
								</tr>";
								include('edit_delete_modal.php');
							}
					

						?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
	//inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
    	$('.alert').hide();
    })
});
</script>
<?php include('add_modal.php') ?>

</body>
<<style>
.PP{
	text-align: center;
}
</style>
</html>