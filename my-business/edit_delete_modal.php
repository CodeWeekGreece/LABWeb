<!-- Edit -->
<div class="modal fade" id="edit_<?php echo $row['business_id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Edit my Business</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="edit.php">
				<input type="hidden" class="form-control" name="business_id" value="<?php echo $row['business_id']; ?>">
				<div class="row form-group">
        <div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Business Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_name" value="<?php echo $row['business_name']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Business Category:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_category" value="<?php echo $row['business_category']; ?>">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Prefecture:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_nomos" value="<?php echo $row['business_nomos']; ?>">
						</div>
					</div>
					<!-- Template -->
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_perifereia" value="<?php echo $row['business_perifereia']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Business Hours:</label>
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="bwh_start" value="<?php echo $row['bwh_start']; ?>">
						</div>
						<div class="col-lg-1">
							until
							</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="bwh_end" value="<?php echo $row['bwh_end']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">e-Mail:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_email" value="<?php echo $row['business_email']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Website:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_website" value="<?php echo $row['business_website']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_address" value="<?php echo $row['business_address']; ?>">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Phone:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_phone" value="<?php echo $row['business_phone']; ?>">
						</div>
					</div>

					<input type="hidden" class="form-control" name="business_administrator" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>">
				

            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="edit" class="btn btn-success"><span class="glyphicon glyphicon-check"></span> Update</a>
			</form>
      
            </div>


        </div>
    </div>
</div>