<!-- Add New -->
<div class="modal fade" id="addnew" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <center><h4 class="modal-title" id="myModalLabel">Create my Bussness</h4></center>
            </div>
            <div class="modal-body">
			<div class="container-fluid">
			<form method="POST" action="add.php">
				<div class="row form-group">
				<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Business Name:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_name">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Business Category:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_category">
						</div>
					</div>
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Prefecture:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_nomos">
						</div>
					</div>
					<!-- Template -->
					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Region:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_perifereia">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Business Hours:</label>
						</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="bwh_start">
						</div>
						<div class="col-lg-1">
							until
							</div>
						<div class="col-lg-4">
							<input type="text" class="form-control" name="bwh_end">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">e-Mail:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_email">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Website:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_website">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Address:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_address">
						</div>
					</div>

					<div style="height:10px;"></div>
					<div class="row">
						<div class="col-lg-2">
							<label class="control-label" style="position:relative; top:7px;">Phone:</label>
						</div>
						<div class="col-lg-10">
							<input type="text" class="form-control" name="business_phone">
						</div>
					</div>

					<input type="hidden" class="form-control" name="business_administrator" value="<?php echo htmlspecialchars($_SESSION["username"]); ?>">
            </div> 
			</div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
                <button type="submit" name="add" class="btn btn-primary"><span class="glyphicon glyphicon-floppy-disk"></span> Create</a>
			</form>
            </div>

        </div>
    </div>
</div>