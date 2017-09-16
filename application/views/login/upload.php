
<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>resources/css/upload.css"/>

<script>
function a(event){
var tmppath = URL.createObjectURL(event.target.files[0]);
    $("#user_img").attr('src',URL.createObjectURL(event.target.files[0]));

}
</script>

<div class="container upload_wrapper">
	<div class="panel panel-default upload_wrapper_panel">
	  <div class="panel-body">
	  
		 <div class="col-md-4">
			<img class="img-thumbnail img-responsive center-block" src="<?php echo base_url();?>resources/user_image/default.png" id="user_img" style="margin-top: 57px;margin-bottom: 57px;"/>
		 </div>
		 
		 <div class="col-md-8">
			<form role="form" class="upload_wrapper_form" method="post" action="<?php echo base_url(); ?>index.php/controller/photoUpload" enctype="multipart/form-data">
			
				
				<div class="form-group">
					<label for="email" id="upload_text">Upload Your Profile Image</label>
					<input type="file" name="image_file" class="form-control" id="uploadPic" onchange="a(event)" style="margin-top: 13px;" onchange="changePic()">
				</div>
				 
			  <div class="form-group" style="margin-top:31px;">
				<div class="col-md-6" >
				  <a href="<?php echo base_url();?>index.php/controller/skipToDetail"><input type="button" name="skip" class="form-control btn btn-default btn-md" value="Skip" class="upload_button" style="float:right;width:97px;height:35px;"/></a>
				</div>
				<div class="col-md-6">
				  <input type="submit" name="submit" class="form-control btn btn-success btn-md" value="Upload" class="upload_button"  style="float:left;width:97px;height:35px;"/>
				</div>
			  </div>
			
			</form>
		</div>
	  
		
			
	  </div>
	</div>
	
</div>

