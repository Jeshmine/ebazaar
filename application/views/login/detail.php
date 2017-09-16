
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>resources/css/detail.css"/>
<script type="text/javascript" src="<?php echo base_url(); ?>resources/js/detail.js" ></script>

<script src="//cdn.tinymce.com/4/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>

<div class="container upload_wrapper">
	<div class="panel panel-default" style="margin:0px 100px; box-shadow: 1.5px 1.5px 7px 0.3px #ADADAD;">
	  <div class="panel-body">
		<form id="info_wrapper" class="form-horizontal" role="form" method="post" action="<?php echo base_url(); ?>index.php/controller/detailInserter">
				
			<div id="info">User Information</div>
			<div class="form-group">
				<label class="control-label col-md-3" for="location">Location :</label>
				<div class="col-md-5">
				  <input type="text" class="form-control" id="location" name="location" placeholder="Location">
				</div>
			  </div>
			  <div class="form-group">
				<label class="control-label col-md-3" for="contact">Contact Number :</label>
				<div class="col-md-5"> 
				  <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
				</div>
			  </div>
			  
			  <div class="form-group">
				<label class="control-label col-md-3" for="contact">Account no. :</label>
				<div class="col-md-5"> 
				  <input type="text" class="form-control" id="contact" name="contact" placeholder="Contact Number">
				</div>
			  </div>
			  
			 
			<div class="form-group">
				<label class="control-label col-md-3" for="about">Enter About You :</label>
				<div class="col-md-8"> 
				  <textarea placeholder="Enter about you..." name="about" ></textarea>
				</div>
			  </div>
			
			<div class="form-group">
				<div class="col-md-12"> 
				  <input type="submit" value="Next" id="next_button" name="next_button"/>
				</div>
			  </div>

			
		</form>
	  </div>
	</div>
	
</div>