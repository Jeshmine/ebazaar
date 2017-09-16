<style>
	hr
	{
		margin-top:0px;
	}
</style>
		
<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>


	<div class="col-sm-8 col-sm-offset-2" style=" margin-top:77px">
  		<div class="panel panel-default">
    		<div class="panel-body">
    			<h3><b>User Account Details</b></h3>
    			<hr/>
				<h4><b>Edit your Infomation:</b></h4>
    			<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/controller/accountEdit">
					<div class="form-group">
						<label for="name" class="control-label col-sm-3">Name:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="name" name="name" value="<?php echo $name;?>"/>
						</div>
					</div>
				  
					    <div class="form-group">
						<label for="location" class="control-label col-sm-3">Location:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="location" name="location" value="<?php echo $location;?>"/>
						</div>
					</div>

				    <div class="form-group">
						<label for="contact_number" class="control-label col-sm-3">Contact No:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="contact_number" name="contact_number" value="<?php echo $phone;?>"/>
						</div>
				    </div>

				    <div class="form-group">
						<label for="description" class="control-label col-sm-3">Your Details:</label>
						<div class="col-sm-8">
							<textarea placeholder="Enter the details...." name="description"><?php echo $description;?></textarea>
						</div>
				    </div>
				
			    	<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-right">Save</button>
							</div>
							<div class="col-sm-6">
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
							
						</div>
					</div>
				</form>
				
				<hr/>
				<h4><b>Change Your Password:</b></h4>

				<form class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/controller/accountPasswordEdit">
					<div class="form-group">
						<label for="current_password" class="control-label col-sm-3">Enter current password:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="current_password" name="current_password"/>
						</div>
					</div>

					<div class="form-group">
						<label for="new_password" class="control-label col-sm-3">Enter new password:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="new_password" name="new_password"/>
						</div>
					</div>

					<div class="form-group">
						<label for="re_password" class="control-label col-sm-3">Re-enter new password:</label>
						<div class="col-sm-8">
							<input type="text" class="form-control" id="re_password" name="re_password"/>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-sm-6">
								<button type="submit" class="btn btn-success pull-right">Confirm</button>
							</div>
							<div class="col-sm-6">
								<button type="reset" class="btn btn-danger">Reset</button>
							</div>
							
						</div>
					</div>
				</form>
    		</div>
    	</div>
    </div>