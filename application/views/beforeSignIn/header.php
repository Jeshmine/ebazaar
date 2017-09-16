<nav class="navbar navbar-fixed-top topHeader">	
	<div class="container-fluid">
		<div class="row" style="margin-bottom: 7px; margin-top: 7px;">
			<div class="col-md-1">
			</div>
			 <div class="col-md-1"><!--Ebazaar Logo Section-->
			 
				<a href="#"><img src="<?php echo base_url(); ?>resources/ebazaarlogo.png"/></a>
			</div>
			
			<div class="col-md-5 searchWrapper" ><!--Search Product Section-->
				<form class="form-horizontal" role="form">
					<div class="col-md-12">
						<input type="text" class="form-control" style="padding-right: 138px;" placeholder="I'm shopping for..." aria-label="Text input with segmented button dropdown">
						<div class="input-group searchRightSide">
							<select style="border: 1px solid #ccc;height:34px;">
							  <option value="volvo" selected>All Category</option>
							  <?php
							  foreach ($category->result() as $row)
								{	
								?>	
									<option value="<?php echo $row->category_id;?>"><?php echo $row->category_name;?></option>
								<?php
								}
								?>
							  
							  
							</select>
						<button type="button" class="btn btn-success searchRightSideBtn"><span class="glyphicon glyphicon-search"></span></button>
					
						</div>
					</div>				
				</form>
			</div>
			
			<div class="col-md-2 iconToolWrapper">
				
				<div class="col-xs-4 col-sm-4 col-md-4">
					<!--<a href="<?php echo base_url(); ?>index.php/controller/wishlist"><i class="fa fa-heart fa-2x" aria-hidden="true" id="heartIcon" style="cursor:pointer;"></i></a>-->
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4">
					<!--<i class="fa fa-shopping-cart fa-2x" aria-hidden="true" id="cartIcon" style="cursor:pointer;"></i>
					<span class="badge" id="cartIconBadge" style="position:absolute;top:-5px;left:29px;background-color:red;cursor:pointer;">33</span>-->
				</div>
				
				
			</div>
			
			<div class="col-md-2 signInWrapper" >
				<ul class="rightSignInWrapper">
					<div class="rightSignInWrapperBtn" id="rightSignInWrapperSignInBtn">
						<a href="#"><li id="signIn">Sign In</li></a>
						<div class="rightSignInWrapperSignInBtn">
							<form role="form" class="col-md-12" style="margin:17px 0px;" method="post" action="<?php echo base_url(); ?>index.php/controller/signin">
							  <div class="form-group">
								<input type="email" class="form-control" id="email" placeholder="Email" name="signin_email">
							  </div>
							  <div class="form-group">
								<input type="password" class="form-control" id="pwd" placeholder="Password" name="signin_pwd">
							  </div>
							  <input type="hidden" class="form-control" id="signin_pwd" name="signin_hidden" value="1">
							  <div class="checkbox">
								<label><input type="checkbox"> Remember me</label>
							  </div>
							  <button type="submit" class="btn btn-success">Sign In</button>
							</form>
						</div>
						<div class="rightSignInWrapperSignInBtnHidden">
						</div>
						
					</div> | 
					<div class="rightSignInWrapperBtn">
						<a href="<?php echo base_url(); ?>index.php/controller/login"><li id="join">Join</li></a>
					</div >
					
				</ul>
			</div>
			
			
		</div>
	</div>
</nav>

