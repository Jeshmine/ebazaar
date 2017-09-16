<div class="container upload_wrapper" style="margin-top:77px;">
	<div class="panel panel-default" style="margin:0px 127px; box-shadow: 1.5px 1.5px 7px 0.3px #ADADAD;">
		  <div class="panel-body">
			<p><b>Validation code is send to your email. Check your email, copy and paste code here: </b></p>
			<form role="form" id="validEmail" method="post" action="<?php echo base_url(); ?>index.php/controller/validEmail">
				<div>
					 <input type="text" name="code" class="form-control center-block" placeholder="Enter code" style="width:100px;">
				</div>
				<div style="margin-top:27px;">
					  <button type="submit" class="btn btn-success center-block">Submit</button>
				</div>
			</form>
		  </div>
	  
	 </div>
</div>
